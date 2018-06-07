app.component( 'login', {
	"controller":	[ '$scope', 'request', 'storage', 'validation', function( $scope, request, storage, validation ) {
		$scope.input = {};
		$scope.loading = false;
		/*errorModal = $('#errorModal');
		$scope.validation = validation;*/
		/*const controller = {
			"get": "/controllers/general/login.php",
		};*/
	
		$scope.action = () => {
			location.href = '/dashboard';
			// if($scope.form.$invalid){
			// 	console.log("Form invalido");
			// 	errorModal.modal( { "backdrop": "static" } );
			// 	$scope.form.user.$pristine = false;
			// 	$scope.form.password.$pristine = false;
			// 	return;

			// }else{
			// 	const data = {
			// 	"user" : $scope.input.user,
			// 	"password" : $scope.input.password,
			// 	};
			// 	// console.log(data);

			// 	request.post( controller.get , data )
			// 	.then( function( response ) {
			// 		if( request.check( response ) ) {
			// 			console.log("si existe");
			// 			location.href = '/dashboard/home';

			// 		}	// end if
			// 		else{
			// 			console.log("is_error");
			// 			errorModal.modal( { "backdrop": "static" } );
			// 		}
						

			// 	}, function( error ) {} );

			// }
	
		};

		// $scope.reset = () => {
		// 	$scope.$digest();
		// };
		
		
	} ],
	"templateUrl":	'/component/login.php'
} );
