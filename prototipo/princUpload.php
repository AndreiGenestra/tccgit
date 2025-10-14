<!-- TELA DE CONFIGURAÇÃO
 
Grupo MAIAM TECH - Allan Araujo, Andrei Genestra, Isabelle Lima, Milena Mazzo, Murilo Minghini
  Etec de Poá
 Salve como Upload.php -->
<?php

// Verifica se o arquivo foi enviado
if ( isset( $_FILES[ 'livro' ][ 'name' ] ) && $_FILES[ 'livro' ][ 'error' ] == 0 ) {
$arquivo_tmp = $_FILES[ 'livro' ][ 'tmp_name' ];
$nome = $_FILES[ 'livro' ][ 'name' ];
$arquivo_img_tmp = $_FILES[ 'img' ][ 'tmp_name' ];
$img = $_FILES['img']['name'];
$titulo = $_POST['titulo'];
$sinopse = $_POST['sinopse'];
$genero = $_POST['genero'];
$extensao = pathinfo ( $nome, PATHINFO_EXTENSION );

$extensao = strtolower ( $extensao );
$extensaoimg = pathinfo ( $img, PATHINFO_EXTENSION );

$extensaoimg = strtolower ( $extensaoimg );

if ( strstr ( '.docx;.doc;.pdf', $extensao ) ) {

  if( strstr ( '.jpg;.jpeg;.gif;.png;.jfif', $extensaoimg ) ){

$novoNome = uniqid ( time () ) .".". $extensao;
$novoNomeimg = uniqid ( time () ) .".". $extensaoimg;
//$novoNome = uniqid ( time () ) . $extensao;
 $destino = 'uploads/' . $novoNome;
  $destinoimg = 'uploads/' . $novoNomeimg;
// $destino = $novoNome;
if ( @move_uploaded_file ( $arquivo_tmp, $destino ) && @move_uploaded_file ( $arquivo_img_tmp, $destinoimg ) ) {

echo"salvo na pasta \n\n";
echo "<center><img src = ' . $destinoimg . ' height=400 width=790/></center>'";
 require_once('bd.php');
$mysql = new BancodeDados();
	$mysql -> conecta();
  $stmt = $mysql->conn->prepare("INSERT INTO livros (nome_arquivo, caminhoimg, caminho, titulo, sinopse, id_genero) VALUES (?,?,?,?,?,?)");
       $stmt->bind_param("sssssi", $nome, $destinoimg, $destino, $titulo, $sinopse, $genero);
        $stmt->execute();
        $stmt->close();
        header("Location: homepage.php?sucesso=1");
        exit;

}
else
 echo ('Erro ao salvar o arquivo. Aparentemente você não tem permissão  de escrita.<br>');
}
else
  echo"voce nao enviou uma imagem em formato .jpg;.jpeg;.gif;.png;.jfif \n\n";


}
else
echo ("Você pode enviar apenas documentos de livro em formato *.docx, *.doc e *.pdf <br>");}
else
 echo ('Você não enviou nenhum arquivo!');

?>