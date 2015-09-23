
angular.module('paginationApp', ['ui.bootstrap']);
angular.module('paginationApp').controller('HackerPaginationCtrl', function($scope, $http) {

	$scope.currentPage = 1;
	$scope.allNews = [];
	$scope.showTable = false;
	$scope.showError = false;
  	getData();

	function getData() {
		// Request the internal server to get the API data
	    $http.get("index.php?controller=api&action=getNewsList&page=" + $scope.currentPage)
	      .then(function(response) {
	        $scope.totalItems = response.data.nbPages * response.data.hitsPerPage;
	        if ($scope.totalItems > 0) {
	        	$scope.showTable = true;
	        } else {
	        	$scope.showError = true;
	        }
	        angular.copy(response.data.hits, $scope.allNews)
	    });

	}

	//get another portions of data on page changed
	$scope.pageChanged = function() {
	    getData();
	};
});