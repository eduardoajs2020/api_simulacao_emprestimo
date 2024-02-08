<?php
require_once 'controllers/SimulacaoController.php';

// Criação do objeto de roteamento
$app = new SlimApp();

// Definição das rotas
$app->post('/simulacao', 'SimulacaoController:criarSimulacao');

?>