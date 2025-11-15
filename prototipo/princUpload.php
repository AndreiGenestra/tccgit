<!-- TELA DE CONFIGURAÇÃO
 
Grupo MAIAM TECH - Allan Araujo, Andrei Genestra, Isabelle Lima, Milena Mazzo, Murilo Minghini
  Etec de Poá
-->
<?php

// Verifica se o arquivo foi enviado




$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$url = $_POST['url'];
$sinopse = $_POST['sinopse'];
$genero = $_POST['genero'];
$nome = $_POST['nome'];



// <img src="curriculo/andrei.png"
//$novoNome = uniqid ( time () ) . $extensao;
 $destino =  $_POST['caminho'];
  $destinoimg = $_POST['caminhoimg'];
// $destino = $novoNome;

 require_once('bd.php');
$mysql = new BancodeDados();
	$mysql -> conecta();
  $stmt = $mysql->conn->prepare("INSERT INTO livros (nome_arquivo, caminhoimg, caminho, titulo, sinopse, id_genero, autor) VALUES (?,?,?,?,?,?,?)");
       $stmt->bind_param("sssssis", $nome, $destinoimg, $destino, $titulo, $sinopse, $genero, $autor);
        $stmt->execute();
        $stmt->close();

      echo"<script language='javascript' type='text/javascript'>
          alert('Postagem enviada com sucesso');window.location.href='pedidos.php';
          </script>";




      




        


// caso seja um livro como pedido

 
   
?>