<!-- TELA DE CONFIGURAÇÃO
 
Grupo MAIAM TECH - Allan Araujo, Andrei Genestra, Isabelle Lima, Milena Mazzo, Murilo Minghini
  Etec de Poá
 Salve como Upload.php -->
<?php
$nome = $_POST['nome']; 
$email = $_POST['email'];
$idade = $_POST['idade'];
$senha = $_POST['senha']; 


echo" $nome . $email . $idade . $senha";

 require 'bd.php';
  $stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha, idade, Data_Cadastro) VALUES (?, ?, ?, ?, null)");
       $stmt->bind_param("ss", $nome, $email, $senha, $idade, $nome);
        $stmt->execute();
        $stmt->close();
       
        exit;





// Verifica se o arquivo foi enviado


?>

