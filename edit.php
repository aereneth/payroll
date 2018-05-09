<?php
	session_start();
	if(!(isset($_SESSION['SESS_VAR']))){
		session_destroy();
		header("location: login.php");
	}
	include('conn.php');
	$id=$_GET['id'];
	$query="SELECT * FROM account WHERE id=$id";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
	include('editform.php');
	
	if(isset($_POST['company'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		
		$address = $_POST['address'];
		$birthday = $_POST['birthday'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		
		$username = strtolower(substr($firstname,0,1)).strtolower(substr($middlename,0,1)).strtolower($lastname);
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		
		$tin = $_POST['tin'];
		$sss = $_POST['sss'];
		$paygrade = $_POST['paygrade'];
		$position = $_POST['position'];
		$department = $_POST['department'];
		//$access = strtolower($_POST['access']);
		$status = isset($_POST['status']) ? 1 : 0;
		
		$query="UPDATE account 
				SET firstname='$firstname',
				middlename='$middlename',
				lastname='$lastname',
				address='$address',
				birthday='$birthday',
				email='$email',
				contact=$contact,
				tin=$tin,
				sss=$sss,
				paygrade=$paygrade,
				position='$position',
				department='$department',
				status=$status
				WHERE id=$id";
		mysql_query($query) or die("ERROR: ".mysql_error()); 
		
		if($password){
			if($password==$confirmpassword){
				$query="UPDATE account SET password=$password WHERE id=$id";
				mysql_query($query) or die("ERROR: ".mysql_error()); 
			}
			else{
				echo "Confirm Password doesn't match Password!";
			}
		}
		
		if (!empty($_FILES['image']['name'])){
			$temp = $_FILES['image']['tmp_name'];
			$type = $_FILES['image']['type'];
			$ext = GetImageExtension($type);
			$imagename ="$username".$ext;
			$path = "image/";
			
			if(move_uploaded_file($temp, "$path$imagename")) {
				if (is_dir($path) && is_writable($path)) {
					$query_upload="UPDATE account SET image='$path$imagename' WHERE username='$username'";
					mysql_query($query_upload) or die("ERROR: ".mysql_error()); 
				} 
				else {
					echo 'Upload directory is not writable, or does not exist.';
				}
			}
		}
		
		header("location: employee.php");
	}
	
	function GetImageExtension($imagetype) {
		if(empty($imagetype)) return false;
			switch($imagetype)
			{
			   case 'image/bmp': return '.bmp';
			   case 'image/gif': return '.gif';
			   case 'image/jpeg': return '.jpg';
			   case 'image/png': return '.png';
			   default: return false;
			}
	}
?>