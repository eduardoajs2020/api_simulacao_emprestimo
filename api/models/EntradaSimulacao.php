<?php

class EntradaSimulacao
{
    private $valorDesejado;
    private $prazo;
    

    public function __construct($valorDesejado, $prazo)
    {
        $this-> valorDesejado = $valorDesejado;
        $this-> prazo = $prazo;
    }

    public function getValorDesejado()
    {
        return $this->valorDesejado;

    }

    public function getPrazo()
    {
        return $this->prazo;
    }

    public function setValorDesejado($valorDesejado)
    {
        $this->valorDesejado = $valorDesejado;
    }

    public function setPrazo($prazo)
    {
        $this->prazo = $prazo;
    }
}

?>
