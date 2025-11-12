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

<button class="btn btn-secondary position-fixed bottom-0 end-0 mb-5 me-3" id="bd-theme-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <svg class="bi" width="24" height="24"><use href="#sun-fill"></use></svg>
</button>

<!-- Mantenha o dropdown de temas como está -->
<div class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-toggle">
        <!-- modo claro que é o modo normal-->
    <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" >
        <svg class="bi me-2 opacity-50" aria-hidden="true" width="50px" height="60px" ><use href="#circle-half" width="30px"></use></svg>
        Normal
        <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
    </button>
    <!-- modo "claro"
    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
        <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#circle-half"></use></svg>
        Claro
        <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
    </button>-->
    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
        <svg class="bi me-2 opacity-50" aria-hidden="true" width="50px" height="60px"><use href="#moon-stars-fill" width="30px"></use></svg>
        <p> Escuro </p>
        <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
    </button>

</div>

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
  <!--  fim da Navbar --> 
   

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">

        <symbol id="check2" viewBox="0 0 16 16">

            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>

        </symbol>

        <symbol id="circle-half" viewBox="0 0 16 16">

            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>

        </symbol>

        <symbol id="moon-stars-fill" viewBox="0 0 16 16">

            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>

            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>

        </symbol>

        <symbol id="sun-fill" viewBox="0 0 16 16">

            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>

        </symbol>

    </svg>


    <!-- Dropdown de seleção de tema -->

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">

        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">

            <li>

                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">

                    <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#circle-half"></use></svg>

                    Normal

                    <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>

                </button>

            </li>

            <li>

                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">

                    <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#moon-stars-fill"></use></svg>

                    Escuro

                    <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>

                </button>

            </li>

            <li>

                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">

                    <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#sun-fill"></use></svg>

                    Claro

                    <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>

                </button>

            </li>

        </ul>

    </div>


    <!-- Container principal do conteúdo da página -->

    <div class="container">

        <div class="row align-items-center py-4">

            <div class="col-12 d-flex justify-content-between align-items-center">

                <a class="saudacao" href="paginaperfil.php" style="white-space: nowrap;">

                    Bem-vindo (a) <span style="font-weight:bold;"><?php echo "$nomeusuario"; ?></span>!

                </a>

               

                <img class="navlogo" src="src/img/logodeitada.png" alt="Logo da Bibliotec">

            </div>

        </div>

    </div>


    <main class="container">

        <!-- Bloco de destaque principal -->

        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary destaque">

            <div class="col-lg-6 px-0">

                <h1 class="display-4 fst-italic">Destaques da Bibliotec!</h1>

                <p class="lead my-3">Aventuras perigosas, romances melancólicos... Descubra seu próximo livro favorito!</p>

                <p class="">

                    <a style="color: #333bb5 !important; text-decoration: none; cursor: pointer;" class="text-body-emphasis fw-bold lead" onclick="openNav()">Acessar</a>

                </p>

             <?php if ($_SESSION['cargo']=="adm"): ?>
            <li class="list">
                <button id="abrirModal" class="btn-entraro">Alterar</button>

  <!-- Estrutura do modal -->
  

  
               
            </li>
        <?php endif; ?>
        <div id="meuModal" class="modal-fundo">
    <div class="modal-conteudo">
      <span class="fechar">&times;</span>
     <form action="princUpload.php" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 18px;">
        <div style="display: flex; flex-direction: column; gap: 6px;">
          <label for="titulo" style="font-weight: 600; color: var(--cor-primaria);">Título</label>
          <input type="text" id="titulo" name="titulo" required style="padding: 10px; border-radius: 8px; border: 1px solid #ccc; font-size: 1rem;">
        </div>
        <div style="display: flex; flex-direction: column; gap: 6px;">
          <label for="img" style="font-weight: 600; color: var(--cor-primaria);">Background</label>
          <input type="file" id="img" name="img" required style="padding: 10px; border-radius: 8px; border: 1px solid #ccc; font-size: 1rem;">
        </div>
        <div style="display: flex; flex-direction: column; gap: 6px;">
          <label for="sinopse" style="font-weight: 600; color: var(--cor-primaria);">Descrição</label>
          <input type="text" id="sinopse" name="sinopse" required style="padding: 10px; border-radius: 8px; border: 1px solid #ccc; font-size: 1rem;">
        </div>
        
      
        <button type="submit" style="background: var(--cor-primaria); color: #fff; padding: 12px 0; border: none; border-radius: 8px; font-weight: 600; font-size: 1.1rem; cursor: pointer; text-decoration: none; transition: background 0.2s; width: 100%; text-align: center; box-shadow: 0 2px 8px rgba(57,59,181,0.10);">Alterar</button>
        
      </form>
    </div>
  </div>
