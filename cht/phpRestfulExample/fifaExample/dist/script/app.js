var app = angular.module('fifaApp', ['ngRoute']);

app.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/', {
            templateUrl: 'dist/views/team_list.html',
            controller: 'TeamListCtrl as teamListCtrl'
        })
        .when('/login', {
            templateUrl: 'dist/views/login.html',
            //controller: 'LoginCtrl as loginCtrl'
        })
        .when('/team/:code', {
            templateUrl: 'dist/views/team_details.html',
            controller: 'TeamDetailsCtrl as teamDetailsCtrl',
            resolve: {
                auth: ['$q', '$location', 'UserService', function ($q, $location, UserService) {
                    return UserService.session().then(
                        function (success) {},
                        function (error) {
                            $location.path('/login');
                            $location.replace();
                            return $q.reject(error);
                        }
                    );
                }]
            }
        })
        .when('/register', {
            templateUrl: 'dist/views/register.html',
            controller: 'RegisterCtrl as registerCtrl'
        })
        .otherwise({
            redirectTo: '/'
        });

}]);