var app = angular.module('myApp', ['ngRoute','chieffancypants.loadingBar', 'ngAnimate' ]);

app.config(function($routeProvider, cfpLoadingBarProvider, USER_ROLES ) {

	  	  
	  cfpLoadingBarProvider.includeSpinner = true;
	  $routeProvider.when('/about', {
	    templateUrl : 'about.html',
	    controller  : 'AboutController'
	  })
	  .when('/services', {
	    templateUrl : 'services.html',
	    controller  : 'ServicesController'
	  })
	  .when('/portfolio', {
	    templateUrl : 'portfolio.html',
	    controller  : 'PortfolioController'
	  })
	  .when('/contact', {
	    templateUrl : 'contact.html',
	    controller  : 'ContactController'
	  })
	  .otherwise('/');
	  
	});
	app.constant('AUTH_EVENTS', {
		  loginSuccess: 'auth-login-success',
		  loginFailed: 'auth-login-failed',
		  logoutSuccess: 'auth-logout-success',
		  sessionTimeout: 'auth-session-timeout',
		  notAuthenticated: 'auth-not-authenticated',
		  notAuthorized: 'auth-not-authorized'
		});
	app.constant('USER_ROLES', {
		  all: '*',
		  admin: 'admin',
		  editor: 'editor',
		  guest: 'guest'
	});
	app.controller('MainController', function($scope, $http, cfpLoadingBar, $timeout) {
		  
		$scope.loginModel = function(){				
			$('#loginModal').modal();
		}
		
		$scope.start = function() {
	      cfpLoadingBar.start();
	    };
	    
		$scope.registerModel = function(){				
			$('#registerModal').modal();
		};
		
		$scope.complete = function () {
	      cfpLoadingBar.complete();
	    };
	    
	    
	    $scope.start();
	    $scope.fakeIntro = true;
	    $timeout(function() {
	      $scope.complete();
	      $scope.fakeIntro = false;
	    }, 750);
		  
	});
	app.controller('AboutController', function($scope, $http, cfpLoadingBar) {
	  scroll_to();
	  cfpLoadingBar.start();
	  var req = {
		method: 'POST',
		url: 'getPage.php',
		data: {'page_id': 1},
		headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
	  };
	  
	  $http(req).then(function(response){
		  var data = response.data;
		  $scope.title = data.page_title;
		  $scope.description = data.description;
		  cfpLoadingBar.complete();
	  });
	  //var output = jQuery.parseJSON(data);
	  
	});

	app.controller('ServicesController', function($scope, $http, cfpLoadingBar) {
	  cfpLoadingBar.start();
	  var req = {
		method: 'POST',
		url: 'getPage.php',
		data: {'page_id': 2},
		headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
	  };
	  
	  $http(req).then(function(response){		  
		  var data = response.data;
		  $scope.title = data.page_title;
		  $scope.description = data.description;
		  
	  });
	  var req = {
		method: 'POST',
		url: 'getServices.php',
		data: {},
		headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
	  };
	  $http(req).then(function(response){
		  $scope.services = response.data;
		  cfpLoadingBar.complete();
	  });
	 
	  scroll_to();
	});

	app.controller('PortfolioController', function($scope, $http, cfpLoadingBar) {
	  //Fetch portfolios
	  cfpLoadingBar.start();
	  var req = {
		method: 'POST',
		url: 'getPortfolio.php',
		data: {},
		headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
	  };
	  $http(req).then(function(response){
		  $scope.portfolios = response.data;
	  });
	  //$("img.lazy").lazyload({effect : "fadeIn"});
	  scroll_to();
	  cfpLoadingBar.complete();
	});
	
	app.controller('ContactController', function($scope) {
  	  scroll_to();
	});
	
	app.controller('ContactFormController', function($scope, $http) {
	  	  
		$scope.launchModel = function(){
			$('#contactModal').modal();
		}
	});
	
	app.controller('FormProcessController', function($scope, $http, cfpLoadingBar) {
		
		$scope.processForm = function(formData){
			cfpLoadingBar.start();	
			var req = {
				method: 'POST',
				url: 'saveContactInfo.php',
				data: formData,
				headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
			  };
			  $http(req).then(function(response){
				  if(response.success == 1) {
					  $('#contactModal').modal('toggle');
				  }
				  cfpLoadingBar.complete();
			  });
		}
	});
	
	//Login Controller
	app.controller('LoginController', 
	function ($scope, $rootScope, AUTH_EVENTS, AuthService) {
		  $scope.credentials = {
		    username: '',
		    password: ''
		  };
		  
		  $scope.login = function (credentials) {
		    AuthService.login(credentials).then(function (user) {
		      $rootScope.$broadcast(AUTH_EVENTS.loginSuccess);
		      $scope.setCurrentUser(user);
		    }, function () {
		      $rootScope.$broadcast(AUTH_EVENTS.loginFailed);
		    });
		  };
	});
	
	// Auth Service
	app.factory('AuthService', function ($http, Session) {
		  var authService = {};
		 
		  authService.login = function (credentials) {
		    return $http
		      .post('/login', credentials)
		      .then(function (res) {
		        Session.create(res.data.id, res.data.user.id,
		                       res.data.user.role);
		        return res.data.user;
		      });
		  };
		 
		  authService.isAuthenticated = function () {
		    return !!Session.userId;
		  };
		 
		  authService.isAuthorized = function (authorizedRoles) {
		    if (!angular.isArray(authorizedRoles)) {
		      authorizedRoles = [authorizedRoles];
		    }
		    return (authService.isAuthenticated() &&
		      authorizedRoles.indexOf(Session.userRole) !== -1);
		  };		 
		  return authService;
		  
	});
	// Session Service
	app.service('Session', function () {
		  this.create = function (sessionId, userId, userRole) {
		    this.id = sessionId;
		    this.userId = userId;
		    this.userRole = userRole;
		  };
		  this.destroy = function () {
		    this.id = null;
		    this.userId = null;
		    this.userRole = null;
		  };
	});
	
	//AuthController
	app.controller('AuthController', function ($scope, USER_ROLES, AuthService) {
		$scope.currentUser = null;
		$scope.userRoles = USER_ROLES;
		$scope.isAuthorized = AuthService.isAuthorized;
		
		$scope.setCurrentUser = function (user) {
		$scope.currentUser = user;
		};
	});
	
	function scroll_to(){
		$('html, body').animate({
	        scrollTop: $(".section_view").offset().top
	    }, 2000);
		$('#mainNav').removeClass('affix-top').addClass('affix');
	}
	