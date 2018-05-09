<?php
	session_start();
	if(!(isset($_SESSION['SESS_VAR'])))
		header("location: login.php");
	include('conn.php');
	include('employeeform.php');
?>