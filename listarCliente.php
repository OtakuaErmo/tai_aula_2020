<?php
include 'BD.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="formCliente.php" method="POST">
        Cadastrar Cliente: <button type="submit">Novo</button>
    </form>
    <?php

    $obj = new BD;
    $obj->connection();

    $result = $obj->selectAll();

    echo "<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Ação</th>
    </tr>
";
    foreach ($result as $item) {
        echo
            "<tr> 
        <td>" . $item['id'] . "</td>
        <td>" . $item['nome'] . "</td>
        <td>" . $item['cpf'] . "</td>
        <td><a href='formEditarCliente.php?id=" . $item['id'] . "'>Editar</a></td>
     </tr>";
    }
    echo "</table>";
    ?>

</body>

</html>