<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>

<h2>My First Web Page</h2>
<p>My First Paragraph.</p>

<form>
  <label>Nome:</label>
  <input type="text" id="nome"><br>
  <label>Idade:</label>
  <input type="text" id="idade"><br>
  <label>Numero 01:</label>
  <input type="text" name="num01"><br>
  <label>Numero 02:</label>
  <input type="text" name="num02"><br>
 
</form>
<button onclick="myFunction()">Calcular</button>
<p id="nomeCompleto"></p>
<p id="demo">Soma:</p>
<p id="demo2"></p>

<script>
    function myFunction() {
        var nomeForm = document.getElementById("nome").value ;
        var idadeForm = document.getElementById("idade").value ;

        var pessoa = [{nome:'Joao', idade:18 },
                        {nome:'Maria', idade: 20 },
                        {nome:'Ryan', idade: 18 },
                        {nome:nomeForm, idade: idadeForm },
                        ];

        var soma = 5 + 20;
        
        document.getElementById("demo").innerHTML = 
                pessoa[0].nome + " - " + pessoa[0].idade + "<br>" +
                pessoa[1].nome + " - " + pessoa[1].idade  + "<br>" +
                pessoa[2].nome + " - " + pessoa[2].idade;

        for(var i = 0; i < pessoa.length; i++){
            document.getElementById("demo2").innerHTML += 
                pessoa[i].nome + " - " + pessoa[i].idade + "<br>" ;
        }
}
</script>

</body>
</html>