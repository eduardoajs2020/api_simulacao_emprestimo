<?php

require_once '/api/utils/Database.php';

class EntradaSimulacaoDAO {
    private $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    public function getAllEntradaSimulacao() {
        $query = "SELECT CO_PRODUTO, NO_PRODUTO, PC_TAXA_JUROS FROM dbo.PRODUTO";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEntradaSimulacaoById($id) {
        $query = "SELECT * FROM dbo.PRODUTO WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function updateEntradaSimulacao($id) {
        // Lógica para atualizar uma entrada de simulação pelo ID
    }

    public function deleteEntradaSimulacao($id) {
        // Lógica para excluir uma entrada de simulação pelo ID
    }

}
?>
