<?php

class BD
{

    public function connection()
    {
        $bd_tipo = "mysql";
        $host = "localhost";
        $bd_nome = "bd_tai_aula_2020";
        $bd_porta = "3306";
        $bd_usuario = "root";
        $bd_senha = "";
        $bd_charset = "utf8";

        $str_conn = $bd_tipo . ":host=" . $host . ";dbname=" . $bd_nome . ";port=" . $bd_porta;;

        return new PDO(
            $str_conn,
            $bd_usuario,
            $bd_senha,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . $bd_charset)
        );
    }

    public function selectAll()
    {

        $conn = $this->connection();
        $stmt = $conn->prepare("SELECT * FROM cliente order by nome");
        $stmt->execute();

        return $stmt;
    }

}

$obj = new BD;
$obj->connection();

$result = $obj->selectAll();

