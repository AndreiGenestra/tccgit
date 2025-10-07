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
$nome_usuario = $_SESSION['nome'];
$senha = $_SESSION['senha'];
$email = $_SESSION['email'];
$idade = $_SESSION['idade'];
?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
       <link rel="stylesheet" href="./src/style.css">
    <link rel="script" href="script.js">

    <title>Sistema Bibliotec</title>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="./src/bootstrapcss/css/bootstrap.css" rel="stylesheet">

    
  
   
    <style>
        .dropdown {
  position: relative;
}

/* Estiliza o botão dropdown */
.dropbtn {
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Conteúdo do dropdown */
.dropdown-content {
  display: none;
  position: absolute;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links dentro do conteúdo do dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  background-color:rgb(28, 35, 129);
}

/* Mostra o conteúdo do dropdown no hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Muda a cor de fundo do botão dropdown no hover */

        .containero{
    min-width: 992px;
    max-width: 960px;
    margin: 40px auto;
    background: #e3dfdf;
    border-radius: 8px;
    padding: 32px 24px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-items: center;
    position: relative;
    
        }
        .containero a{
  width: auto;
        }

        .bd-placeholder-img{
            font-size:1.125rem;text-anchor:middle;-webkit-user-select:none;-moz-user-select:none;user-select:none
        }
        @media (min-width: 768px){
            .bd-placeholder-img-lg{font-size:3.5rem}
        }
        .b-example-divider{
            width:100%;height:3rem;background-color:#0000001a;border:solid rgba(0,0,0,.15);border-width:1px 0;box-shadow:inset 0 .5em 1.5em #0000001a,inset 0 .125em .5em #00000026}
        .b-example-vr{
            flex-shrink:0;width:1.5rem;height:100vh}
        .bi{vertical-align:-.125em;fill:currentColor}

        .nav-scroller{
            position:relative;z-index:2;height:2.75rem;overflow-y:hidden}
        .nav-scroller .nav{
            display:flex;flex-wrap:nowrap;padding-bottom:1rem;margin-top:-1px;overflow-x:auto;text-align:center;white-space:nowrap;-webkit-overflow-scrolling:touch}
            
             .icon{
                
                border-radius:100%;
                
                
             }
             .btn{
                --bs-btn-color: #333bb5;
                --bs-btn-border-color: #393bb5;
                --bs-btn-hover-color: #fff;
                --bs-btn-hover-bg: #2c2e8c;
                --bs-btn-hover-border-color: #2c2e8c;
                --bs-btn-focus-shadow-rgb: 57, 59, 181;
                --bs-btn-active-color: #fff;
                --bs-btn-active-bg: #24266f;
                --bs-btn-active-border-color: #24266f;
                --bs-btn-disabled-color: #393bb5;
                
                --bs-btn-disabled-border-color: #393bb5;
             }
        .btn-bd-primary{
            --bd-violet-bg:  #333bb5;--bd-violet-rgb: 112.520718, 44.062154, 249.437846;--bs-btn-font-weight: 600;--bs-btn-color: var(--bs-white);--bs-btn-bg: var(--bd-violet-bg);--bs-btn-border-color: var(--bd-violet-bg);--bs-btn-hover-color: var(--bs-white);--bs-btn-hover-bg: #2c2e8c;--bs-btn-hover-border-color:  #2c2e8c;--bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);--bs-btn-active-color: var(--bs-btn-hover-color);--bs-btn-active-bg:  #2c2e8c;--bs-btn-active-border-color:  #2c2e8c}
            .bd-mode-toggle{z-index:1500}.bd-mode-toggle .bi{width:1em;height:1em}.bd-mode-toggle .dropdown-menu .active .bi{display:block!important}

       
        
        :root[data-bs-theme="light"] { 
             --bs-body-bg:  #eae6ff; /* --cor-de-fundo */
             --bs-body-color:  black; /*--cor-texto */
             --bs-primary: #393bb5;
             --bs-secondary: #060025ff;
             --cor-lead: #ffffff; /* cor do texto lead */
             .bg-body-secondary{
                background-color: var(--bs-primary) !important;
                color: var(--bs-body-bg) !important;
             }


           
  /* Adicione outras variáveis para o modo claro aqui */
            }

        :root[data-bs-theme="dark"] {
        --bs-body-bg: #181a1b;
        --bs-body-color: #f8f9fa;
        --bs-primary: #393bb5;
        --bs-secondary: #b0b3b8;
        --cor-lead: #ffffff;
        --bs-btn-color: #333bb5;
        --bs-btn-border-color: #393bb5;
        --bs-btn-hover-color: #fff;
        --bs-btn-hover-bg: #2c2e8c;
        --bs-btn-hover-border-color: #2c2e8c;
        --bs-btn-focus-shadow-rgb: 57, 59, 181;
        --bs-btn-active-color: #fff;
        --bs-btn-active-bg: #24266f;
        --bs-btn-active-border-color: #24266f;
        --bs-btn-disabled-color: #393bb5;
        --bs-btn-disabled-border-color: #393bb5;
        /* Adicione outras variáveis para o modo escuro aqui */
        }


         .lead{
            color: var(--bs-body-) !important;
        }

        .link{
            color: #333bb5 !important;
            text-decoration: none;
        }
        .navbarladinho {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1000000;
  top: 0;
  left: 0;
  background-color:rgb(39, 41, 150);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  color: #ffffff;

}

.finterna{
align-items: center;
text-align: center;
justify-content: center;
margin: auto;

}

.navbarladinho a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #ffffff;
  display: block;
  transition: 0.3s;
}

.navbarladinho a:hover {
  color: #f1f1f1;
}

.navbarladinho .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;

}

#main {
  transition: margin-left .5s;
  padding: 16px;

}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}

}
.tresrisco{
    color: #ffffff !important;

}
.saudacao {
  font-size: 30px;
  text-decoration: none;
  color: #333bb5 !important;
  width: auto;

}
.col {
  margin: 100px;

}

   .navlogo {
    width: 250px;

}
    </style>
