<?php

class ProdutoDTO {
    public $id;
    public $nome;
    public $taxaJuros;
    public $prazoMinimo;
    public $prazoMaximo;
    public $valorMinimo;
    public $valorMaximo;

    public function __construct($id, $nome, $taxaJuros, $prazoMinimo, $prazoMaximo, $valorMinimo, $valorMaximo) {
        $this->id = $id;
        $this->nome = $nome;
        $this->taxaJuros = $taxaJuros;
        $this->prazoMinimo = $prazoMinimo;
        $this->prazoMaximo = $prazoMaximo;
        $this->valorMinimo = $valorMinimo;
        $this->valorMaximo = $valorMaximo;
    }
}

?>
