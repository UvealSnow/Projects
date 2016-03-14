(function () {
	angular.module('projectApp', ['ngRoute'])
	.config(function ($routeProvider) {
		$routeProvider
			.when('/', {
				templateUrl: 'tmp/pages/projects/index.html'
			})
			.when('/login', {
				templateUrl: 'tmp/pages/login/index.php'
			})
			.when('/logout', {
				templateUrl: 'php/sessions/logout.php'
			})
			.otherwise({
				redirectTo: '/'
			});
	});
}) ();