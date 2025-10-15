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

echo "<script language='javascript' type='text/javascript'> window.location.href='{$url}';</script>"; 



// 1. Verifique se o arquivo existe
if (file_exists($caminhoArquivo) && file_exists($caminhoimgArquivo)) {
    // 2. Tente excluir o arquivo
    if (unlink($caminhoArquivo) && unlink($caminhoimgArquivo)) {
        // 3. Se a exclusão for bem-sucedida
        echo "Arquivo excluído com sucesso!";
    } else {
        // 4. Se a exclusão falhar
        echo "Não foi possível excluir o arquivo.";
    }
} else {
    // 5. Se o arquivo não existir
    echo "O arquivo não foi encontrado.";
}




?>