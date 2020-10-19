<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    /**
     * Apply a middleware to the current route scope.
     * Requires middleware to be registered via `Application::routes()` with `registerMiddleware()`
     */
//    $routes->applyMiddleware('csrf');

    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/*', ['controller' => 'Pages', 'action' => 'home']);

    $routes->connect('/adicionar-pessoa', ['controller' => 'Pessoa', 'action' => 'adicionarPessoa']);
    $routes->connect('/editar-pessoa/*', ['controller' => 'Pessoa', 'action' => 'editarPessoa']);
    $routes->connect('/deletar/*', ['controller' => 'Pessoa', 'action' => 'deletar']);

    $routes->connect('/adicionar-contato/*', ['controller' => 'ContatoPessoa', 'action' => 'adicionarContato']);
    $routes->connect('/visualizar-contato/*', ['controller' => 'ContatoPessoa', 'action' => 'visualizar']);
    $routes->connect('/editar-contato/*', ['controller' => 'ContatoPessoa', 'action' => 'editar']);
    $routes->connect('/deletar-contato/*', ['controller' => 'ContatoPessoa', 'action' => 'deletar']);


    $routes->fallbacks(DashedRoute::class);
});
