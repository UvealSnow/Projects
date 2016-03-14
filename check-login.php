<?php
	include 'php/sessions/user.php';
	session_start();
	if (isset($_SESSION['login'])) { # If the variable exists
		if (is_object($login = unserialize($_SESSION['login']))) { # if unserialized session becomes an object
			var_dump($login);
			if ($login->expired || !$login->checkLogin()) { # check if session is or should be expired
				
			}
		}
	}
	else { # else we create it so it wont bug out
		$login = new userSession(false);
	}
?>