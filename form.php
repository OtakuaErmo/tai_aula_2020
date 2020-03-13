<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="resultado.php">
        <label>Nome</label>
        <input type="text" name="nome"> <br>

        <label>Sobrenome</label>
        <input type="text" name="sobrenome"> <br>

        <a href="resultado.php?nome=Joao&sobrenome=Morgana" >Clique Aqui</a><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>