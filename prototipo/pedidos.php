<!DOCTYPE html>

<html lang="pt-br" dir="ltr" data-bs-theme="auto">

<?php

session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {

    echo "<script language='javascript' type='text/javascript'>

    alert('Acesso negado! Entre na conta para acessar');window.location.href='entrarconta.php';</script>";

    die();

}


$id = $_SESSION['id'];

$nomeusuario = $_SESSION['nome'];

$senha = $_SESSION['senha'];

$email = $_SESSION['email'];

$idade = $_SESSION['idade'];
$cargo = $_SESSION['cargo'];

?>
<style> 

/* Cards e containers */
.card, .bg-body-secondary, .bg-body-tertiary, .destaque, .container, .containero, .login-container {
  border-radius: 12px;
  transition: background 0.3s, color 0.3s;
  
}
.titulo-card{
    background-color: none;
    color: var(--cor-lead);
}

.destaque{
    width: 100%;
    margin: auto;
    background: var(--destaque);
    border-radius: 8px;
    padding: 32px 24px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-items: center;
    position: relative;
    
}
/* Botões */
.btn, .btn-primary, .btn-outline-primary, .btn-login, .home-btn {
  border: none;
  border-radius: 6px;
  transition: background 0.2s, color 0.2s;
}


/* Footer */
footer, .finterna {
  padding: 1rem;
  text-align: center;
  margin-top: 2rem;
  border-radius: 0 0 12px 12px;
}

/* Dropdown de tema */
.bd-mode-toggle .dropdown-menu {
  
  border-radius: 10px;
}
.bd-mode-toggle .dropdown-item.active, .bd-mode-toggle .dropdown-item:active {
 
  color: #fff !important;
}
.bd-mode-toggle .dropdown-item:hover {
 
  color: #fff !important;
}
.modal-fundo {
  display: none; /* Escondido por padrão */
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5);
}

/* Caixa do modal */
.modal-conteudo {
  background-color: white;
  margin: 10% auto;
  padding: 20px;
  border-radius: 10px;
  min-width: 600px;
  position: relative;
}

/* Botão de fechar */
.fechar {
  position: absolute;
  top: 8px;
  right: 10px;
  color: #aaa;
  font-size: 24px;
  font-weight: bold;
  cursor: pointer;
}

.fechar:hover {
  color: black;
}
</style>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <link rel="stylesheet" href="./src/style.css">
     <link rel="stylesheet" href="./csspaginas/homepage.css">

    <link rel="script" href="script.js">

    <title>Sistema Bibliotec</title>

    <link href="./src/bootstrapcss/css/bootstrap.css" rel="stylesheet">

    <link href="./src/bootstrapIcons/bootstrap-icons.css" rel="stylesheet">
    <link href="./effects.js" rel="">

</head>

<!-- Adicione este botão para abrir o dropdown de tema -->


<body>
   <nav class="navbar">
  <div id="mySidenav" class="navbarladinho">
    <a class="" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="homepage.php"> 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
      </svg>
      <span class="generos-text">Pagina Inicial</span>
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
        <a style="color: white" class="btn icon" href="paginaperfil.php"> 
         <?php 
          if(empty($_SESSION['caminhoimgperfil'])) {
            
          echo strtoupper(substr($nomeusuario,0,1));
          }

          else{
            echo "<img src=" .$_SESSION['caminhoimgperfil'] . " alt='Avatar do usuário' style='width:30px;height:30px;border-radius:16px;object-fit:cover;'/>";
          }
           ?> <!-- Ícone de perfil --></a> 
      </div>

</nav>



</body>

</html> 