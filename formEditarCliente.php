<?php
// inclui o arquivo BD.php dentro deste arquivo 
//para que seus metodos fiquem visiveis
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

    //cria um instancia do objeto BD
    $objBD = new BD();
    //Faz a chamada do metodo Connection para conecta com o Banco de Dados
    $objBD->connection();

    if (!empty($_POST)) {
        //chama o metodo UPDATE recebendo os dados do usuário através do metodo $_POST
        $objBD->update($_POST);
        //metodo header faz uma chamada para a tela de listagem
        //depois que realizou a edicao
        header("Location: listarCliente.php");
    }

    //Busca os dados no banco de dados pelo ID da URL passando como parametro no metodo FIND
    $objCliente = $objBD->find($_GET['id']);
    ?>

    <form action="formEditarCliente.php" method="POST">
        <!-- Input Hidden tag que fica oculta para receber o valor do ID do form--->
        <!-- passo os id para a propriedade value -->
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

        <label>Nome</label>
        <!-- passo valor do atributo nome para a propriedade value -->
        <input type="text" name="nome" value="<?php echo $objCliente->nome; ?>"> <br>

        <label>CPF</label>
        <!-- passo valor do atributo cpf para a propriedade value -->
        <input type="text" name="cpf" value="<?php echo $objCliente->cpf; ?>"> <br>

        <label>Telefone</label>
        <!-- passo valor do atributo telefone para a propriedade value -->
        <input type="text" name="telefone" value="<?php echo $objCliente->telefone; ?>"> <br>

        <label>E-mail</label>
        <!-- passo valor do atributo e-mail para a propriedade value -->
        <input type="text" name="e-mail" value="<?php echo $objCliente->e - mail; ?>"> <br>

        <input type="submit" value="Editar">
    </form>
</body>

</html>