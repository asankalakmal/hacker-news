
angular.module('app', ['ui.bootstrap']);
angular.module('app').controller('PaginationDemoCtrl', function($scope, $http) {

	$scope.currentPage = 1;
	$scope.allNews = [];
  	getData();

	function getData() {
		// Bootstrap pagination display paging as 1,2,3  but actual page is 0,1,2
		$page = $scope.currentPage - 1;
	    $http.get("index.php?controller=api&action=getNewsList&page=" + $page)
	      .then(function(response) {
	        $scope.totalItems = response.data.nbPages * response.data.hitsPerPage;
	        angular.copy(response.data.hits, $scope.allNews)
	    });

	}

	//get another portions of data on page changed
	$scope.pageChanged = function() {
	    getData();
	};
});