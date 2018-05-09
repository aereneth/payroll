<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Account | Valhalla</title>
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
		display:block;
	}
	div.bgdiv{
		margin:auto;
		width: 100%;
		border: 3px;
		background-color: #D8D8D8
	}
	table, th, td {

    border-collapse: collapse;
	padding: 5px;
	}
	td.labels{
	
		width:40%;
		background-color: #e0ebeb;
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
      </button>
      <a class="navbar-brand" href="#">Valhalla</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">My Profile</a></li>
        <li><a href="add.php">Add</a></li>
        <li><a href="employee.php">View</a></li>
		<li><a href="payroll.php">Payroll</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">
  <div class="row content " style="height:auto">
	<div class="bgdiv" style="height:auto">
    <div class="contents" style="height:auto">
		<div style="width: 30%; float:left">
		   <img src="<?php echo $row['image']; ?>" alt="" style="width:250px;height:250px;">
		</div>

		<div style="width: 70%; float:right">
		<h1><?php echo $row['firstname']." ".$row['lastname']; ?></h1><br>
			 <div class="panel-heading" style="background-color: #e0ebeb;">
              <h3 class="panel-title"><b>Basic Information</b></h3>
            </div>
			<table class="table table-user-information" style ="border:0px">
                    <tbody>
					<tr></tr>
                      <tr>
                        <td class="labels">First Name:</td>
                        <td><?php echo $row['firstname']; ?></td>
                      </tr>
					  <tr>
                        <td class="labels">Middle Name:</td>
                        <td><?php echo $row['middlename']; ?></td>
                      </tr>
					  <tr>
                        <td class="labels">Last Name:</td>
                        <td><?php echo $row['lastname']; ?></td>
                      </tr>
					 <tr>
                        <td class="labels">Birthday:</td>
                        <td><?php echo $row['birthday']; ?></td>
                      </tr>
					  <tr>
						<td class="labels">Email:</td>
						<td><?php echo $row['email']; ?></td>
					  </tr>
                      <tr>
					<td class="labels">Contact Number:</td>
					<td><?php echo $row['contact']; ?></td>
					</tr>
					<tr>
						<td class="labels">Address:</td>
						<td><?php echo $row['address']; ?></td>
					</tr>
                     
                    </tbody>
            </table>
			<br>
			<div class="panel-heading" style="background-color: #e0ebeb;">
              <h3 class="panel-title"><b>Account Information</b></h3>
            </div>
			<table class="table table-user-information" style ="border:0px">
                    <tbody>
					<tr></tr>
                      <tr>
                        <td class="labels">Username:</td>
                        <td><?php echo $row['username']; ?></td>
                      </tr>
						<tr>
							<td class="labels">Active:</td>
							<td><?php echo $row['status'] == 1 ? "Active" : "Inactive"; ?></td>
						</tr>
					</tbody>
            </table>
			<br>
			<div class="panel-heading" style="background-color: #e0ebeb;">
              <h3 class="panel-title"><b>Work Information</b></h3>
            </div>
			<table class="table table-user-information" style ="border:0px">
                    <tbody>
					<tr></tr>
                      <tr>
                        <td class="labels">Department:</td>
                        <td><?php echo $row['department']; ?></td>
                      </tr>
                  
					  <tr>
						<td class="labels">Employee ID:</td>
						<td><?php echo $row['id']; ?></td>
					  </tr>
                      <tr>
					<td class="labels">TIN Number:</td>
					<td><?php echo $row['tin']; ?></td>
					</tr>
					<tr>
						<td class="labels">SSS Number::</td>
						<td><?php echo $row['sss']; ?></td>
					</tr>
                     
                    </tbody>
            </table>
          
			 
			
	</div>	
		<div>
			&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;
		</div>	
    
   </div>
  </div>
</div>

<footer class="container-fluid text-center" style="width:100%">
  <p>&copy; Valhalla 2016</p>
</footer>

</body>
</html>

