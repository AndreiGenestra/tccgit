<!-- TELA DE CONFIGURAÇÃO
 
Grupo MAIAM TECH - Allan Araujo, Andrei Genestra, Isabelle Lima, Milena Mazzo, Murilo Minghini
  Etec de Poá
-->
<?php

// Verifica se o arquivo foi enviado
if ( isset( $_POST['titulo'] ) &&  isset($_POST['conteudo'] )) {

$titulo = $_POST['titulo'];
$url = $_POST['url'];
$conteudo = $_POST['conteudo'];
$nomeusuario = $_POST['nomeusuario'];
$datapostagem = $_POST['datapostagem'];
$idusuario = $_POST['idusuario'];
$idcomunidade = $_POST['idcomunidade'];
 require_once('bd.php');

$mysql = new BancodeDados();
	$mysql -> conecta();
  $stmt = $mysql->conn->prepare("INSERT INTO POSTAGEM (conteudo, titulo, datapostagem, idcomunidade, idusuario) VALUES (?,?,?,?,?,?)");
       $stmt->bind_param("sssssi", $nome, $destinoimg, $destino, $titulo, $sinopse, $genero);
        $stmt->execute();
        $stmt->close();

        echo"<script>alert('Postagem enviada com sucesso!');</script>";
        header("Location: {$url}?sucesso=1");
        exit;

}
    


        



    else{
    

   echo"<script language='javascript' type='text/javascript'>
          alert('Você não enviou titulo ou mensagem!');window.location.href='".$url."';
          </script>"; 

        }    

?>