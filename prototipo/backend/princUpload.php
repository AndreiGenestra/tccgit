<!-- TELA DE CONFIGURAÇÃO
 
Grupo MAIAM TECH - Allan Araujo, Andrei Genestra, Isabelle Lima, Milena Mazzo, Murilo Minghini
  Etec de Poá
 Salve como Upload.php -->
<?php

// Verifica se o arquivo foi enviado
if ( isset( $_FILES[ 'livro' ][ 'name' ] ) && $_FILES[ 'livro' ][ 'error' ] == 0 ) {
$arquivo_tmp = $_FILES[ 'livro' ][ 'tmp_name' ];
$nome = $_FILES[ 'livro' ][ 'name' ];

$extensao = pathinfo ( $nome, PATHINFO_EXTENSION );

$extensao = strtolower ( $extensao );

if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {

$novoNome = uniqid ( time () ) .".". $extensao;
//$novoNome = uniqid ( time () ) . $extensao;
 $destino = 'uploads/ ' . $novoNome;
// $destino = $novoNome;
if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ){
//if (move_uploaded_file ( $arquivo_tmp, $destino ) ){
echo"salvo na pasta \n\n";
echo '<center><img src = "' . $destino . '" height=400 width=790/></center>';
 require 'bd.php';
  $stmt = $conn->prepare("INSERT INTO livros (nome_arquivo, caminho) VALUES (?,?)");
       $stmt->bind_param("ss", $nome, $destino);
        $stmt->execute();
        $stmt->close();
        header("Location: comunidades-enter.php?sucesso=1");
        exit;

}
else
 echo ('Erro ao salvar o arquivo. Aparentemente você não tem permissão  de escrita.<br />');}
else
 echo ("Você pode enviar apenas arquivos *.jpg;*.jpeg;*.gif;*.png <br />");}

else
 echo ('Você não enviou nenhum arquivo!');

?>

