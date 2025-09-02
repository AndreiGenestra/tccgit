
<?php
//BANCO DE DADOS
//$host = 'localhost';
//$usuario = 'root';
//$senha = 'prof@3t3c';
//$banco = 'compartilhador';

/* BD CASA DO ANDREI */
  $host = 'localhost';
 $usuario = 'root';
 $senha = 'dedei2007';
  $banco = 'compartilhador';

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
 die ("Erro na conexão: " . $conn->connect_error);

}
?>