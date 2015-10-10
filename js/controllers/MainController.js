app.controller('MainController', ['$scope', '$http', function($scope, $http) {
  $scope.programs = [];
  $http.get("programs.php")
  	.success(function(data, status, headers, config) {
    	$scope.programs = data;
    	console.log($scope.programs);
  	})
  	.error(function(error, status, headers, config) {
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  });
}]);