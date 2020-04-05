<?php
 include 'BD.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<?php
$obj = new BD;
$obj->connection();

if(!empty($_POST)){
    $obj->insert($_POST);
    header("Location: listarCliente.php");
}
?>
    <form action="formCliente.php" method="POST">
        <label>Nome</label>
        <input type="text" name="nome"> <br>

        <label>CPF</label>
        <input type="text" name="cpf"> <br>

        <label>Telefone</label>
        <input type="text" name="telefone"> <br>

        <label>Email</label>
        <input type="text" name="email"> <br>

        <input type="submit" value="Enviar">
        <a href="listarCliente.php"><button>Voltar</button></a>
    </form>
</body>

</html>