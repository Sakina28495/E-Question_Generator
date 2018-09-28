var route = angular.module("myApp", ['ngRoute','category','questionTypes','questions','addUser','stat']);
var category=angular.module("category",[]);
var questionTypes=angular.module("questionTypes",['angularUtils.directives.dirPagination']);
var questions=angular.module("questions",['angularUtils.directives.dirPagination']);
var addUser=angular.module("addUser",[]);
var stat=angular.module("stat",[]);
