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
$objBD = new BD;
$objBD->connection();

$objCliente = $objBD->find($_GET['id']);

if(!empty($_POST)){
    $objBD->update($_POST);
    header("Location: listarCliente.php");
}
?>
    <form action="formEditarCliente.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $objCliente->id; ?>" />

        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $objCliente->nome; ?>"> <br>

        <label>CPF</label>
        <input type="text" name="cpf" value="<?php echo $objCliente->cpf; ?>"> <br>

        <label>Telefone</label>
        <input type="text" name="telefone" value="<?php echo $objCliente->telefone; ?>"> <br>

        <label>Email</label>
        <input type="text" name="email" value="<?php echo $objCliente->email; ?>"> <br>

        <input type="submit" value="Enviar">
        <a href="listarCliente.php"><button>Voltar</button></a>
    </form>
</body>

</html>