<?php

class Router {
    private $routes = [];

    public function get($path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    public function post($path, $callback) {
        $this->routes['POST'][$path] = $callback;
    }

    public function put($path, $callback) {
        $this->routes['PUT'][$path] = $callback;
    }

    public function delete($path, $callback) {
        $this->routes['DELETE'][$path] = $callback;
    }

    public function handleRequest($method, $path) {
        if (isset($this->routes[$method][$path])) {
            $callback = $this->routes[$method][$path];
            if (is_callable($callback)) {
                $callback();
            } else {
                $callbackParts = explode('@', $callback);
                $className = $callbackParts[0];
                $methodName = $callbackParts[1];

                if (class_exists($className)) {
                    $instance = new $className();
                    if (method_exists($instance, $methodName)) {
                        $instance->$methodName();
                    } else {
                        echo "404 - Método não encontrado";
                    }
                } else {
                    echo "404 - Classe não encontrada";
                }
            }
        } else {
            echo "404 - Rota não encontrada";
        }
    }
}

// Exemplo de uso

require_once 'controllers/ProdutoController.php';
require_once 'controllers/EntradaSimulacaoController.php';
require_once 'controllers/ParcelaController.php';
require_once 'controllers/ResultadoSimulacaoController.php';
require_once 'controllers/SimulacaoController.php';
require_once 'controllers/UserController.php';

$router = new Router();

// Defina as rotas
$router->get('/Produto', ['ProdutoController', 'getAllProduto']);
$router->post('/Produto', ['ProdutoController', 'createProduto']);
$router->get('/Produto/{id}', ['ProdutoController', 'getProdutoById']);
$router->put('/Produto/{id}', ['ProdutoController', 'updateProduto']);
$router->delete('/Produto/{id}', ['ProdutoController', 'deleteProduto']);

$router->get('/EntradaSimulacao', ['EntradaSimulacaoController', 'getAllEntradaSimulacao']);
$router->post('/EntradaSimulacao', ['EntradaSimulacaoController', 'createEntradaSimulacao']);
$router->get('/EntradaSimulacao/{id}', ['EntradaSimulacaoController', 'getEntradaSimulacaoById']);
$router->put('/EntradaSimulacao/{id}', ['EntradaSimulacaoController', 'updateEntradaSimulacao']);
$router->delete('/EntradaSimulacao/{id}', ['EntradaSimulacaoController', 'deleteEntradaSimulacao']);

$router->get('/Parcela', ['ParcelaController', 'getAllParcela']);
$router->post('/Parcela', ['ParcelaController', 'createParcela']);
$router->get('/Parcela/{id}', ['ParcelaController', 'getParcelaById']);
$router->put('/Parcela/{id}', ['ParcelaController', 'updateParcela']);
$router->delete('/Parcela/{id}', ['ParcelaController', 'deleteParcela']);

$router->get('/ResultadoSimulacao', ['ResultadoSimulacaoController', 'getAllResultadoSimulacao']);
$router->post('/ResultadoSimulacao', ['ResultadoSimulacaoController', 'createResultadoSimulacao']);
$router->get('/ResultadoSimulacao/{id}', ['ResultadoSimulacaoController', 'getResultadoSimulacaoById']);
$router->put('/ResultadoSimulacao/{id}', ['ResultadoSimulacaoController', 'updateResultadoSimulacao']);
$router->delete('/ResultadoSimulacao/{id}', ['ResultadoSimulacaoController', 'deleteResultadoSimulacao']);

$router->get('/Simulacao', ['SimulacaoController', 'getAllSimulacao']);
$router->get('/Simulacao/{id}', ['SimulacaoController', 'getSimulacaoById']);
$router->put('/Simulacao/{id}', ['SimulacaoController', 'updateSimulacao']);
$router->delete('/Simulacao/{id}', ['SimulacaoController', 'deleteSimulacao']);
$router->post('/Simulacao', ['SimulacaoController', 'createSimulacao']);

$router->get('/users', ['UserController', 'getAllUsers']);
$router->post('/users', ['UserController', 'createUser']);
$router->get('/users/{id}', ['UserController', 'getUserById']);
$router->put('/users/{id}', ['UserController', 'updateUser']);
$router->delete('/users/{id}', ['UserController', 'deleteUser']);

// Lidar com a requisição atual
$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->handleRequest($method, $path);

?>