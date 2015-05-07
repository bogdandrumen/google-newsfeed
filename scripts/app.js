(function(){
    var app = angular.module('googleNews', [
        'ui.router',
        'news.service',
        'detailed.state',
        'list.state',
        'safe.html.directive'
    ]);

    app.config(function($urlRouterProvider) {
        $urlRouterProvider.otherwise("/");
    });
})();