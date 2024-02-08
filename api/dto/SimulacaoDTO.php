<?php

class SimulacaoDTO
{
    public $codigoProduto;
    public $descricaoProduto;
    public $taxaJuros;
    public $resultadoSimulacao;

    public function __construct($codigoProduto, $descricaoProduto, $taxaJuros, $resultadoSimulacao)
    {
        $this-> codigoProduto = $codigoProduto;
        $this-> descricaoProduto = $descricaoProduto;
        $this-> taxaJuros = $taxaJuros;
        $this-> resultadoSimulacao = $resultadoSimulacao;
    }
}

?>
