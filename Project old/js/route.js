
route.config(function ($routeProvider,$locationProvider) {
        $routeProvider
			
            .when("/section", {
                templateUrl: "views/category.html"
			 }) 
			.when("/subsection", {
                templateUrl: "views/questiontype.html"
				 })
			.when("/question", {
                templateUrl: "views/questions.html"
				 })
			.when("/adduser", {
                templateUrl: "views/adduser.html"
				 })
			.when("/catReports", {
                templateUrl: "views/reports/catReport.html"
				 })
			.when("/subCatReports", {
                templateUrl: "views/reports/subcatreport.html"
				 })
			.when("/questionReport", {
                templateUrl: "views/reports/questionsreport.html"
				 })
			.when("/testreport", {
                templateUrl: "views/reports/usertestreport.html"
				 })
			.when("/authusers", {
                templateUrl: "views/reports/backendusers.html"
				 })
		
				.when("/home", {
                templateUrl: "views/dashboard.html"
				 })
		.when("/", {
                templateUrl: "views/dashboard.html"
				 })
		
		
		
		;
			
		$locationProvider.hashPrefix("");
	})

