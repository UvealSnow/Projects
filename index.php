<!DOCTYPE html>
<html ng-app="projectApp">
	<head>
		<title>Project Manager v1.0</title>
		<link rel="icon" href="favicon.ico">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="css/main.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<script src="js/vendor/jquery.js" type="text/javascript"></script>
		<script src="js/vendor/angular.js" type="text/javascript"></script>
		<script src="js/vendor/angular-route.min.js" type="text/javascript"></script>
		<script src="js/app.js" type="text/javascript"></script>
		<script src="js/directives/layout.js" type="text/javascript"></script>
	</head>
	<body>
		<my-navbar></my-navbar>
		<div ng-view></div>
	</body>
</html>