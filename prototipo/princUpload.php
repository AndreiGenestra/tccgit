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
$url = $_POST['url'];
$sinopse = $_POST['sinopse'];
$genero = $_POST['genero'];
$extensao = pathinfo ( $nome, PATHINFO_EXTENSION );

$extensao = strtolower ( $extensao );
$extensaoimg = pathinfo ( $img, PATHINFO_EXTENSION );

$extensaoimg = strtolower ( $extensaoimg );

if ( strstr ( '.docx;.doc;.pdf', $extensao ) ) {

  if( strstr ( '.jpg;.jpeg;.gif;.png;.jfif', $extensaoimg ) ){

$novoNome = uniqid ( time () ). $nome .".". $extensao;
$novoNomeimg = uniqid ( time () ) . $img .".". $extensaoimg;
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

        echo"<script>alert('Livro enviado com sucesso!');</script>";
        header("Location: {$url}?sucesso=1");
        exit;

}
else
 
 echo"<script language='javascript' type='text/javascript'>
          alert('Erro ao salvar o arquivo. Aparentemente você não tem permissão  de escrita.');window.location.href='".$url."';
          </script>";        

}
else
   echo"<script language='javascript' type='text/javascript'>
          alert('Voce nao enviou uma imagem em formato .jpg;.jpeg;.gif;.png;.jfif');window.location.href='".$url."';
          </script>"; 
        


}
else


  echo" <script language='javascript' type='text/javascript'>
          alert('Você pode enviar apenas documentos de livro em formato *.docx, *.doc e *.pdf ');window.location.href='".$url."';
          </script>"; 
      


}
else
 

   echo"<script language='javascript' type='text/javascript'>
          alert('Você não enviou nenhum arquivo!');window.location.href='".$url."';
          </script>"; 
        

?>