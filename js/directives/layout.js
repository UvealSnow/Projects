(function () {
	angular.module('projectApp').directive('myNavbar', function() {
		return {
			restrict: 'E',
			templateUrl: 'tmp/layout/navbar.html',
		};
	});
}) ();