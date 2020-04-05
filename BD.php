<?php

class BD
{

    public function connection()
    {
        $bd_tipo = "mysql";
        $host = "localhost";
        $bd_nome = "db_tai_aula_2020";
        $bd_porta = "3306";
        $bd_usuario = "root";
        $bd_senha = "123456";
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
        $stmt = $conn->prepare("SELECT * FROM cliente order by id desc");
        $stmt->execute();

        return $stmt;
    }

    public function find($id)
    {
        $conn = $this->connection();
        $stmt = $conn->prepare("SELECT * FROM cliente WHERE id = ?;");
        $stmt->execute([$id]);

        return $stmt->fetchObject();
    }

    public function insert($dados)
    {

        $sql = "INSERT INTO `cliente` (`nome`, `telefone`, `cpf`, `email`) 
            VALUES (?, ?, ?, ?);";

        $conn = $this->connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $dados['nome'],
            $dados['telefone'], $dados['cpf'], $dados['email']
        ]);

        return $stmt;
    }

    public function update($dados)
    {

        $sql = "UPDATE `cliente` SET `nome` = ?,
             `telefone` = ?, `cpf` = ?,
             `email` = ? WHERE `id` = ?;";

        $conn = $this->connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $dados['nome'],
            $dados['telefone'], $dados['cpf'], $dados['email'], $dados['id']
        ]);

        return $stmt;
    }
}
