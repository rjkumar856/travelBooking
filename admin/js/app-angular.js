var app = angular.module('WVCApp', []);

app.controller('WVCCtrl', function($scope, $http) {
    $scope.packageType = function() {
        
        $http.get("www.admin.worldvisioncable.in/packages-list?type="+$scope.packageType1).then(function(response) {
            //$scope.myWelcome = response.data;
            $scope.packageName = response.data;
            //alert($scope.packageType1);
        });
    };
});