<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <title>Comunidades disponíveis</title>
</head>
<style>
    .bloco-comunidades {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: flex-start; /* Alinha à esquerda */
        padding: 10px;
        padding-left: 7%; /* Move um pouco para a direita */
        padding-top:30px;


    }

    /*  cards das comunidades   */
    .comunidade-card {
        background: #f5f5f5;
        border-radius: 8px;
        padding: 16px 24px;
        margin: 12px 0;
        display: flex;
        align-items: center;
        justify-content:space-between;
        width: 350px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .comunidade-nome {
        font-size: 1.1rem;
        font-weight: 500;
    }
    .btn-entrar {
        background: #007bff;
        color: #fff;
        padding: 8px 18px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        transition: background 0.2s;
    }
    .btn-entrar:hover {
        background: #0056b3;
    }
</style>
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
        <h1 class="titulo1">Comunidades em Destaque</h1>
        <div class="comunidade-card">
            <span class="comunidade-nome">Comunidade de Programação</span>
            <a href="comunidades-enter.php" class="btn-entrar">Entrar</a>
        </div>
        <div class="comunidade-card">
            <span class="comunidade-nome">Comunidade de Design</span>
            <a href="comunidades-enter.php" class="btn-entrar">Entrar</a>
        </div>
        <div class="comunidade-card">
            <span class="comunidade-nome">Comunidade de Jogos</span>
            <a href="comunidades-enter.php" class="btn-entrar">Entrar</a>
        </div>
    </div>
    
     <script>
       
const texto = "Bibliotec é uma biblioteca digital que oferece uma ampla gama de livros e recursos para leitores de todas as idades.";
const elemento = document.getElementById("typewriter-text");
let i = 0;

function digitar() {
    if (i < texto.length) {
        elemento.innerHTML += texto.charAt(i);
        i++;
        setTimeout(digitar, 35); // velocidade da digitação
    }
}
window.onload = digitar;

var lupa = document.getElementById("lupa");
var bolalupa = document.getElementById("bolalupa")

function mudacor(){
    lupa.style.color = "Blue";
}

function mudacor2(){
    lupa.style.color = "var(--cor-fundo)";
}

     
     bolalupa.addEventListener("mousemove", mudacor , false);
     bolalupa.addEventListener("mouseleave", mudacor2, false)
    </script>
    
</body>
</html>