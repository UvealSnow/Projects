(function () {
	angular.module('projectApp').controller('loginController', ['$http', function ($http){		
		var controller = this;
		$http.get('/check-login.php').sucess(function (data) {
			controller.login = data;
		});
	}]);
}) ();