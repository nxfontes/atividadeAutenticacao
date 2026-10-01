<?php
require_once __DIR__ . '/usuarios.php';

if($_SERVER['REQUEST_METHOD'] == "GET")
{
   $user = $_GET['user'];

   foreach($usuarios as $foto)
   {

   }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <h1>teste login ok</h1>
    
</body>
</html>