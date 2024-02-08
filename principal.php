<?php

//header('Access-Control-Allow-Origin: *');
//header('Content-type: application/json');

//date_default_timezone_set("America/Sao_Paulo");

?>

<div>
<form action ="" method="POST">
    <div>
    
        <br><br>
        <label for="valorDesejado" >Valor Desejado:</label>
        <input type="text" name="valorDesejado" value="<?php echo $_POST['valorDesejado'] ?? ''; ?>" id="valorDesejado" >
    </div>
    <br><br>
    <div>
        <label for="prazo" >Prazo Desejado:</label>
    <input type="text" name="prazo" value="<?php echo $_POST['prazo'] ?? ''; ?>" id="prazo" >
    </div>
    <br><br>
    <div>
        <input class="buttom" name="simular" type="submit" value="Fazer Simulação">
    </div>
    
    </div>
</form>
</div>

<?php 

if(isset($simular)){

    $valorDesejado = $_POST['valorDesejado'];
    $prazo = $_POST['prazo'];

    header('Location: api\models\EntradaSimulacao.php');

    exit;

}else{ 

    echo '<p style = "color: Tomato;">Informe o valor e o prazo do empréstimo desejado! </p>';
}


?>