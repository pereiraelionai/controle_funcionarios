<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smarty</title>
</head>
<body>
    <h1>{$minha_var}</h1>
    <p>{$var1}</p>
    <p>{$var2}</p>
    <p>{$var3}</p>

    <hr>

    <h2>Array de nomes</h2>
    {foreach from=$nomes key=k item=dados}
    <b>Nome: </b>{$dados.nome}<br>
    <b>Sobrenome: </b>{$dados.sobrenome}<br><br>
    {/foreach}

    <a href="#" class="btn btn-success" >Botão</a>
</body>
</html>