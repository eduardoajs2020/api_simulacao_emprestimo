<?php

// Importe as classes necessárias
require_once  __DIR__ .'/../controllers/ProdutoController.php';
require_once  __DIR__ .'/../controllers/EntradaSimulacaoController.php';
require_once  __DIR__ .'/../controllers/ParcelaController.php';
require_once  __DIR__ .'/../controllers/ResultadoSimulacaoController.php';
require_once  __DIR__ .'/../controllers/SimulacaoController.php';
require_once  __DIR__ .'/../controllers/UserController.php';

// Crie uma instância do controlador

$ProdutoController = new ProdutoController();
$EntradaSimulacaoController = new EntradaSimulacaoController();
$ParcelaController = new ParcelaController();
$ResultadoSimulacaoController = new ResultadoSimulacaoController();
$SimulacaoController = new SimulacaoController();
$userController = new UserController();

// Defina as rotas
$router->get('/Produto', [$ProdutoController, 'getAllProduto']);
$router->post('/Produto', [$ProdutoController, 'createProduto']);
$router->get('/Produto/{id}', [$ProdutoController, 'getProdutoById']);
$router->put('/Produto/{id}', [$ProdutoController, 'updateProduto']);
$router->delete('/Produto/{id}', [$ProdutoController, 'deleteProduto']);

$router->get('/EntradaSimulacao', [$EntradaSimulacaoController, 'getAllEntradaSimulacaEntradaSimulacao']);
$router->post('/EntradaSimulacao', [$EntradaSimulacaoController, 'createEntradaSimulacao']);
$router->get('/EntradaSimulacao/{id}', [$EntradaSimulacaoController, 'getEntradaSimulacaoById']);
$router->put('/EntradaSimulacao/{id}', [$EntradaSimulacaoController, 'updateEntradaSimulacao']);
$router->delete('/EntradaSimulacao/{id}', [$EntradaSimulacaoController, 'deleteEntradaSimulacao']);

$router->get('/Parcela', [$ParcelaController, 'getAllParcela']);
$router->post('/Parcela', [$ParcelaController, 'createParcela']);
$router->get('/Parcela/{id}', [$ParcelaController, 'getParcelaById']);
$router->put('/Parcela/{id}', [$ParcelaController, 'updateParcela']);
$router->delete('/Parcela/{id}', [$ParcelaController, 'deleteParcela']);

$router->get('/ResultadoSimulacao', [$ResultadoSimulacaoController, 'getAllResultadoSimulacao']);
$router->post('/ResultadoSimulacao', [$ResultadoSimulacaoController, 'createResultadoSimulacao']);
$router->get('/ResultadoSimulacao/{id}', [$ResultadoSimulacaoController, 'getResultadoSimulacaoById']);
$router->put('/ResultadoSimulacao/{id}', [$ResultadoSimulacaoController, 'updateResultadoSimulacao']);
$router->delete('/ResultadoSimulacao/{id}', [$ResultadoSimulacaoController, 'deleteResultadoSimulacao']);

$router->get('/Simulacao', [$SimulacaoController, 'getAllSimulacao']);
$router->get('/Simulacao/{id}', [$SimulacaoController, 'getSimulacaoById']);
$router->put('/Simulacao/{id}', [$SimulacaoController, 'updateSimulacao']);
$router->delete('/Simulacao/{id}', [$SimulacaoController, 'deleteSimulacao']);
$router->post('/Simulacao', [$SimulacaoController, 'createSimulacao']);

$router->get('/users', [$userController, 'getAllUsers']);
$router->post('/users', [$userController, 'createUser']);
$router->get('/users/{id}', [$userController, 'getUserById']);
$router->put('/users/{id}', [$userController, 'updateUser']);
$router->delete('/users/{id}', [$userController, 'deleteUser']);


$router->get('/routes', function() use ($router) {
    $routes = $router->getRoutes();

    echo '<h1>Rotas Disponíveis</h1>';
    echo '<ul>';
    foreach ($routes as $method => $paths) {
        foreach ($paths as $path => $callback) {
            echo "<li>$method - $path</li>";
        }
    }
    echo '</ul>';
});




?>