</head>

<body>
     <nav class="navbar">
     <div id="mySidenav" class="navbarladinho">
  <a class="" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 

 
  <a href="comunidades-list.php"> <span class="generos-text">Comunidades</span></a>
  <a href="sobrenos.php"> <span class="generos-text">Sobre Nós</span></a>
    <div class="dropdown">
  <a class="dropbtn generos-text">Gêneros</a>
  <div class="dropdown-content">
    <a href="#">Poesia</a>
    <a href="#">Romance</a>
    <a href="#">Mistério</a>
    <a href="#">Fantasia</a>
    <a href="#">Ficção Científica</a>
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
        <form class="search-form" action="#" method="get">
          <input type="text" style="align-items: center;" name="q" class="search-input" placeholder="Pesquisar...">
          <button type="submit" class="search-btn" id="bolalupa"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" id="lupa">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
          </svg></button>
        </form>
      </div>
       <div class="col-4 d-flex justify-content-end align-items- header-1">
                    <a class="btn icon" href="paginaperfil.php"><i class="bi bi-person-circle"></i></i> <!-- Ícone de perfil --></a>
                </div>
    </nav>
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
 
<!--
  Dropdown de seleção de tema (Normal, Escuro, Claro)
-->
<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
  <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
        <!-- Ícone modo normal -->
        <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#circle-half"></use></svg>
        Normal
        <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
      </button>
    </li>
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
        <!-- Ícone modo escuro -->
        <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#moon-stars-fill"></use></svg>
        Escuro
        <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
      </button>
    </li>
    <li>
      <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
        <!-- Ícone modo claro -->
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
    <!-- Saudação personalizada centralizada -->
    <div class="col-12 d-flex justify-content-between align-items-center">
      <a class="saudacao" href="paginaperfil.php" style="white-space: nowrap;">
        Bem-vindo(a) <span style="font-weight:bold;"><?php echo htmlspecialchars($nome_usuario); ?></span>!
      </a>
     <div class="col"></div>
       <img class="navlogo" src="src/img/logodeitada.png" alt="Logo da Bibliotec">

    </div>
  </div>
