var recipeApp = angular.module('recipeApp',['ngTagsInput', 'ui.bootstrap', 'ui.router', 'wu.masonry', 'infinite-scroll']);
recipeApp.config(function($urlRouterProvider, $stateProvider, tagsInputConfigProvider) {
    // $routeProvider
    //     // route for the home page
    //     .when('/', {
    //         templateUrl : 'part/home.html',
    //         controller  : 'homeController'
    //     })
    //     // route for the show page
    //     .when('/show/:id', {
    //         templateUrl : '/part/show.html',
    //         controller  : 'showController'
    //     })
    //     .otherwise({redirectTo: '/'});

    // $locationProvider
    //     // dont use hashtags for urls
    //     .html5Mode(true);

    // 
    $urlRouterProvider.otherwise('/');

    var modal = null;
    $stateProvider
    .state('home', {
        url: '/',
        views: {
            '@': {
                templateUrl: 'part/home.html',
                controller: 'homeController'
            }
        }
    })
    .state('modal',{
        abstract: true,
        parent: 'home',
        url: '',
        onEnter: ['$modal', '$rootScope', '$state',
            function($modal, $rootScope, $state){
                modal = $modal.open({
                    template: '<div ui-view="modal"></div>',
                    backdrop: true
                });
                modal.result.finally(function(){
                    modal: null;
                    $state.go('home');
                })
            }
        ],
        onExit: function(){
            if(modal){
                modal.close();
            }
        }
    })
    .state('show', {
        parent: 'modal',
        url: '/show/{id:int}',
        views: {
            'modal@': {
                templateUrl: '/part/show.html',
                controller: 'showController'
            }
        }
    });
    tagsInputConfigProvider
        .setDefaults('tagsInput', {
            placeholder: 'Surašykite jūsų turimus ingredientus',
            displayProperty: 'name',
            addFromAutocompleteOnly: true,
            replaceSpacesWithDashes: false
        })
        .setDefaults('autoComplete', {
            debounceDelay: 500,
            minLength: 1
        })
});
