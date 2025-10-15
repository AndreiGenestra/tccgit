<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <link href="./csspaginas/poesias.css" rel="stylesheet">
    <title>Livros de Poesia</title>e>
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .footer {
            margin-top: auto;
        }
    </style>
</head>
<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {

    echo "<script language='javascript' type='text/javascript'>

    alert('Acesso negado! Entre na conta para acessar');window.location.href='entrarconta.php';</script>";

    die();

}
require_once('bd.php');
$mysql = new BancodeDados();
$mysql -> conecta();
$sqlstring = "select * from livros where id_genero=1"; 
$result = @mysqli_query($mysql->conn, $sqlstring);
?>
<body>
 <!-- NAVBAR -->
   <nav class="navbar">
  <div id="mySidenav" class="navbarladinho">
    <a class="" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="homepage.php"> 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
      </svg>
      <span class="generos-text">Home</span>
    </a>
    
    <a href="comunidades-list.php"> 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
      </svg>
      <span class="generos-text">Comunidades</span>
    </a>
    
    <a href="sobrenos.php"> 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
        <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5"/>
      </svg>  
      <span class="generos-text">Sobre Nós</span>
    </a>

    <a href="paginaperfil.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
      </svg> 
      <span class="generos-text">Perfil</span>
    </a>

      <div class="dropdown">
        <a class="dropbtn generos-text" href="livros.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
            <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
          </svg>  
        Livros</a>
          <div class="dropdown-content">
            <a href="livropoesias.php">Poesia</a>
            <a href="livroromance.php">Romance</a>
            <a href="livromisterio.php">Mistério</a>
            <a href="livrofantasia.php">Fantasia</a>
            <a href="livroficcao.php">Ficção Científica</a>
          </div>
    </div>
  </div>

  <div class="menuo"> <span class="tresrisco"  style="font-size:30px;cursor:pointer;margin-left:50px;" onclick="openNav()">&#9776;</span> </div>
  </div>

  <script>
  function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }

  function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
  }
  </script> 
      <div class="search-area">
        <form class="search-form" action="busca.php" method="get">
          <input type="text" style="align-items: center;" id="nomelivro" name="nomelivro" class="search-input" placeholder="Pesquisar...">
          <button type="submit" class="search-btn" id="bolalupa"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" id="lupa">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
          </button>
        </form>
      </div>
      <div class="col-4 d-flex justify-content-end align-items- header-1">
      <img class="navlogo" src="src/img/logodeitada.png" alt="Logo da Bibliotec">
      </div>

</nav>
  <!--  fim da Navbar --> 

    <section class="comunidades-hero" style="text-align:center; margin-top:40px; margin-bottom:30px;">
        <h1 class="titulo1" style="font-size:2.5rem; color:#393bb5; margin-bottom:10px;">Poesias</h1>>
        <p style="font-size:1.2rem; color:#333; max-width:600px; margin:0 auto 10px auto;">
            Seja bem-vindo à página de Poesia <strong>Bibliotec</strong>!<br>>
            Encontre, crie e leia livros de poesia compartilhados por nossa comunidade apaixonada por literatura.<br>r>
        </p>
    </section>
    <div class="bloco-comunidades" style="gap: 24px; flex-direction: row; flex-wrap: wrap; justify-content: center; align-items: stretch;">
        <h2 class="titulo2" style="color:#222; font-size:1.7rem; margin-bottom:10px; width:100%;">Livros de poesia em destaque:</h2>2>
        <?php
        while ($livro = mysqli_fetch_assoc($result)) {
            echo "<div class='comunidade-card' style='background: #393bb5; color:#fff; box-shadow:0 4px 16px #393bb540; border:none; min-width:320px; width:fit-content; max-width:900px; flex:1 1 320px; margin: 0 12px; display:flex; flex-direction:column; justify-content:space-between;'>";
            echo "<div style='display:flex;align-items:center;gap:16px;'>";
            echo"<img src='{$livro['caminhoimg']}' alt='Capa do Livro' style='width:80px; height:120px; object-fit:cover; border-radius:8px; margin:16px; box-shadow:0 2px 8px #00000040;'/>";
            // Conteúdo do card
            echo "<div>";
            echo "<span class='comunidade-nomie' style='font-size:1.2rem;font-weight:700;'>{$livro['titulo']}</span><br><br>";
            echo "<div style='font-size:0.95rem; color:#eae6ff;'>";
            echo "<p>{$livro['sinopse']}</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            // Botão Baixar encaixado na base do card
            echo "<div style='display:flex; justify-content:flex-end; align-items:flex-end; margin-top:auto; padding-top:24px;'>";
            echo "<a href='{$livro['caminho']}' download class='btn-entraro' style='background:#fff;color:#393bb5;font-weight:600;box-shadow:0 2px 8px #393bb520; min-width:100px; text-align:center;'>Baixar</a>";

                if ($_SESSION['cargo']=="adm"){
                echo"<form action='deletar.php' method='POST'>"; 

                  echo"<li class='list'>";
                  
                echo"<input type='hidden' id='id' name='id' value='{$livro['id']}'>"; 

                echo"<input type='hidden' id='url' name='url' value='{$_SERVER['REQUEST_URI']}'>"; 

                 echo"<input type='hidden' id='caminho' name='caminho' value='{$livro['caminho']}'>"; 

                  echo"<input type='hidden' id='caminhoimg' name='caminhoimg' value='{$livro['caminhoimg']}'>"; 

                
                echo"<button id='deletar' class='btn-entraro'>Apagar</button>";
  //estrutura do modal
            echo"</li>";
            echo"</form>";
                }
            echo "</div>";
            echo "</div>";
              
            }
        ?>
    </div>
    <footer class="footer">
        <p>&copy; 2025 Bibliotec. Todos os direitos reservados by Maiam Technologies</p>
    </footer>
    
</body>
</html>