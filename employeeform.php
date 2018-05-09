<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee List | Valhalla</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/godstyle.css">

  <style>
    
	.navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 100%}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #c0c0c0;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
	  position:relative;
                bottom:0;
                width:100%;
                left:0;
                right:0;
    }
    
   
    @media screen and (max-width: 767px) {
      .sidenav {
        height: 100%;
        padding: 15px;
      }
      .row.content {
		  height:100%;
		}
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
		background-color: #D8D8D8
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
		font-size:22px;
	}
  </style>
</head>
<body style="background-color:#d8d8d8">

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
        <li class="active"><a href="employee.php">View</a></li>
		<li><a href="payroll.php">Payroll</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">
  <div class="row content">
    <div class="row content " style="height:auto">
	<div class="bgdiv" style="height:auto">
    <div class="contents" style="height:auto">
	<br><br>
		<div class="forms">
			<div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th><span>User</span></th>
                                <th><span>Department</span></th>
                                <th class="text-center"><span>Status</span></th>
                                <th><span>Email</span></th>
                                <th>&nbsp;</th>
                                </tr>
                            </thead>
							<?php 
								$query="SELECT * FROM account";
								$result=mysql_query($query);
								while($row=mysql_fetch_array($result)):
							?>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?php echo $row['image']; ?>" alt="" style="width:150px;height:50px">
                                        <p class="userdisp"><?php echo $row['firstname']." ".$row['lastname']; ?></p>
                                        <span class="user-subhead"><?php echo $row['access']; ?></span>
                                    </td>
                                    <td><?php echo $row['department']; ?></td>
                                    <td class="text-center">
									<?php
										if($row['status']==1){
											echo '<span class="label label-success">Active</span>';
										}
										else{
											echo '<span class="label label-danger">Inactive</span>';
										}
									?>
                                    </td>
                                    <td>
                                        <a href="#"><?php echo $row['email']; ?></a>
                                    </td>
                                     <td style="width: 20%;">
                                        <form action="view.php?id=<?php echo $row['id']; ?>" method="POST">
											<input type ="submit" name ="view" value="View">
										</form>
										<form action="edit.php?id=<?php echo $row['id']; ?>" method="POST">
											<input type ="submit" name ="edit" value="Edit">
										</form>
										<form action="delete.php?id=<?php echo $row['id']; ?>" method="POST">
											<input type ="submit" name ="delete" value="Delete">
										</form>
                                    </td>
                                </tr>
                            </tbody>
							<?php endwhile; ?>
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

