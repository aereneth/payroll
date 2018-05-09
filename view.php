<?php
	session_start();
	if(!(isset($_SESSION['SESS_VAR'])))
		header("location: login.php");
	
	include('conn.php');
	$id=$_GET['id'];
	$query="SELECT * FROM account WHERE id=$id";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
	include('viewform.php');
?>