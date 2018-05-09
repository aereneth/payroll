<?php
	session_start();
	if(!(isset($_SESSION['SESS_VAR'])))
		header("location: login.php");
	
	include('conn.php');
	include('addform.php');
	
	if(isset($_POST['submit'])){
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
		$access = strtolower($_POST['access']);
		
		if($password != $confirmpassword){
			echo "<h4>ERROR: Password Mismatch!</h4>";
		}
		else{
			$query="INSERT 
					INTO account(firstname,middlename,lastname,username,password,address,birthday,email,contact,tin,sss,paygrade,position,department,access,status)
					VALUES('$firstname','$middlename','$lastname','$username','$password','$address','$birthday','$email',$contact,$tin,$sss,$paygrade,'$position','$department','$access',1)";
			mysql_query($query) or die("ERROR: ".mysql_error()); 
			
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
			header("location: home.php");
		}
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