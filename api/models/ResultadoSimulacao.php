<?php

class ResultadoSimulacao
{

    private $tipo;
    private $parcelas;
   

    public function __construct($tipo, $parcelas)
    {
        $this-> tipo = $tipo;
        $this-> parcelas = $parcelas;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getParcelas()
    {
        return $this->parcelas;
    }


    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function setParcelas($parcelas)
    {
        $this->parcelas = $parcelas;
    }
}

?>
