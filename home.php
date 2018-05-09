<?php
	session_start();
	if(!(isset($_SESSION['SESS_VAR'])))
		header("location: login.php");
	
	include('conn.php');
		
	$query="SELECT * FROM account WHERE id=".$_SESSION['id'];
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
	
	if($row['access'] == "admin")
		include("homeadminform.php");
	else
		include("homeuserform.php");
?>