<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {

    echo "<script language='javascript' type='text/javascript'>

    alert('Acesso negado! Entre na conta para acessar');window.location.href='entrarconta.php';</script>";

    die();

}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="./src/bootstrapIcons/bootstrap-icons.css">
    <link href="./csspaginas/comunidadeslist.css" rel="stylesheet">
    <title>Comunidades disponíveis</title>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar">
  <div id="mySidenav" class="navbarladinho">
    <a class="" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="homepage.php"> 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
      </svg>
      <span class="generos-text">Página Inicial</span>
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

      <div class="dropdown">
        <a class="dropbtn generos-text" href="busca.php?nomelivro=">
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
            <a href="livrodidaticos.php">Didáticos</a>
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
	<img class="navlogo" src="src/img/logodeitada.png" alt="Logo da Bibliotec">
</nav>
  <!--  fim da Navbar --> 


    <section class="comunidades-hero" style="text-align:center; margin-top:40px; margin-bottom:30px;">
      <h1 class="titulo1" style="font-size:2.5rem; color:#393bb5; margin-bottom:10px;">Comunidades</h1>
      <p style="font-size:1.2rem; color:#333; max-width:600px; margin:0 auto 10px auto;">Seja bem-vindo à página de comunidades da <b>Bibliotec</b>!<br>Encontre, crie e participe de comunidades literárias para discutir seu livro favorito, fazer amigos e compartilhar conhecimento.</p>
    </section>
    <div class="bloco-comunidades" style="gap: 24px; flex-direction: row; flex-wrap: wrap; justify-content: center; align-items: stretch;">
      <h2 class="titulo2" style="color:#222; font-size:1.7rem; margin-bottom:10px; width:100%;">Comunidades em Destaque</h2>
      <div class="comunidade-card" style="background:linear-gradient(90deg,#393bb5 60%,#917bff 100%); color:#fff; box-shadow:0 4px 16px #393bb540; border:none; min-width:320px; max-width:350px; flex:1 1 320px; margin: 0 12px; display:flex; flex-direction:column; justify-content:space-between;">
        <div style="display:flex;align-items:center;gap:16px;">
          <span style="font-size:2rem;"><svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-code-slash' viewBox='0 0 16 16'><path d='M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0'/></svg></span>
          <div>
            <span class="comunidade-nomie" style="font-size:1.2rem;font-weight:600;">Comunidade de Programação</span>
            <div style="font-size:0.95rem; color:#eae6ff;">Discussões sobre linguagens, projetos e tecnologia.</div>
          </div>
        </div>
        <a href="comunidade-programação.php" class="btn-entraro" style="background:#fff;color:#393bb5;font-weight:600;box-shadow:0 2px 8px #393bb520; margin-top:16px;">Entrar</a>
      </div>
      <div class="comunidade-card" style="background:linear-gradient(90deg,#917bff 60%,#393bb5 100%); color:#fff; box-shadow:0 4px 16px #917bff40; border:none; min-width:320px; max-width:350px; flex:1 1 320px; margin: 0 12px; display:flex; flex-direction:column; justify-content:space-between;">
        <div style="display:flex;align-items:center;gap:16px;">
          <span style="font-size:2rem;"><svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-palette' viewBox='0 0 16 16'><path d='M8 0a8 8 0 1 0 8 8c0-1.657-1.567-3-3.5-3-.276 0-.5.224-.5.5s.224.5.5.5c.828 0 1.5.895 1.5 2 0 1.105-.672 2-1.5 2-.276 0-.5.224-.5.5s.224.5.5.5c1.933 0 3.5-1.343 3.5-3A8 8 0 0 0 8 0zm-3 7a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm2-3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-2 4a1 1 0 1 1-2 0 1 1 0 0 1 2 0z'/></svg></span>
          <div>
            <span class="comunidade-nomie" style="font-size:1.2rem;font-weight:600;">Comunidade de Design</span>
            <div style="font-size:0.95rem; color:#eae6ff;"><p>Arte, criatividade, UI/UX e</p><p> inspiração visual.</p></div>
          </div>
        </div>
        <a href="comunidade-design.php" class="btn-entraro" style="background:#fff;color:#917bff;font-weight:600;box-shadow:0 2px 8px #917bff20; margin-top:16px;">Entrar</a>
      </div>
      <div class="comunidade-card" style="background:linear-gradient(90deg,#393bb5 60%,#917bff 100%); color:#fff; box-shadow:0 4px 16px #393bb540; border:none; min-width:320px; max-width:350px; flex:1 1 320px; margin: 0 12px; display:flex; flex-direction:column; justify-content:space-between;">
        <div style="display:flex;align-items:center;gap:16px;">
      <i class="bi bi-controller"></i>
          <div>
            <span class="comunidade-nomie" style="font-size:1.2rem;font-weight:600;">Comunidade de Jogos</span>
            <div style="font-size:0.95rem; color:#eae6ff;">Games, e-sports e novidades do mundo gamer.</div>
          </div>
        </div>
        <a href="comunidade-jogos.php" class="btn-entraro" style="background:#fff;color:#393bb5;font-weight:600;box-shadow:0 2px 8px #393bb520; margin-top:16px;">Entrar</a>
      </div>
    </div>
    <br><br><br><br><br> <br>
    <center> <div class="btcom"><a href="cadastrocomunidade.php" >Crie sua comunidade</a> </div> </center>
        <!-- Footer -->
   <footer class="footer" style="margin-top: 10%;">
        <p>&copy; 2025 Bibliotec. Todos os direitos reservados by Maiam Technologies</p>
</footer>

</body>
</html>