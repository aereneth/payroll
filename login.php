<?php
	include('conn.php');
	include('loginform.php');
	
	if(isset($_POST['login'])){
		$username = ($_POST['username']);
		$password = ($_POST['password']);

		if(isset($_POST['remember'])){
			setcookie("username", $_POST['username'], time()+3600);
			setcookie("password", $_POST['password'], time()+3600);
		}
		else{
			setcookie("username", "", time()-3600);
			setcookie("password", "", time()-3600);
		}
		
		$qry="SELECT * FROM account WHERE username='$username' AND password='$password'";
		$result=mysql_query($qry);
		
		if($result) {
			if(mysql_num_rows($result) > 0) {
				session_start();
				while($row=mysql_fetch_array($result)){
					$_SESSION['SESS_VAR']=1;
					$_SESSION['id']=$row['id'];
					$_SESSION['username']=$username;
					
					header("location: home.php");
				}
				exit();
			}
			else{
				echo "<h4>ERROR: Account not found!</h4>";
				//header("location: index.php");
				exit();
			}
		}
	}
?>