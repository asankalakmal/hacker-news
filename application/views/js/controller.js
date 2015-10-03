angular.module('paginationApp.controller', [])
.controller('HackerPaginationCtrl', function($scope, hackerAPIservice) {

	$scope.currentPage = 1;
	$scope.allNews = [];
	$scope.showTable = false;
	$scope.showError = false;

	$scope.pageChanged = function() {

		hackerAPIservice.getNews($scope.currentPage).success(function (response) {
	        $scope.totalItems = response.nbPages * response.hitsPerPage;
		    if ($scope.totalItems > 0) {
		        $scope.showTable = true;
		    } else {
		        $scope.showError = true;
		    }
		    angular.copy(response.hits, $scope.allNews);
	    });

	};

});