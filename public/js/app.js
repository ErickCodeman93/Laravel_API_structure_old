'use strict'

var app = angular.module( 'app', [ 'yaokiski' ] ,function($interpolateProvider) {
	$interpolateProvider.startSymbol('{#');
	$interpolateProvider.endSymbol('#}');
})

.config( [ () => {
} ] )

.controller( 'MainController', [ '$controller', '$scope', function( $controller, $scope ) {
	$controller( 'YaokiskiController', { "$scope": $scope } );
} ] );

	

	
