
var app = angular.module("route", ["ngRoute"])
    .config(function ($routeProvider,$locationProvider) {
        $routeProvider
            .when("/section", {
                templateUrl: "views/section2.html"
			 });
		$locationProvider.hashPrefix("");
		
		
	});

var section=angular.module("section",[]);



/*var app=angular.module('myApp',[])
		.controller('ctrl',function($scope){
			$scope.message="hello"
			
		})*/