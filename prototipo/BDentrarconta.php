<?php
 require_once('bd.php');
	//criando o objeto mysql e conectando ao banco de dados
	$mysql = new BancodeDados();
	$mysql -> conecta();
	
   $plogin=$_POST['email'];
   $psenha=$_POST['senha'];
   // ajustando a instrucaoo select verificar usuario e senha
    $sqlstring = "select * from usuarios where email='$plogin' and senha='$psenha'"  ;
    echo $sqlstring;
	$result = @mysqli_query($mysql->conn, $sqlstring);
	$total = $result -> num_rows;
  if($total==1){
    $dados=mysqli_fetch_array($result) ;
    session_start();
  	$_SESSION['id']= $dados['id'];
 		$_SESSION['nome'] =$dados['nome'] ;
    $_SESSION['senha'] =$dados['senha'] ;
    $_SESSION['email'] =$dados['email'] ;
    $_SESSION['idade'] =$dados['idade'] ;

    $_SESSION['logado'] = true;

		
  

		  echo"<script language='javascript' type='text/javascript'>
          alert('Bem vindo à Bibliotec');window.location.href='homepage.php';
          </script>";

  }


      $mysql->fechar();
 ?>


