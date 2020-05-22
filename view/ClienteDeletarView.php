<?php
// inclui o arquivo Model.php dentro deste arquivo
//para que seus metodos fiquem visiveis
include '../control/ClienteController.php';
include '../util.php';

session_start();

verificarLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deletar Cliente</title>
</head>

<body>
<?php

if (!empty($_POST['confirmar'])) {
    //chama o metodo DELETAR recebendo os dados do usuário através do metodo $_POST
    ClienteController::remove($_GET['id']);
}
?>
<!-- propriedade action faz a chamada do Model.php para pegar o valor do form
    o restante e um formulario comum usando o metodo POST
-->
<form action="ClienteDeletarView.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <label>Deseja Deletar o Registro?</label>
    <input type="hidden" name="confirmar" value="ok"/> <br>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>

    <input type="submit" value="Deletar">
</form>
<a href="ClienteListarView.php">
    <button>Cancelar</button>
</a>
</body>

</html>