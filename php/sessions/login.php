<?php
	session_start();
	require_once("../sql/connect.php");
	if(isset($_POST['control'])) {
		$user = $_POST['usr_mail'];
		$qry = "SELECT pass FROM users WHERE user = '$user'";
		$res = $con->query($qry);
		if ($res->num_rows == 1) { 
			$res = $res->fetch_assoc(); 
			if (password_verify($con->real_escape_string($_POST['usr_pass']), $res['pass'])) {
				require_once("user.php");
				$login = new userSession($user);
				$login->expired = false;
				$_SESSION['login'] = serialize($login);
				# var_dump($_SESSION['login']);
			}
		}
	}
	$con->close();
	header('location: ../../');
?>