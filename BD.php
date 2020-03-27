<?php

class BD
{

    public function connection()
    {
        $host = "localhost";
        $db_nome = "db_tai_aula_2020";
        $db_usuario = "root";
        $db_senha = "";
        $db_charset = "utf8";
        $str_conn = "mysql:host=" . $host . ";dbname=" . $db_nome;

        return new PDO(
            $str_conn,
            $db_usuario,
            $db_senha,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . $db_charset)
        );
    }

    public function selectAll()
    {

        $conn = self::connection();
        $stmt = $conn->prepare("SELECT * FROM cliente order by nome");
        $stmt->execute();

        return $stmt;
    }
}

$dados = array(
    "nome" => "João",
    "curso" => "INFORMÁTICA - TAI",
    "turma" => "INFO06"
);

$obj = new BD;
