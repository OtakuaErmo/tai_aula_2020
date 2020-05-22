<?php
include '../database/Model.php';

session_start();

$_SESSION['usuario'] = null;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

if (!empty($_POST)) {
    //chama o metodo LOGAR recebendo os dados do usuário através do metodo $_POST
    $objUsuario = Model::logar($_POST["login"], $_POST['senha']);
    //   var_dump($objUsuario);
    //  exit;
    if (!empty($objUsuario)) {
        $_SESSION['usuario'] = $objUsuario;
        header("Location: ClienteListarView.php");
    } else {
        echo "<b style='color:red;'>Login ou Senha errado, tente novamente! </b>";
    }
}

?>
<form action="login.php" method="POST">
    <h2>Bem vindo, informe suas credênciais</h2>
    <label>Login</label>
    <input type="text" name="login"><br>
    <label>Senha</label>
    <input type="password" name="senha"><br>
    <input type="submit" value="Logar">
</form>

</body>

</html>