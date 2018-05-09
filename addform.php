<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Account | Valhalla</title>
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
	label{
				display: inline-block;
				float: left;
				clear: left;
				width: 250px;
				text-align: right;
				
				
			}
	div.bgdiv{
		margin:auto;
		width: 100%;
		border: 3px;
		background-color: #D8D8D8
	}
	div.forms{
				margin: auto;
				width: 60%;
				padding-top: 10px;
				padding-bottom: 40px;
				padding-left: 40px;
				
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
        <li class="active"><a href="add.php">Add</a></li>
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
  <div class="row content">
    <div class="row content " style="height:auto">
	<div class="bgdiv" style="height:auto">
    <div class="contents" style="height:auto">
	<br><br>
		<div class="forms">
		 <form enctype="multipart/form-data" method="POST">
		 <h1> Personal Information </h1>
		<!--<hr>-->
		<label for="name"><b>First Name: &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<input type="text" name="firstname"><br><br>
		<label for="name"><b>Middle Name: &nbsp;&nbsp;&nbsp;&nbsp; </b></label>
		<input type="text" name="middlename"><br><br>
		<label for="name"><b>Last Name: &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<input type="text" name="lastname"><br><br>
		<label for="name"><b>Birthday: &nbsp;&nbsp;&nbsp;&nbsp; </b></label>
		<input type="date" name="birthday"><br><br>
		<label for="name"><b>Address: &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<input type="text" name="address"><br><br>
		<label for="name"><b>Contact Number: &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<input type="tel" name="contact"><br><br>
		<label for="name"><b>Email: &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<input type="email" name="email"><br><br>
		<h1> Account Information </h1>
		<!--<hr>-->
		<!--<label for="name"><b>Username:&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<input type="text" name="firstName"><br><br>-->
		<label for="name"><b>Password: &nbsp;&nbsp;&nbsp;&nbsp; </b></label>
		<input type="password" name="password"><br><br>
		<label for="name"><b>Confirm Password: &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<input type="password" name="confirmpassword"><br><br>
		<label for="name"><b>Image: &nbsp;&nbsp;&nbsp;&nbsp; </b></label>
		<input type="file" name="image"><br><br>
		<h1> Business Information </h1>
		<!--<hr>-->
		<label for="name"><b>TIN Number: &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<input type="number" name="tin"><br><br>
		<label for="name"><b>SSS Number: &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<input type="number" name="sss"><br><br>
		<label for="name"><b>Paygrade: &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<input type="number" name="paygrade"><br><br>
		<label for="name"><b>Position: &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<input type="text" name="position"><br><br>
		<label for="name"><b>Department: &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<input type="text" name="department"><br><br>
		<!--<label for="name"><b>Status: &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<select name="status">
			<option>Active</option>
			<option>Inactive</option>
		</select><br><br>-->
		<label for="name"><b>System Status: &nbsp;&nbsp;&nbsp;&nbsp;</b></label>
		<select name="access">
			<option>User</option>
			<option>Admin</option>
		</select><br><br>
		
		<input type ="submit" name ="submit" value="Register"><br><br><br><br>
		</form>
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