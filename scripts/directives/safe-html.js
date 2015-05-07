angular.module('safe.html.directive', [])
    .directive('safeHtml', function(){
        return {
            restrict: 'A',
            template: '<span ng-bind-html="data"></span>',
            scope: {
                safeHtml: '='
            },
            controller: [
                '$scope',
                '$sce',
                function ($scope, $sce){
                    $scope.data = $sce.trustAsHtml($scope.safeHtml);
                }
            ]
        }
    });
