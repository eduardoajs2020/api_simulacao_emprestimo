<?php

class Simulacao 
{
    public $id;
    public $valorDesejado;
    public $prazo;
    public $produto;
    public $resultadoSimulacao;

    public function __construct($id, $valorDesejado, $prazo, $produto, $resultadoSimulacao) {
        $this->id = $id;
        $this->valorDesejado = $valorDesejado;
        $this->prazo = $prazo;
        $this->produto = $produto;
        $this->resultadoSimulacao = $resultadoSimulacao;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getValorDesejado()
    {
        return $this->valorDesejado;
    }

    public function getPrazo()
    {
        return $this->prazo;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function getResultadoSimulacao()
    {
        return $this->resultadoSimulacao;
    }

     public function setValorDesejado($valorDesejado)
    {
        $this->valorDesejado = $valorDesejado;
    }

     public function setPrazo($prazo)
    {
        $this->prazo = $prazo;
    }

     public function setProduto($produto)
    {
        $this->produto = $produto;
    }

     public function setResultadoSimulacao($resultadoSimulacao)
    {
        $this->resultadoSimulacao = $resultadoSimulacao;
    }
        
}
?>