</div>

<main class="container">
  <!-- Bloco de destaque principal -->
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary destaque">
    <div class="col-lg-6 px-0">
      <h1 class="display-4 fst-italic">Destaques da Bibliotec!</h1>
      <p class="lead my-3">Aventuras Perigosas, romances melancólicos... Descubra seu próximo livro favorito!</p>
      <p class="">
        <a href="#" class="text-body-emphasis fw-bold lead" onclick="openNav()">Acessar</a>
      </p>
    </div>
  </div>

  <!-- Cards de postagens em destaque -->
  <div class="row mb-2">
    <!-- Card 1 -->
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis">Mundo</strong>
          <h3 class="mb-0">Postagem em destaque</h3>
          <div class="mb-1 text-body-secondary">12 de novembro</div>
          <p class="card-text mb-auto">Este é um cartão mais amplo com texto de apoio abaixo como uma introdução natural ao conteúdo adicional.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue lendo
            <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- Miniatura do card -->
          <svg aria-label="Placeholder: Miniatura" class="bd-placeholder-img " height="250" preserveAspectRatio="xMidYMid slice" role="img" width="200" xmlns="http://www.w3.org/2000/svg">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Miniatura</text>
          </svg>
        </div>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
          <h3 class="mb-0">Título do Post fhfhfh</h3>
          <div class="mb-1 text-body-secondary">11 de novembro</div>
          <p class="mb-auto">Este é um cartão mais amplo com texto de apoio abaixo como uma introdução natural ao conteúdo adicional.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue lendo
            <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg>
          </a>
            <!-- Link vazio para exemplo -->
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- Miniatura do card -->
          <svg aria-label="Placeholder: Miniatura" class="bd-placeholder-img " height="250" preserveAspectRatio="xMidYMid slice" role="img" width="200" xmlns="http://www.w3.org/2000/svg">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Miniatura</text>
        </svg>
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
      <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">O Poder da Palavra Compartilhada: Por Que Você Precisa de uma Comunidade Literária</h2>
        <p class="blog-post-meta">1 de agosto de 2025 por Murilo Minghini dos Santos</p>
        <p>Muito mais do que apenas um grupo de leitores, uma comunidade literária é um <strong>ecossistema vibrante</strong> onde o amor pelos livros se transforma em conhecimento, amizade e novas descobertas.</p>
                    <hr>
                    <p>Você já terminou um livro que te transformou e sentiu aquela necessidade urgente de falar sobre ele com alguém? De debater o final, analisar a motivação dos personagens ou até mesmo criticar a tradução? Se sim, você sabe que a leitura, apesar de ser um ato solitário, <strong>floresce quando é compartilhada.</strong> É aí que entram as <strong>comunidades literárias.</strong> Onde o ato solitário da leitura se torna uma jornada coletiva, as comunidades literárias oferecem <strong>perspectivas que jamais encontraríamos sozinhos</strong>. Ao discutir um romance, cada membro traz sua bagagem de vida, suas experiências e sua interpretação única, desvendando camadas de significado que poderiam ter passado despercebidas. O que para você era apenas um conflito de enredo, para outro pode ser uma metáfora social profunda. Essa riqueza de visões amplia não só a sua compreensão do texto, mas também a sua empatia pelo mundo, ensinando a ver além da sua própria lente.

