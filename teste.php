<?php

$dados = [
    {
        "CO_PRODUTO": "1",
        "0": "1",
        "NO_PRODUTO": "Produto 1",
        "1": "Produto 1",
        "PC_TAXA_JUROS": ".017900000",
        "2": ".017900000",
        "NU_MINIMO_MESES": "0",
        "3": "0",
        "NU_MAXIMO_MESES": "24",
        "4": "24",
        "VR_MINIMO": "200.00",
        "5": "200.00",
        "VR_MAXIMO": "10000.00",
        "6": "10000.00"
    },
    {
        "CO_PRODUTO": "2",
        "0": "2",
        "NO_PRODUTO": "Produto 2",
        "1": "Produto 2",
        "PC_TAXA_JUROS": ".017500000",
        "2": ".017500000",
        "NU_MINIMO_MESES": "25",
        "3": "25",
        "NU_MAXIMO_MESES": "48",
        "4": "48",
        "VR_MINIMO": "10000.01",
        "5": "10000.01",
        "VR_MAXIMO": "100000.00",
        "6": "100000.00"
    },
    {
        "CO_PRODUTO": "3",
        "0": "3",
        "NO_PRODUTO": "Produto 3",
        "1": "Produto 3",
        "PC_TAXA_JUROS": ".018200000",
        "2": ".018200000",
        "NU_MINIMO_MESES": "49",
        "3": "49",
        "NU_MAXIMO_MESES": "96",
        "4": "96",
        "VR_MINIMO": "100000.01",
        "5": "100000.01",
        "VR_MAXIMO": "1000000.00",
        "6": "1000000.00"
    },
    {
        "CO_PRODUTO": "4",
        "0": "4",
        "NO_PRODUTO": "Produto 4",
        "1": "Produto 4",
        "PC_TAXA_JUROS": ".015100000",
        "2": ".015100000",
        "NU_MINIMO_MESES": "97",
        "3": "97",
        "NU_MAXIMO_MESES": null,
        "4": null,
        "VR_MINIMO": "1000000.01",
        "5": "1000000.01",
        "VR_MAXIMO": null,
        "6": null
    }
];

$coluna = 'CO_PRODUTO';
$valores = array();

foreach ($dados as $item) {
    $valor = $item[$coluna];
    $valores[] = $valor;
}

var_dump($valores);


    ?>
