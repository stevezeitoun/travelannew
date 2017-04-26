

var app = angular.module('myApp', ['ngAnimate',]);
app.controller('personCtrl', function($scope) {
    $scope.myVar = false;
    $scope.toggle = function() {
        $scope.myVar = !$scope.myVar;
    };
    $scope.IsVisible = false;
    $scope.ShowHide = function () {
    //If DIV is visible it will be hidden and vice versa.
    $scope.IsVisible = $scope.IsVisible ? false : true;
};

  $scope.showMe = false;
  $scope.myFunc = function() {
     $scope.showMe = !$scope.showMe;
};
});