</p>
                    <blockquote class="blockquote">
                    <h3>Conhecimento Compartilhado e a Curva de Aprendizado Acelerada</h3>
                    <p>Uma das maiores vantagens de fazer parte de uma comunidade literária é o <strong>acesso a um vasto leque de conhecimento </strong>e a aceleração da sua curva de aprendizado. Imagine que você está tentando se aprofundar em um gênero novo, como a ficção científica soviética, mas não sabe por onde começar. Em um grupo, você rapidamente receberá recomendações de clássicos essenciais, autores contemporâneos importantes e, o que é melhor, contexto histórico e análises já prontas de quem já percorreu esse caminho.

Não se trata apenas de receber dicas de leitura; <strong> é sobre aprender a ler melhor. </strong>As discussões em grupo frequentemente abordam teoria literária de forma acessível: o que é um narrador não confiável, a estrutura de um soneto, o uso de flashback. Você absorve técnicas de análise e crítica sem sequer perceber, elevando o nível da sua própria leitura solitária. O insight de um membro sobre o simbolismo das cores em um livro pode ser a chave que faltava para você começar a enxergar esses padrões em todas as suas leituras futuras.</p>
                   <h3>Motivos para estar em uma comunidade literária</h3>
                    <p>Uma comunidade literária se faz importante pois estimula a criatividade, colaboração, cooperação e camaradagem.</p>
                    <p>É composta por três principais tipos:</p>
                    <ul>
                        <li>Programação</li>
                        <li>Design</li>
                        <li>Gorduras</li>
                    </ul>
                    <p>As proteínas são formadas por aminoácidos, compostos orgânicos dos quais o corpo humano possui vinte, sendo nove essenciais obtidos pela alimentação. Os aminoácidos são compostos principalmente de:</p>
                    <ol>
                        <li>Carbono</li>
                        <li>Hidrogênio</li>
                        <li>Oxigênio</li>
                        <li>Nitrogênio</li>
                    </ol>
                    <p>E é importante notar que o nitrogênio é fundamental nesse processo.</p>
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
                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary rounded-pill" href="#">Posts mais antigos</a>
                    <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Posts mais recentes</a>
                </nav>
            </div>
            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                        <h4 class="fst-italic">Sobre</h4>
                        <p class="mb-0">Com foco em transformar a jornada acadêmica, a Bibliotec foi <strong>idealizada para ser a sua biblioteca digital definitiva</strong>. Desde sua fundação, a Bibliotec tem se dedicado a oferecer um <strong>acervo vasto e de alta qualidade</strong>, com ferramentas de pesquisa avançadas e uma interface intuitiva. Nossa plataforma é a <strong>solução ideal</strong> para as necessidades de estudantes, oferecendo <strong>acesso ilimitado</strong> a livros, artigos e materiais de estudo essenciais para o seu sucesso.</p>
                    <br><a style="color: #333bb5; text-decoration: none;"href="sobrenos.php" class="icon-link gap-1 icon-link-hover stretched-link"> Ler mais </a>
                      </div>
                    <div>
                        <h4 class="fst-italic">Postagens recentes</h4>
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
                        <h4 class="fst-italic">Arquivo</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">Março 2021</a></li>
                            <li><a href="#">Fevereiro 2021</a></li>
                            <li><a href="#">Janeiro 2021</a></li>
                            <li><a href="#">Dezembro 2020</a></li>
                            <li><a href="#">Novembro 2020</a></li>
                            <li><a href="#">Outubro 2020</a></li>
                            <li><a href="#">Setembro 2020</a></li>
                            <li><a href="#">Agosto 2020</a></li>
                            <li><a href="#">Julho 2020</a></li>
                            <li><a href="#">Junho 2020</a></li>
                            <li><a href="#">Maio 2020</a></li>
                            <li><a href="#">Abril 2020</a></li>
                        </ol>
                    </div>
                    <div class="p-4">
                        <h4 class="fst-italic">Em outro lugar</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Social</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
           <div class="finterna"> <p> &copy;  2025 Bibliotec. Todos os direitos reservados  by Maiam Technologies</p> <br>
           <a class="link"href="#"> Voltar ao topo </a> </div>
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