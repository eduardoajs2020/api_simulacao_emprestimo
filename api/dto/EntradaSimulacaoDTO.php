<?php

class EntradaSimulacaoDTO
{
    public $valorDesejado;
    public $prazo;
    

    public function __construct($valorDesejado, $prazo)
    {
        $this->valorDesejado = $valorDesejado;
        $this->prazo = $prazo;
       
    }
}

?>
