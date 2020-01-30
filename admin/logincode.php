<?php
	include('security.php');
	include('includes/database/dbconfig.php');

	if (isset($_POST['login_btn']))
	{
		$email_login    = $_POST['email'];
		$password_login = $_POST['password'];
		$query     		= "SELECT * FROM register WHERE 
													email    = '$email_login'
												  AND 
												  	password = '$password_login' ";
		$query_run    	= mysqli_query($connection,$query);
		$user   		= mysqli_fetch_assoc($query_run);
		if ($user['usertype'] == "admin")
		{
			$_SESSION['username'] = $user['fname'] .' '.$user['lname'];
			header('Location: index.php');
		}
		elseif ($user['usertype'] == "user")
		{
			$_SESSION['username'] = $email_login;
			header('Location: ../layout/home.php');
		}
		else
		{
			$_SESSION['status'] = "Your Email Or Password Is Invalid";
			header('Location: login.php');
		}
	}

?>