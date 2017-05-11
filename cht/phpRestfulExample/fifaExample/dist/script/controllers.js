var app = angular.module('fifaApp');

app.controller('MainCtrl', ['UserService', '$location', function (UserService, $location) {
    var self = this;
    self.userService = UserService;

    self.userService.session();

    self.logout = function () {
        self.userService.logout();
        $location.path('/');
    }
}]);

app.controller('TeamListCtrl', ['FifaService', function (FifaService) {
    var self = this;
    self.teams = [];

    FifaService.getTeams().then(function (response) {
        self.teams = response.data;
    });
}]);

app.controller('LoginCtrl', ['UserService', '$location', function (UserService, $location) {
    var self = this;

    self.user = {
        username: '',
        password: ''
    };
    self.errorMessage = '';

    self.login = function () {
        UserService.login(self.user).then(function (success) {
            $location.path('/team');
        }, function (error) {
            self.errorMessage = error.data.msg;
        });
    };
}]);

app.controller('RegisterCtrl', ['UserService', '$location', function (UserService, $location) {
    var self = this;

    self.userInfo = {
        userId: '',
        userPwd: '',
        userPwdAgain: '',
        userName: '',
    };

    self.errorMessage = '';

    self.register = function () {
        UserService.register(self.userInfo).then(function (success) {
            alert("建立成功 請登入");
            $location.path('/login');
        }, function (error) {
            self.errorMessage = error.data.msg;
        });
    }
}])

app.controller('TeamDetailsCtrl', ['$location', '$routeParams', 'FifaService', function ($location, $routeParams, FifaService) {
    var self = this;
    self.team = {};

    FifaService.getTeamDetails($routeParams.code).then(function (response) {
        self.team = response.data;
        console.log(self.team.logoUrl);
    }, function (error) {
        $location.path('/login');
    });
}]);