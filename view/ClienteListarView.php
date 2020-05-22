<?php
// inclui o arquivo Model.php dentro deste arquivo
//para que seus metodos fiquem visiveis
include '../control/ClienteController.php';
include '../util.php';

session_start();

verificarLogin();

$objUsuario = $_SESSION['usuario'];

//var_dump( $objUsuario );
//exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="login.php">Sair</a>
    <h3>Olá <?php echo $objUsuario->nome ?></h3>
    <!-- formulario com o botao para chamar o arquivo formCliente -->
    <form action="ClienteCadastrarView.php" method="POST">
        <label>Cadastrar Cliente: </label>
        <input type="submit" value="Novo">
    </form>
    <form action="ClienteListarView.php" method="POST">
        <label>Buscar: </label>
        <input type="text" name="valor" />
        <select name="tipo">
            <option value="nome">Nome</option>
            <option value="cpf">CPF</option>
        </select>
        <input type="submit" value="Buscar">
    </form>
    <?php
    //cria um instancia do objeto BD
    $objClienteModel = new ClienteModel();

    if (!empty($_POST['valor'])) {
        $result = $objClienteModel::search($_POST);
    } else {
        //Faz a chamada do metodo selectAll para conecta com o Banco de Dados
        $result =  $objClienteModel::selectAll();
    }

    //monta uma tabela e lista os dados atraves do foreach
    echo "
<table style=''>
<tr>
  <th>ID</th>
  <th>Nome</th>
  <th>CPF</th>
  <th>Município</th>
  <th>UF</th>
  <th>Ação</th>
</tr>";
    foreach ($result as $item) {
        $objMunicipio = $objClienteModel::find($item['municipio_id'], "municipio");
        echo "
    <tr>
      <td>" . $item['id'] . "</td>
      <td>" . $item['nome'] . "</td>
      <td>" . $item['cpf'] . "</td>
      <td>" . $objMunicipio->nome  . "</td>
      <td>" . $objMunicipio->uf  . "</td>
      <td><a href='ClienteEditarView.php?id=" . $item['id'] . "'>Editar</a></td>
      <td><a href='ClienteDeletarView.php?id=" . $item['id'] . "'>Deletar</a></td>
    </tr>
    ";
        //a ultima linha foi criado um link para passar o parameto do id para a pagina formEditarCliente
    }
    echo "</table>";

    ?>
</body>

</html>