<?php
	$con = new mysqli('localhost', 'usnow', '48kgeia8!', 'telebyte_projects');
	if ($con->connect_errno) echo 'SQL error: '.$con->connect_errno;
	else $con->query("SET NAMES 'utf8'");
?>