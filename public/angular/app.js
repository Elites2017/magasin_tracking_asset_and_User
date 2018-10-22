var showApp = angular.module('showApp', ['ngRoute','ngResource']);

showApp.controller('ajustement_employe', function($scope, $http, $timeout) {
	$scope.Ajustement={};
	$scope.authorized = false; 	
	
	$scope.onMessage=function(){
alert("ok");
		$http({
				method : 'POST',
				url : 'http://localhost/HMPayroll/test/message',
				headers: {'Content-Type': 'application/json'},
				data : JSON.stringify({Type:$scope.Ajustement.tipajus, Valeur:$scope.Ajustement.val, Commentaire:$scope.Ajustement.com})
			}).success(function(data) {
			alert(data);
			$timeout(function(){
			$scope.authorized = true; 

			},900);
			$scope.Departement={};

			});
	$scope.Ajustement={};
	
	};
});
showApp.controller('liste_em', function($scope, $http) {
	$scope.liste={};
	$http.get("http://localhost/HMPayroll/test/liste").success(function(result){
		$scope.liste = result;
	});
	
});

//timesheet
showApp.controller('timeshet', function($scope, $http, $timeout) {
	$scope.timesh={};
	$scope.authorized = false; 	
	
	$scope.formtime=function(){
alert("ok");
		$http({
				method : 'POST',
				url : 'http://localhost/HMPayroll/Comptes/time_sheet',
				headers: {'Content-Type': 'application/json'},
				data : JSON.stringify({H_in:$scope.timesh.hin, H_out:$scope.timesh.hout, Jours_T:$scope.timesh.jourst, ID_E:$scope.timesh.ide})
			}).success(function(data) {
			alert(data);
			$timeout(function(){
			$scope.authorized = true; 

			},900);
			$scope.timesh={};

			});
	$scope.timesh={};
	
	};
});
	
	
	