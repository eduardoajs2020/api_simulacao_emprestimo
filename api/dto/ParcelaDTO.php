<?php

class ParcelaDTO
{
    public $numero;
    public $valorAmortizacao;
    public $valorJuros;
    public $valorPrestacao;

    public function __construct($numero, $valorAmortizacao, $valorJuros, $valorPrestacao)
    {
        $this-> numero = $numero;
        $this-> valorAmortizacao = $valorAmortizacao;
        $this-> valorJuros = $valorJuros;
        $this-> valorPrestacao = $valorPrestacao;
    }
}

?>
