<?php
require_once __DIR__ . '/autenticar.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <center>
            <h1>Login</h1>
        </center>
        <form action="" method="post">
            <label for="user">User: </label>
            <input type="text" name="user" id="user">
            <br>
            <br>
            
            <label for="senha">Senha: </label>
            <input type="senha" name="senha" id="senha">
            
            <button type="submit">Acessar</button>
            
        </form>

</body>
</html>