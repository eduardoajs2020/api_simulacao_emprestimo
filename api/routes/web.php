<?php

// Inclua os arquivos dos controladores
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

// Obtenha o método e o caminho da requisição
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];

// Defina as rotas
if ($method === 'GET' && $path === '/Produto') {
    $ProdutoController->getAllProduto($valorDesejado, $prazo);
} elseif ($method === 'POST' && $path === '/Produto') {
    $ProdutoController->createProduto();
} elseif ($method === 'GET' && preg_match('/\/Produto\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $ProdutoController->getProdutoById($id);
} elseif ($method === 'PUT' && preg_match('/\/Produto\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $ProdutoController->updateProduto($id);
} elseif ($method === 'DELETE' && preg_match('/\/Produto\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $ProdutoController->deleteProduto($id);
} elseif ($method === 'GET' && $path === '/EntradaSimulacao') {
    $EntradaSimulacaoController->getAllEntradaSimulacao();
} elseif ($method === 'POST' && $path === '/EntradaSimulacao') {
    $EntradaSimulacaoController->createEntradaSimulacao();
} elseif ($method === 'GET' && preg_match('/\/EntradaSimulacao\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $EntradaSimulacaoController->getEntradaSimulacaoById($id);
} elseif ($method === 'PUT' && preg_match('/\/EntradaSimulacao\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $EntradaSimulacaoController->updateEntradaSimulacao($id);
} elseif ($method === 'DELETE' && preg_match('/\/EntradaSimulacao\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $EntradaSimulacaoController->deleteEntradaSimulacao($id);
} elseif ($method === 'GET' && $path === '/Parcela') {
    $ParcelaController->getAllParcela();
} elseif ($method === 'POST' && $path === '/Parcela') {
    $ParcelaController->createParcela();
} elseif ($method === 'GET' && preg_match('/\/Parcela\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $ParcelaController->getParcelaById($id);
} elseif ($method === 'PUT' && preg_match('/\/Parcela\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $ParcelaController->updateParcela($id);
} elseif ($method === 'DELETE' && preg_match('/\/Parcela\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $ParcelaController->deleteParcela($id);
} elseif ($method === 'GET' && $path === '/ResultadoSimulacao') {
    $ResultadoSimulacaoController->getAllResultadoSimulacao();
} elseif ($method === 'POST' && $path === '/ResultadoSimulacao') {
    $ResultadoSimulacaoController->createResultadoSimulacao();
} elseif ($method === 'GET' && preg_match('/\/ResultadoSimulacao\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $ResultadoSimulacaoController->getResultadoSimulacaoById($id);
} elseif ($method === 'PUT' && preg_match('/\/ResultadoSimulacao\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $ResultadoSimulacaoController->updateResultadoSimulacao($id);
} elseif ($method === 'DELETE' && preg_match('/\/ResultadoSimulacao\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $ResultadoSimulacaoController->deleteResultadoSimulacao($id);
} elseif ($method === 'GET' && $path === '/Simulacao') {
    $SimulacaoController->getAllSimulacao();
} elseif ($method === 'GET' && preg_match('/\/Simulacao\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $SimulacaoController->getSimulacaoById($id);
} elseif ($method === 'PUT' && preg_match('/\/Simulacao\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $SimulacaoController->updateSimulacao($id);
} elseif ($method === 'DELETE' && preg_match('/\/Simulacao\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $SimulacaoController->deleteSimulacao($id);
} elseif ($method === 'POST' && $path === '/Simulacao') {
    $SimulacaoController->createSimulacao();
} elseif ($method === 'GET' && $path === '/users') {
    $userController->getAllUsers();
} elseif ($method === 'POST' && $path === '/users') {
    $userController->createUser();
} elseif ($method === 'GET' && preg_match('/\/users\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $userController->getUserById($id);
} elseif ($method === 'PUT' && preg_match('/\/users\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $userController->updateUser($id);
} elseif ($method === 'DELETE' && preg_match('/\/users\/(\d+)/', $path, $matches)) {
    $id = $matches[1];
    $userController->deleteUser($id);
} elseif ($method === 'GET' && $path === '/routes') {
    $routes = [
        'GET /Produto',
        'POST /Produto',
        'GET /Produto/{id}',
        'PUT /Produto/{id}',
        'DELETE /Produto/{id}',
        'GET /EntradaSimulacao',
        'POST /EntradaSimulacao',
        'GET /EntradaSimulacao/{id}',
        'PUT /EntradaSimulacao/{id}',
        'DELETE /EntradaSimulacao/{id}',
        'GET /Parcela',
        'POST /Parcela',
        'GET /Parcela/{id}',
        'PUT /Parcela/{id}',
        'DELETE /Parcela/{id}',
        'GET /ResultadoSimulacao',
        'POST /ResultadoSimulacao',
        'GET /ResultadoSimulacao/{id}',
        'PUT /ResultadoSimulacao/{id}',
        'DELETE /ResultadoSimulacao/{id}',
        'GET /Simulacao',
        'GET /Simulacao/{id}',
        'PUT /Simulacao/{id}',
        'DELETE /Simulacao/{id}',
        'POST /Simulacao',
        'GET /users',
        'POST /users',
        'GET /users/{id}',
        'PUT /users/{id}',
        'DELETE /users/{id}'
    ];

    echo '<h1>Rotas Disponíveis</h1>';
    echo '<ul>';
    foreach ($routes as $route) {
        echo "<li>$route</li>";
    }
    echo '</ul>';
} else {
    // Rota não encontrada, retorne um erro 404
    http_response_code(404);
    echo 'Página não encontrada.';
}
?>
