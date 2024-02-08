<?php
// Configurações de acesso ao banco de dados 

class Conexao {
    /*private static $db_host = " dbhackathon.database.windows.net, 1433";
    private static $db_user = "hack";
    private static $db_pass = "Password23";
    private static $db_name = "hack";*/


    private static $db_host = 'dbhackathon.database.windows.net';
    private static $db_user = 'hack';
    private static $db_pass = 'Password23';
    private static $db_name = 'hack';

    public static function getConnection() {
        $conn = new PDO("pdo_sqlsrv:Server=" . self::$db_host . ";Database=" . self::$db_name, self::$db_user, self::$db_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}


?>