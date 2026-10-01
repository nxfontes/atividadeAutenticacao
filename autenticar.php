<?php
require_once __DIR__  . '/usuarios.php';

 if($_SERVER['REQUEST_METHOD'] == "POST" )
 {
     if(!isset($_POST['user']) || $_POST['user'] == "")
     {
         echo "ERRO! A variável user não foi preenchida..." . "<br>";
     }
        
        if(!isset($_POST['senha']) || $_POST['senha'] == "")
        {
            echo "ERRO! A variável senha não foi preenchida..." . "<br>";
        }

        $user = $_POST['user'];
        $senha = $_POST['senha'];
        
        if($usuarios[$user]['senha'] == $senha)
        {   
            header('Location: ' . '/perfil.php?$user = $_POST');
            exit;
        }
        
        else
        {
            echo "Usuário ou senha incorreta, tente novamente." . "<br>";
        }
    }
    
?>