<?php

class Produto 
{
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

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTaxaJuros()
    {
        return $this->taxaJuros;
    }

    public function getPrazoMinimo()
    {
        return $this->prazoMinimo;
    }
    public function getPrazoMaximo()
    {
        return $this->prazoMaximo;
    }
    public function getValorMinimo()
    {
        return $this->valorMinimo;
    }

    public function getValorMaximo()
    {
        return $this->valorMaximo;
    }


    public function setNome($nome)
    {
         $this->nome = $nome;
    }

    public function setTaxaJuros($taxaJuros)
    {
         $this->taxaJuros = $taxaJuros;
    }

    public function setPrazoMinimo($prazoMinimo)
    {
         $this->prazoMinimo = $prazoMinimo;
    }

    public function setPrazoMaximo($prazoMaximo)
    {
         $this->prazoMaximo = $prazoMaximo;
    }
    
    public function setValorMinimo($valorMinimo)
    {
         $this->valorMinimo = $valorMinimo;
    }

    public function setValorMaximo($valorMaximo)
    {
         $this->valorMaximo = $valorMaximo;
    }
}
    
?>