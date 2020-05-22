<?php
// inclui o arquivo ClienteController.php dentro deste arquivo
//para que seus metodos fiquem visiveis
include '../control/ClienteController.php';
//include '../model/ClienteModel.php';
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
    <title>Document</title>
</head>

<body>
<?php
//cria um instancia do objeto ClienteModel
    $objClienteModel = new ClienteModel();

    if (!empty($_POST)) {

        //chama o metodo INSERT recebendo os dados do usuário através do metodo $_POST
        ClienteController::create($_POST);
    }

    $resultMunicipios = $objClienteModel::selectAll("municipio");

?>

<!-- propriedade action faz a chamada do Model.php para pegar o valor do form
    o restante e um formulario comum usando o metodo POST
-->
<form action="ClienteCadastrarView.php" method="POST">
    <label>Nome</label>
    <input type="text" name="nome"> <br>

    <label>CPF</label>
    <input type="text" name="cpf"> <br>

    <label>Telefone</label>
    <input type="text" name="telefone"> <br>

    <label>E-mail</label>
    <input type="text" name="email"> <br>

    <label>Município</label>
    <select name="municipio_id">
        <?php
        //listagem dos municipios
        foreach ($resultMunicipios as $itens) {
            echo "<option value='" . $itens['id'] . "'>" . $itens['nome'] . "</option>";
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Enviar">

</form>
<a href="../view/ClienteListarView.php">
    <button>Voltar</button>
</a>
</body>

</html>