<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

session_start();
  	$id = $_SESSION['id'];
 	$nome_usuario = $_SESSION['nome'];
    $senha = $_SESSION['senha'];
    $email = $_SESSION['email'];
    $idade = $_SESSION['idade'];


echo " $id ";
echo " $nome_usuario ";
echo " $idade ";
echo " $senha ";
echo " $email ";


?>

    
    
</body>
</html>