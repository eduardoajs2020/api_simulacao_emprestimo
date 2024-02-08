<?php

class ResultadoSimulacaoDTO
{
    public $tipo;
    public $parcelas;
    

    public function __construct($tipo, $parcelas)
    {
        $this-> tipo = $tipo;
        $this-> parcelas = $parcelas;
        
    }
}

?>
