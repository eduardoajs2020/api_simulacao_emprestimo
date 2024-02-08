<?php 


require_once __DIR__ .'/../models/Produto.php';
require_once __DIR__ .'/../models/Simulacao.php';

class EntradaSimulacaoController {
    private $produtosJsonFile = '../json/produtos.json';
    private $simulacoesJsonFile = '../json/simulacoes.json';

    public function criarSimulacao() {
        $data = $_POST; // Obtém os dados do formulário enviado

        // Verifica se todos os campos obrigatórios foram fornecidos
        if (isset($data['id'], $data['valorDesejado'], $data['prazo'], $data['produto'], $data['resultadoSimulacao'])) {
            $id = $data['id'];
            $valorDesejado = $data['valorDesejado'];
            $prazo = $data['prazo'];
            $produto = $data['produto'];
            $resultadoSimulacao = $data['resultadoSimulacao'];

            // Validação dos campos
            if (!is_numeric($id) || !is_numeric($valorDesejado) || !is_numeric($prazo)) {
                // Campos inválidos, retorna resposta de erro
                $response = [
                    'success' => false,
                    'message' => 'Campos inválidos'
                ];
            } else {
                // Filtro e cálculo dos dados
                $id = intval($id);
                $valorDesejado = floatval($valorDesejado);
                $prazo = intval($prazo);

                $simulacao = new Simulacao($id, $valorDesejado, $prazo, $produto, $resultadoSimulacao);

                // Salvar a simulação em um arquivo JSON
                $this->salvarSimulacaoJson($simulacao);

                // Montar a resposta JSON
                $response = [
                    'success' => true,
                    'message' => 'Simulação criada com sucesso',
                    'data' => $simulacao
                ];
            }
        } else {
            // Campos obrigatórios ausentes, retorna resposta de erro
            $response = [
                'success' => false,
                'message' => 'Campos obrigatórios faltando'
            ];
        }

        // Definir o cabeçalho Content-Type como application/json
        header('Content-Type: application/json');

        // Enviar a resposta JSON
        echo json_encode($response);
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
        return json_decode($simulacoesJson, true);
    }

    
    public function getAllEntradaSimulacao() {
        // Lógica para obter todas as entradas de simulação
    }

    public function createEntradaSimulacao() {
        // Lógica para criar uma nova entrada de simulação
    }

    public function getEntradaSimulacaoById($id) {
        // Lógica para obter uma entrada de simulação pelo ID
    }

    public function updateEntradaSimulacao($id) {
        // Lógica para atualizar uma entrada de simulação pelo ID
    }

    public function deleteEntradaSimulacao($id) {
        // Lógica para excluir uma entrada de simulação pelo ID
    }
}




?>