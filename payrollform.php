<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payroll | Valhalla</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/godstyle.css">
  

  <style>
    
	.navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
  
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
		margin-bottom: 0;
		position:relative;
		bottom:0;
		width:100%;
		left:0;
		right:0;
    }
    
   
   
	div.contents{
		margin:auto;
		width: 75%;
		border: 3px;
		padding: 40px;
		text-align: left;
		background-color: #f1f1f1;
		clear:both;
		
	}

	div.bgdiv{
		margin:auto;
		width: 100%;
		border: 3px;
		background-color: #D8D8D8;
		height:100%;
	}
	


.label {
    border-radius: 3px;
    font-size: 0.875em;
    font-weight: 600;
}
.user-list tbody td .user-subhead {
    font-size: 0.875em;
    font-style: italic;
}
.user-list tbody td .user-link {
    display: block;
    font-size: 1.25em;
    padding-top: 3px;
    margin-left: 60px;
}
a {
    color: #3498db;
    outline: none!important;
}
.user-list tbody td>img {
    position: relative;
    max-width: 50px;
    float: left;
    margin-right: 15px;
}

.table thead tr th {
    text-transform: uppercase;
    font-size: 0.875em;
}
.table thead tr th {
    border-bottom: 2px solid #e7ebee;
}
.table tbody tr td:first-child {
    font-size: 1.125em;
    font-weight: 300;
}
.table tbody tr td {
    font-size: 0.875em;
    vertical-align: middle;
    border-top: 1px solid #e7ebee;
    padding: 12px 8px;
}
p.userdisp{
	color: #0000EE;
	font-family: Arial, Helvetica, sans-serif;
	font-size:18px;
}
  </style>
</head>
<body style="background-color:#d8d8d8;height:100%">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Valhalla</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">My Profile</a></li>
        <li><a href="add.php">Add</a></li>
        <li><a href="employee.php">View</a></li>
		<li class="active"><a href="payroll.php">Payroll</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center" style="height:100%">
  <div class="row content" style="height:100%">
    <div class="row content " style="height:100%">
	<div class="bgdiv" style="height:100%">
    <div class="contents" style="height:100%">
	<br><br>
		<div class="forms"style="height:100%">
			<div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
								<th><span>#</span></th>
                                <th><span>Employee ID</span></th>
                                <th><span>Employee Name</span></th>
                                <th><span>Gross Pay</span></th>
                                <th><span>Income Tax Rate</span></th>
								<th><span>SSS Rate</span></th>
								<th><span>Total Deductions</span></th>
								<th><span>Net Pay</span></th>
                                <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php 
									$query="SELECT * FROM account";
									$result=mysql_query($query);
									$counter=0;
									while($row=mysql_fetch_array($result)):
										$grosspay=$row['paygrade'];
										$netpay=0;
										$deduction=0;
										$sssrate=0;
										$taxrate=0.2;
								?>
                                <tr>
									<td>
                                        <p class="userdisp"><?php echo ++$counter; ?></p>
                                    </td>
                                    <td>
                                        <p class="userdisp"><?php echo $row['id']; ?></p>
                                    </td>
                                    <td><p class="userdisp"><?php echo $row['firstname']." ".$row['lastname']; ?></p></td>
                                    <td>
										<p ><?php echo "P $grosspay"; ?></p></td>
                                    </td>
                                    <td>
                                        <p>
										<?php 
											if($grosspay >= 100000)
												$taxrate = 0.3;
											elseif($grosspay < 100000 && $grosspay >= 75000)
												$taxrate = 0.25;
											elseif($grosspay < 50000 && $grosspay >= 25000)
												$taxrate = 0.2;
											elseif($grosspay < 25000 && $grosspay >= 20000)
												$taxrate = 0.15;
											elseif($grosspay < 50000 && $grosspay >= 20000)
												$taxrate = 0.1;
											else
												$taxrate = 0.05;
											echo ($taxrate*100)."%"; 
										?>
										</p>
                                    </td>
                                     <td style="width: 20%;">
                                        <?php
											if($grosspay >= 100000)
												$sssrate = 0.25;
											elseif($grosspay < 100000 && $grosspay >= 50000)
												$sssrate = 0.2;
											elseif($grosspay < 50000 && $grosspay >= 20000)
												$sssrate = 0.1;
											else
												$sssrate = 0.05;
											echo ($sssrate*100)."%";
										?>
                                    </td>
									<td>
                                        <p>
											<?php 
												$deduction=($grosspay*$sssrate)+($grosspay*$taxrate);
												echo "P $deduction";
											?>
										</p>
                                    </td>
									<td>
                                        <p>
										<?php
											$netpay=$grosspay-$deduction;
											echo "P $netpay";
										?>
										</p>
                                    </td>
                                </tr>
                               <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
		</div>
	</div>
	</div>	
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&copy; Valhalla 2016</p>
</footer>

</body>
</html>

