<?php

require_once '../models/Produto.php';
require_once '../models/Simulacao.php';

use ResponseInterface as Response;
use ServerRequestInterface as Request;

class ParcelaController {
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
   
    public function getAllParcela() {
        // Lógica para obter todas as parcelas
    }

    public function createParcela() {
        // Lógica para criar uma nova parcela
    }

    public function getParcelaById($id) {
        // Lógica para obter uma parcela pelo ID
    }

    public function updateParcela($id) {
        // Lógica para atualizar uma parcela pelo ID
    }

    public function deleteParcela($id) {
        // Lógica para excluir uma parcela pelo ID
    }
}


?>