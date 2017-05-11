var app = angular.module('fifaApp');

app.factory('FifaService', ['$http', function ($http) {
    return {
        getTeams: function () {
            return $http.get('/phpAPI/team.php');
        },
        getTeamDetails: function (code) {
            return $http.get('/phpAPI/teamDetails.php/' + code);
        }
    };
}]);

app.factory('UserService', ['$http', function ($http) {
    var service = {
        isLoggedIn: false,

        session: function () {
            return $http.get('/phpAPI/session.php').then(function (response) {
                service.isLoggedIn = true;
                return response;
            });
        },

        register: function (userInfo) {
            return $http({
                url: '/phpAPI/register.php',
                method: 'post',
                data: $.param(userInfo),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            });
        },

        login: function (user) {
            return $http({
                url: '/phpAPI/login.php',
                method: 'post',
                data: $.param(user),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            }).success(function (response) {
                service.isLoggedIn = true;
                return response;
            });
        },

        logout: function () {
            $http.get('/phpAPI/logout.php').then(function (response) {
                service.isLoggedIn = false;
                return response;
            });
        }


    };
    return service;
}]);