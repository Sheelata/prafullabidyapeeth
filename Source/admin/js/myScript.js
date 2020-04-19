	var valuee= '<?= $overview; ?>';
//   $http({
//        url: "index.php",
//        method: "POST",
//        data: {
//            data: variable
//        }
//    }).success(function(response) {
//    valuee=response;
//});
//        
        angular.module("textAngularTest", ['textAngular']);
	function wysiwygeditor($scope) {
		$scope.orightml = valuee;
		$scope.htmlcontent = $scope.orightml;
		$scope.disabled = false;
	};
