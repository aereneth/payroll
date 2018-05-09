<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login | Valhalla</title>
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
    
   
    @media screen and (max-width: 100%) {
    
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
	input[type=submit] {
				padding:10px 10px;  
				border:0 none;
				cursor:pointer;
				-webkit-border-radius: 5px;
				border-radius: 15px; 		
				font-size: 16px;
				margin-left: 70%
				
	}
	input[type=checkbox] {
		margin-left:10%
	}
	label{
		margin-left: 10%
	}
	div.forms{
		margin:auto;
		width: 37%;
		border: 3px solid gray;
		padding: 40px;
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
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center" style = "width:100%">
  <div class="row content " style="height:auto">
	<div class="bgdiv" style="height:auto">
    <div class="contents" style="height:auto">
		<div class="forms">
		<form action = "" method = "post">
	<label for="name"><b>Username:&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
	<input type = "text" name = "username" placeholder = "Username"><br/>
	<label for="name"><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
	<input type = "password" name = "password"  placeholder = "Password"><br/><br/>
	<input type = "checkbox" name = "remember">Remember Me<br/>
	<input type = "submit" name = "login" value = "Register">
		</form>
		</div>
		<div>
			<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;
		</div>	
    
   </div>
  </div>
</div>

<footer class="container-fluid text-center" style="width:100%">
  <p>&copy; Valhalla 2016</p>
</footer>

</body>
</html>

