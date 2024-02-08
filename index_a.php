<?php
header('Access-Control-Allow-Origin: *');
//header('Content-type: application/json');
date_default_timezone_set("America/Sao_Paulo");

//require_once 'principal.php';

// Verificar o tipo de requisição
if ($_SERVER['HTTP_ACCEPT'] === 'application/json') {
    // Rota JSON
    header('Content-type: application/json');
    //require_once 'principal.php';
} else {
    // Rota HTML
    require_once 'principal.php';
}
?>
