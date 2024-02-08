<?php 

class ProdutoController
{
    public function createProduto()
    {
        echo json_encode(['message' => 'Novo produto criado com sucesso']);
    }

    public function getProdutoById($id)
    {
        echo json_encode($id);
    }

    public function updateProduto($id)
    {
        echo json_encode(['message' => 'Produto atualizado com sucesso']);
    }

    public function deleteProduto()
    {
        echo json_encode(['message' => 'Produto excluido com sucesso']);
    }

    public function getAllProduto($valorDesejado, $prazo)
    {
    
         try {
        // Obter a conexão PDO usando o método estático da classe Conexao
        $conn = Conexao::getConnection();

        // Consultar produtos no banco de dados
        $sql = "SELECT CO_PRODUTO, NO_PRODUTO, PC_TAXA_JUROS FROM dbo.PRODUTO WHERE VR_MINIMO <= ? AND VR_MAXIMO >= ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$valorDesejado, $valorDesejado]);

       
    } catch (PDOException $e) {
        // Em caso de erro na conexão, exibir mensagem de erro
        return json_encode(['error' => 'Erro na conexão com o banco de dados: ' . $e->getMessage()]);
    }
        
        {
            return json_encode(['error' => 'Erro ao consultar produtos'], 500);
        }

        // Filtrar produto adequado aos parâmetros de entrada
        $produto = null;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produtoTaxa = floatval($row['PC_TAXA_JUROS']);

            if ($prazo >= intval($row['NU_MINIMO_MESES']) && ($prazo <= intval($row['NU_MAXIMO_MESES']) || $row['NU_MAXIMO_MESES'] === null)) {
                $produto = [
                    'codigoProduto' => intval($row['CO_PRODUTO']),
                    'descricaoProduto' => $row['NO_PRODUTO'],
                    'taxaJuros' => $produtoTaxa,
                    'resultadoSimulacao' => []
                ];
                break;
            }
        }

        if ($produto === null) {
            return json_encode(['error' => 'Nenhum produto adequado encontrado'], 404);
        }

        // Calcular os sistemas de amortização SAC e PRICE
        $resultadoSimulacaoSAC = $this->calcularSimulacaoSAC($valorDesejado, $prazo, $produtoTaxa);
        $resultadoSimulacaoPrice = $this->calcularSimulacaoPrice($valorDesejado, $prazo, $produtoTaxa);

        // Adicionar os resultados ao envelope de retorno
        $produto['resultadoSimulacao'][] = [
            'tipo' => 'SAC',
            'parcelas' => $resultadoSimulacaoSAC
        ];

        $produto['resultadoSimulacao'][] = [
            'tipo' => 'PRICE',
            'parcelas' => $resultadoSimulacaoPrice
        ];

        // Retornar o envelope de retorno
        return json_encode($produto);
    }

    private function calcularSimulacaoSAC($valorDesejado, $prazo, $taxaJuros)
    {
        $parcelas = [];
        $saldoDevedor = $valorDesejado;
        $valorAmortizacao = $valorDesejado / $prazo;

        for ($i = 1; $i <= $prazo; $i++) {
            $valorJuros = $saldoDevedor * $taxaJuros;
            $valorPrestacao = $valorAmortizacao + $valorJuros;
            $parcelas[] = [
                'numero' => $i,
                'valorAmortizacao' => $valorAmortizacao,
                'valorJuros' => $valorJuros,
                'valorPrestacao' => $valorPrestacao
            ];
            $saldoDevedor -= $valorAmortizacao;
        }

        return $parcelas;
    }

    private function calcularSimulacaoPrice($valorDesejado, $prazo, $taxaJuros)
    {
        $parcelas = [];
        $valorPrestacao = ($valorDesejado * $taxaJuros) / (1 - pow(1 + $taxaJuros, -$prazo));

        for ($i = 1; $i <= $prazo; $i++) {
            $valorJuros = $valorDesejado * $taxaJuros;
            $valorAmortizacao = $valorPrestacao - $valorJuros;
            $parcelas[] = [
                'numero' => $i,
                'valorAmortizacao' => $valorAmortizacao,
                'valorJuros' => $valorJuros,
                'valorPrestacao' => $valorPrestacao
            ];
            $valorDesejado -= $valorAmortizacao;
        }

        return $parcelas;
    }
}



?>
