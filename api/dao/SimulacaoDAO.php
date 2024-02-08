<?php

require_once '/api/utils/Database.php';

class SimulacaoDAO {
    private $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    public function getAllProducts() {
        $query = "SELECT CO_PRODUTO, NO_PRODUTO, PC_TAXA_JUROS FROM dbo.PRODUTO";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id) {
        $query = "SELECT * FROM dbo.PRODUTO WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function gravarSimulacao($simulacao) {
        // Verifique se a simulação é válida
        if ($simulacao instanceof Simulacao) {
            // Obtenha os dados da simulação
            $valorDesejado = $simulacao->getValorDesejado();
            $prazo = $simulacao->getPrazo();

            // Crie um array com os dados da simulação
            $dados = array(
                'valorDesejado' => $valorDesejado,
                'prazo' => $prazo
            );

            // Converta o array em formato JSON
            $json = json_encode($dados);

            // Grava o JSON em um arquivo
            file_put_contents('simulacao.json', $json);

            // Simulação gravada com sucesso
            return true;
        } else {
            // Simulação inválida
            return false;
        }
    }
}

?>
