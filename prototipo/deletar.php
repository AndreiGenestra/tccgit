<!-- TELA DE CONFIGURAÇÃO
 
Grupo MAIAM TECH - Allan Araujo, Andrei Genestra, Isabelle Lima, Milena Mazzo, Murilo Minghini
  Etec de Poá
 Salve como Upload.php -->
<?php

// Verifica se o arquivo foi enviado

session_start();
$id = $_POST['id'];
$url = $_POST['url'];
$caminhoArquivo = $_POST['caminho'];
$caminhoimg = $_POST['caminhoimg'];
$caminhoArquivo = __DIR__ . '/' . $caminhoArquivo;
$caminhoimgArquivo = __DIR__ . '/' . $caminhoimg;

 require_once('bd.php');
$mysql = new BancodeDados();
	$mysql -> conecta();
  $stmt = $mysql->conn->prepare(" DELETE FROM livros WHERE id=$id");
      
    $stmt->execute();
        $stmt->close();
        
  $mysql -> fechar();

echo "<script language='javascript' type='text/javascript'> alert('Deletado com sucesso'); window.location.href='{$url}';</script>"; 

//tirando da pasta do computador:

//  Verifique se o arquivo existe
if (file_exists($caminhoArquivo) && file_exists($caminhoimgArquivo)) {
    //  Tente excluir o arquivo
    if (unlink($caminhoArquivo) && unlink($caminhoimgArquivo)) {
        
        echo "Arquivo excluído com sucesso!";
    } else {
        
        echo "Não foi possível excluir o arquivo.";
    }
} else {
    //  Se o arquivo não existir
    echo "O arquivo não foi encontrado.";
}




?>