<script>
document.addEventListener("DOMContentLoaded", function() {
  var modal = document.getElementById("meuModal");
  var btn = document.getElementById("abrirModal");
  var span = document.querySelector(".fechar");

  btn.onclick = function() {
    modal.style.display = "block";
  }

  span.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
});
</script>

           </div>

        </div>


        <div class="containero">
        <!-- Cards de postagens em destaque -->

        <div class="row mb-2">

            <!-- Card 1 -->

            <div class="col-md-6">

                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                    <div class="col p-4 d-flex flex-column position-static">

                        <strong class="d-inline-block mb-2 text-primary-emphasis">Romance</strong>

                        <h3 class="mb-0">Antologia Poética</h3>

                        <div class="mb-1 text-body-secondary">14 de outubro</div>

                        <p class="card-text mb-auto">Este é um cartão mais amplo c.</p>

                        <a style="color: #333bb5; text-decoration: none;" href="livroromance" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue lendo

                            <svg class="bi" aria-hidden="false"><use xlink:href="#chevron-right"></use></svg>

                        </a>

                    </div>

                    <div class="col-auto d-none d-lg-block">

                   <img class="bd-placeholder-img" src="src/img/claroEnigma.jpg" alt="Logo da Bibliotec" height="250" width="200">

                    </div>

                </div>

            </div>

           

            <!-- Card 2 -->

            <div class="col-md-6">

                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative titulo-card">

                    <div class="col p-4 d-flex flex-column position-static">

                        <strong style="color: #333bb5;" class="d-inline-block mb-2 text-success-emphasis">Romance</strong>

                        <h4 class="mb-0">Memórias Póstumas de Brás Cubas</h4>

                        <div class="mb-1 text-body-secondary">13 de outubro</div>

                        <p class="mb-auto">"Memórias Póstumas de Brás Cubas" é a história de um rico do século XIX.</p>

                        <a style="color: #333bb5; text-decoration: none;" href="livroromance" class="icon-link gap-1 icon-link-hover stretched-link">

                            Continue lendo

                            <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg>

                        </a>

                    </div>

                    <div class="col-auto d-none d-lg-block">

                     <img class="bd-placeholder-img" src="src/img/memorias.png" alt="Logo da Bibliotec" height="250" width="200">

                    </div>

                </div>

            </div>

        </div>


        <!-- Seção de artigos e postagens -->

        <div class="row g-5">

            <div class="col-md-8">

                <h3 class="pb-4 mb-4 fst-italic border-bottom">

                    Da Maiam Technologies para você

                </h3>

               

                <article class="blockquote">

                    <h2 class="display-5 link-body-emphasis mb-1">O Poder da Palavra Compartilhada: Por Que Você Precisa de uma Comunidade Literária</h2>

                    <p class="blog-post-meta">1 de agosto de 2025 por Murilo Minghini dos Santos</p>

                    <p>Muito mais do que apenas um grupo de leitores, uma comunidade literária é um <strong>ecossistema vibrante</strong> onde o amor pelos livros se transforma em conhecimento, amizade e novas descobertas.</p>

                    <hr>

                    <p>Você já terminou um livro que te transformou e sentiu aquela necessidade urgente de falar sobre ele com alguém? De debater o final, analisar a motivação dos personagens ou até mesmo criticar a tradução? Se sim, você sabe que a leitura, apesar de ser um ato solitário, <strong>floresce quando é compartilhada.</strong> É aí que entram as <strong>comunidades literárias.</strong> Onde o ato solitário da leitura se torna uma jornada coletiva, as comunidades literárias oferecem <strong>perspectivas que jamais encontraríamos sozinhos</strong>. Ao discutir um romance, cada membro traz sua bagagem de vida, suas experiências e sua interpretação única, desvendando camadas de significado que poderiam ter passado despercebidas. O que para você era apenas um conflito de enredo, para outro pode ser uma metáfora social profunda. Essa riqueza de visões amplia não só a sua compreensão do texto, mas também a sua empatia pelo mundo, ensinando a ver além da sua própria lente.</p>

             </blockquote>

                    <blockquote class="blockquote">

                        <h3>Conhecimento Compartilhado e a Curva de Aprendizado Acelerada</h3>

                        <p>Uma das maiores vantagens de fazer parte de uma comunidade literária é o <strong>acesso a um vasto leque de conhecimento </strong>e a aceleração da sua curva de aprendizado. Imagine que você está tentando se aprofundar em um gênero novo, como a ficção científica soviética, mas não sabe por onde começar. Em um grupo, você rapidamente receberá recomendações de clássicos essenciais, autores contemporâneos importantes e, o que é melhor, contexto histórico e análises já prontas de quem já percorreu esse caminho.</p>

                        <p>Não se trata apenas de receber dicas de leitura; <strong> é sobre aprender a ler melhor. </strong>As discussões em grupo frequentemente abordam <strong>teoria literária de forma acessível</strong>: o que é um narrador não confiável, a estrutura de um soneto, o uso de flashback. Você absorve<strong> técnicas de análise e crítica </strong>sem sequer perceber, elevando o nível da sua própria <strong>leitura solitária.</strong> O insight de um membro sobre o simbolismo das cores em um livro pode ser a chave que faltava para você começar a <strong>enxergar esses padrões</strong> em todas as suas leituras futuras.</p>

                    </blockquote>

                   

                    <h3>Motivos para estar em uma comunidade literária</h3>

                    <p>Uma comunidade literária se faz importante pois estimula a criatividade, colaboração, cooperação e camaradagem.</p>

                    <p>Nossa comunidade é composta por nossos usuários e é completamente personalizável. Alguns dos principais motivos para fazer parte de uma são:</p>

                    <ol>

                        <li>Se sentir incluso em uma comunidade;</li>

                        <li>Expansão de conhecimento;</li>

                        <li>Estímulo à criatividade;</li>

                        <li>Desenvolvimento de habilidades sociais.</li>

                    </ol>
             </article>

               

                <article class="blog-post">

                    <h2 class="display-5 link-body-emphasis mb-1">Outro Post</h2>

                    <p class="blog-post-meta">23 de dezembro de 2020 por <a href="#">Jacob</a></p>

                    <p>Atualmente, várias empresas estudam esses microrganismos para produzir alimentos. Em 2019, pesquisadores da Air Protein anunciaram sucesso em transformar CO₂ do ar em carne artificial rica em proteína, sem uso de terras agrícolas.</p>

                    <blockquote>

                        <p>Foram produzidas carnes de vários tipos</p>

                    </blockquote>

                    <p>Esses pesquisadores usaram ar e energia renovável em um processo semelhante à fermentação para produzir proteína rica em aminoácidos essenciais, vitaminas e minerais, sem hormônios, antibióticos ou pesticidas.</p>

                    <p>Foram produzidas carnes de aves, bovinos e frutos do mar, sem emissões de carbono, ao contrário da pecuária tradicional.</p>

                </article>

               

                <article class="blog-post">

                    <h2 class="display-5 link-body-emphasis mb-1">Nova Funcionalidade</h2>

                    <p class="blog-post-meta">14 de dezembro de 2020 por <a href="#">Jacob</a></p>

                    <p>A empresa finlandesa Solar Foods desenvolveu uma técnica para produzir proteína do ar, dividindo a água em hidrogênio e oxigênio por eletrólise. O hidrogênio fornece energia para bactérias transformarem CO₂ e nitrogênio do ar em proteína, de forma mais eficiente que as plantas. Essa proteína, chamada Solein, se assemelha à farinha de trigo.</p>

                    <p>A empresa está coletando dados para obter aprovação alimentar da União Europeia e planeja iniciar a produção comercial em 2021. O objetivo é produzir alimentos sustentáveis usando eletricidade e CO₂, evitando os impactos ambientais da agricultura tradicional.</p>

                    <p>Assim, proteínas derivadas de microrganismos podem:</p>

                    <ul>

                        <li>Oferecer uma solução para a crescente demanda global por alimentos</li>

                        <li>Tornar as fábricas de alimentos mais eficientes e sustentáveis</li>

                        <li>Fornecer alimento para astronautas e toda a população da Terra em 2050</li>

                    </ul>

                    <p>Imagine que os microrganismos serão as fábricas do futuro e que o alimento do futuro será feito do ar! O ano de 2050 será muito diferente do nosso mundo atual, sem agricultura ou pecuária para alimentação. Parece ficção, mas não é impossível!</p>

                </article>

            </div>

           

            <div class="col-md-4">

                <div class="position-sticky" style="top: 2rem;">

                    <div class="p-4 mb-3 bg-body-tertiary rounded">

                        <h4 class="fst-italic">Sobre</h4>

                        <p class="mb-0">Com foco em transformar a jornada acadêmica, a Bibliotec foi <strong>idealizada para ser a sua biblioteca digital definitiva</strong>. Desde sua fundação, a Bibliotec tem se dedicado a oferecer um <strong>acervo vasto e de alta qualidade</strong>, com ferramentas de pesquisa avançadas e uma interface intuitiva. Nossa plataforma é a <strong>solução ideal</strong> para as necessidades de estudantes, oferecendo <strong>acesso ilimitado</strong> a livros, artigos e materiais de estudo essenciais para o seu sucesso.</p>

                        <br><a style="color: #333bb5; text-decoration: none;"href="sobrenos.php"> Ler mais </a>

                    </div>

                   

                    <div>


                        <ul class="list-unstyled">

                            <li>

                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">

                                    <svg aria-hidden="true" class="bd-placeholder-img " height="96" preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">

                                        <rect width="100%" height="100%" fill="#777"></rect>

                                    </svg>

                                    <div class="col-lg-8">

                                        <h6 class="mb-0">Exemplo de título de postagem</h6>

                                        <small class="text-body-secondary">15 de janeiro de 2024</small>

                                    </div>

                                </a>

                            </li>

                            <li>

                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">

                                    <svg aria-hidden="true" class="bd-placeholder-img " height="96" preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">

                                        <rect width="100%" height="100%" fill="#777"></rect>

                                    </svg>

                                    <div class="col-lg-8">

                                        <h6 class="mb-0">Este é outro título de postagem</h6>

                                        <small class="text-body-secondary">14 de janeiro de 2024</small>

                                    </div>

                                </a>

                            </li>

                            <li>

                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">

                                    <svg aria-hidden="true" class="bd-placeholder-img " height="96" preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">

                                        <rect width="100%" height="100%" fill="#777"></rect>

                                    </svg>

                                    <div class="col-lg-8">

                                        <h6 class="mb-0">Título de postagem mais longo: esta linha tem várias linhas!</h6>

                                        <small class="text-body-secondary">13 de janeiro de 2024</small>

                                    </div>

                                </a>

                            </li>

                        </ul>

                    </div>

                   

                   

                    <div class="p-4">

                        <h4 class="fst-italic">Em outro lugar</h4>

                        <ol class="list-unstyled">

                            <li> <a style="text-decoration: none; color: #393bb5;" href="https://allanfs762@gmail.com">Email</a></li>

                            <li> <a style="text-decoration: none; color: #393bb5;"href="">Instagram</a></li>

                            <li> <a style="text-decoration: none; color: #393bb5;"href="meupinto.com">Twitter</a></li>

                            

                        </ol>

                    </div>

                </div>

            </div>

           

            <div class="finterna">

                <p> &copy;  2025 Bibliotec. Todos os direitos reservados  by Maiam Technologies</p>

                <br>

                <a class="link"href="#"> Voltar ao topo </a>

            </div>

        </div>

    </main>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>

    // Script oficial do Bootstrap para alternância de tema

    document.querySelectorAll('[data-bs-theme-value]').forEach(function(btn) {

        btn.addEventListener('click', function() {

            var theme = btn.getAttribute('data-bs-theme-value');

            document.documentElement.setAttribute('data-bs-theme', theme);

            // Atualiza o botão ativo

            document.querySelectorAll('[data-bs-theme-value]').forEach(function(b) {

                b.classList.remove('active');

            });

            btn.classList.add('active');

        });

    });

    </script>

</body>

</html> 