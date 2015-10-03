angular.module('paginationApp.service', []).
  factory('hackerAPIservice', function($http) {

    var hackerAPI = {};

    hackerAPI.getNews = function($page) {
      return $http.get('index.php?controller=api&action=getNewsList&page=' + $page);
    }

    return hackerAPI;
  });