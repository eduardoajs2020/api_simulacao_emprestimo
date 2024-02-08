<?php

class Parcela
{
    private $numero;
    private $valorAmortizacao;
    private $valorJuros;
    private $valorPrestacao;

    public function __construct($numero, $valorAmortizacao, $valorJuros, $valorPrestacao)
    {
        $this-> numero = $numero;
        $this-> valorAmortizacao = $valorAmortizacao;
        $this-> valorJuros = $valorJuros;
        $this-> valorPrestacao = $valorPrestacao;
    }

    public function getNumero()
    {
        return $this-> numero;
    }

    public function getValorAmortizacao()
    {
        return $this->valorAmortizacao;
    }

    public function getValorJuros()
    {
        return $this->valorJuros;
    }

    public function getValorPrestacao()
    {
        return $this->valorPrestacao;
    }

    public function setNumero($numero)
    {
        $this-> numero = $numero;
    }

    public function setValorAmortizacao($valorAmortizacao)
    {
     $this-> valorAmortizacao = $valorAmortizacao;
    }

    public function setValorJuros($valorJuros)
    {
        $this-> valorJuros = $valorJuros;
    }

    public function setValorPrestacao($valorPrestacao)
    {
        $this-> valorPrestacao = $valorPrestacao;
    }
}

?>
