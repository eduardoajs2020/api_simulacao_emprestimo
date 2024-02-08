<?php

require_once '../models/Produto.php';
require_once '../models/Simulacao.php';

use ResponseInterface as Response;
use ServerRequestInterface as Request;

class ResultadoSimulacaoController {
    private $produtosJsonFile = '../json/produtos.json';
    private $simulacoesJsonFile = '../json/simulacoes.json';

    public function criarSimulacao(Request $request, Response $response) {
        $data = $request->getParsedBody();

        // Realizar a lógica de validação, filtro e cálculo aqui
        // ...

        // Gerar o objeto de Simulação com os resultados


        $simulacao = new Simulacao($id, $valorDesejado, $prazo, $produto, $resultadoSimulacao);

        // Salvar a simulação em um arquivo JSON
        $this->salvarSimulacaoJson($simulacao);

        return $response->withJson($simulacao, 200);
    }

    private function salvarSimulacaoJson($simulacao) {
        $simulacoes = $this->carregarSimulacoesJson();

        // Adicionar a nova simulação ao array existente
        $simulacoes[] = $simulacao;

        // Salvar o array atualizado no arquivo JSON
        file_put_contents($this->simulacoesJsonFile, json_encode($simulacoes));
    }

    private function carregarSimulacoesJson() {
        $simulacoesJson = file_get_contents($this->simulacoesJsonFile);
        return json_decode($simulacoesJson);
    }

    
    public function getAllResultadoSimulacao() {
        // Lógica para obter todos os resultados de simulação
    }

    public function createResultadoSimulacao() {
        // Lógica para criar um novo resultado de simulação
    }

    public function getResultadoSimulacaoById($id) {
        // Lógica para obter um resultado de simulação pelo ID
    }

    public function updateResultadoSimulacao($id) {
        // Lógica para atualizar um resultado de simulação pelo ID
    }

    public function deleteResultadoSimulacao($id) {
        // Lógica para excluir um resultado de simulação pelo ID
    }
}


?>