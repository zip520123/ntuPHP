var app = angular.module('fifaApp');
app.directive('passwordCompare', [function () {
    return {
        restrict: 'A',
        require: 'ngModel',
        scope: {
            firstPassword: '='
        },
        link: function name($scope, $element, $attr, ngModel) {
            console.log($scope.firstPassword);
            ngModel.$validators.passwordCompare = function (secondPassword) {
                return secondPassword == $scope.firstPassword;
            }
        }
    };
}])