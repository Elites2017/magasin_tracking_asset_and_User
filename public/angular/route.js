showApp.config(['$routeProvider', function($routeProvider) {
    
    $routeProvider
	.when('/', {
	  controller  : 'messageController'
    })
	.when('/apropos', {
      templateUrl : 'templateUrl/apropos.php'
    })
	.when('/team', {
      templateUrl : 'templateUrl/team.php'
    })
	.when('/contact', {
      templateUrl : 'templateUrl/contact.php',
	  controller  : 'messageController'
    })
	.when('/infos', {
      templateUrl : 'templateUrl/infos.php',
	  controller  : 'adminController'
    })
	.when('/read_more/:id', {
      templateUrl : 'templateUrl/articles.php',
	  controller  : 'readmoreController'
    })
		.when('/login', {
      templateUrl : 'templateUrl/login.php',
	  controller  : 'readmoreController'
    })
	.otherwise({
      redirectTo:'/'
    });
	
	//$locationProvider.html5Mode({enabled: true, requireBase: false});
	
}]);	