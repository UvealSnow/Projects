<?php
	include 'user.php';
	session_start();
	$login = unserialize($_SESSION['login']);
	$login->expired = true;
	$_SESSION['login'] = serialize($_SESSION['login']);
	# echo('<hr>'.$_SERVER['REQUEST_URI'].'<hr>'.json_encode($login));
	header('Location: ../../');
?>