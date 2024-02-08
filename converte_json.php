<?php
// Ler o conteúdo do arquivo de rotas
$rotas = file_get_contents('api.php');

// Analisar o conteúdo do arquivo como PHP e obter as informações das rotas
$dadosRotas = eval($rotas);

// Criar um array com os dados das rotas
$dados = [];
foreach ($dadosRotas as $rota) {
    $dados[] = [
        'url' => $rota['url'],
        'metodo' => $rota['metodo'],
        'descricao' => $rota['descricao'],
        // ... outras informações da rota
    ];
}

// Criar o JSON com os dados das rotas
$json = json_encode($dados);


?>