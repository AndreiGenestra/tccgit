<?php

require_once ('bd.php');

	$mysql = new BancodeDados();
	$mysql -> conecta();
// Buscar arquivos no banco


  $sqlstring = "select * from livros"; 
	$resultado = @mysqli_query($mysql->conn, $sqlstring);
	$total = $resultado -> num_rows;

  $stmt =$mysql->conn->prepare("INSERT INTO usuarios (nome, email, senha, idade, Data_Cadastro) VALUES (?, ?, ?, ?, null)");
?>

 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <title>Comunidades</title>
</head>

<body>
    <nav class="navbar">
      <button class="navbar-toggle" aria-label="Abrir menu" onclick="toggleNavbar()">☰</button>
      <ul class="nav-list">
        <li class="nav-list-item home-item">
          <a href="./index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
              <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
            </svg>
            <span class="home-text">Home</span>
          </a>
        </li>
        <li class="nav-list-item generos-item">
          <a href="comunidades-list.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
              <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
            </svg>
            <span class="generos-text">Comunidades</span>
          </a>
        </li>
        <li class="nav-list-item sobre-item">
          <a href="sobrenos.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
              <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0"/>
            </svg>
            <span class="sobre-text">Sobre Nós</span>
          </a>
        </li>
      </ul>
      <div class="search-area">
        <form class="search-form" action="#" method="get">
          <input type="text" name="q" class="search-input" placeholder="Pesquisar...">
          <button type="submit" class="search-btn" id="bolalupa"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" id="lupa">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
          </svg></button>
        </form>
      </div>
      <div class="nav-actions">
        <a href="./entrarconta.php" class="home-btn">Login</a>
      </div>
    </nav>

        <div class="bloco-comunidades">
        <img src="./src/img/programacao.png"class="background-comunidade-perfil">  
        <div class="content-above">
            <h1 class="titulo1"><img class="perfil-foto-comunidade" src="">Comunidade de Programação</h1>
             <div class="container com">  
          
          
            <h1 class="titulo-card"> Compartilhe seu livro!</h1>

    <!-- Banco de dados -->
    <?php if (isset($_GET['sucesso'])): ?>
        <p style="color: green;">arquivo enviado com sucesso!</p>
      <?php endif; ?> 
   <form action="princUpload.php" method="POST" enctype="multipart/form-data">
    <button type="submit"> <label for="livro" class="custom-file-label">Escolher arquivo</label> </button>
    <input type="file" id="livro" name="livro" class="custom-file-input" required><br> <br>
        <center><button type="submit">Enviar</button></center> 
    </form>
    <?php
/*echo"<br/> <br/> ";
echo"<form method='post' enctype='multipart/form-data' action='princUpload.php'> ";
echo"<h3>Selecione uma imagem: </h3>
   <input name='arquivo'  type='file'  /> ";
echo"<br/> <br/>  <input type='submit' value='Salvar' />  ";
echo"</form>";
*/
?>

<br> <h2>Livros disponíveis:</h2>
    <ul>
        <?php while ($row = $resultado->fetch_assoc()): ?>
            <li>
                <a href="<?= $row['caminho'] ?>" download><?= htmlspecialchars($row['nome_arquivo']) ?></a>
                (enviado em <?= $row['data_upload'] ?>)
            </li>
        <?php endwhile; ?>
    </ul>

            <br>
            
        </div>
    </div>
        </div>   
       
</body>
</html>