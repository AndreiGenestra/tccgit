
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
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center; /* Alinha ao centro */
        padding-top: 25px;

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
    .comunidade-nomie {
        font-size: 1.1rem;
        font-weight: 500;

    }
    .btn-entraro {
        background: #007bff;
        color: #fff;
        padding: 8px 18px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        transition: background 0.2s;

    }
    .btn-entraro:hover {
        background: #0056b3;

    }

    .titulo1 {
        font-size: 2rem;
        margin-bottom: 20px;
        color: black;
        text-align: center;
    }
    .titulo2 {
        font-size: 1.75rem;
        margin-bottom: 20px;
        color: black;
        text-align: center;
    }
       .navlogo {
    width: 250px;

}
  </style>
<body>

     <nav class="navbar">
     <div id="mySidenav" class="navbarladinho">
  <a class="" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 

 <a href="homepage.php"> <span class="generos-text">Home</span></a>
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
	<img class="navlogo" src="src/img/logodeitada.png" alt="Logo da Bibliotec">
    </nav>

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
        <a href="comunidades-enter.php" class="btn-entraro" style="background:#fff;color:#393bb5;font-weight:600;box-shadow:0 2px 8px #393bb520; margin-top:16px;">Entrar</a>
      </div>
      <div class="comunidade-card" style="background:linear-gradient(90deg,#917bff 60%,#393bb5 100%); color:#fff; box-shadow:0 4px 16px #917bff40; border:none; min-width:320px; max-width:350px; flex:1 1 320px; margin: 0 12px; display:flex; flex-direction:column; justify-content:space-between;">
        <div style="display:flex;align-items:center;gap:16px;">
          <span style="font-size:2rem;"><svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-palette' viewBox='0 0 16 16'><path d='M8 0a8 8 0 1 0 8 8c0-1.657-1.567-3-3.5-3-.276 0-.5.224-.5.5s.224.5.5.5c.828 0 1.5.895 1.5 2 0 1.105-.672 2-1.5 2-.276 0-.5.224-.5.5s.224.5.5.5c1.933 0 3.5-1.343 3.5-3A8 8 0 0 0 8 0zm-3 7a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm2-3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-2 4a1 1 0 1 1-2 0 1 1 0 0 1 2 0z'/></svg></span>
          <div>
            <span class="comunidade-nomie" style="font-size:1.2rem;font-weight:600;">Comunidade de Design</span>
            <div style="font-size:0.95rem; color:#eae6ff;"><p>Arte, criatividade, UI/UX e</p><p> inspiração visual.</p></div>
          </div>
        </div>
        <a href="comunidades-enter.php" class="btn-entraro" style="background:#fff;color:#917bff;font-weight:600;box-shadow:0 2px 8px #917bff20; margin-top:16px;">Entrar</a>
      </div>
      <div class="comunidade-card" style="background:linear-gradient(90deg,#ffb347 60%,#ffcc80 100%); color:#393bb5; box-shadow:0 4px 16px #ffb34740; border:none; min-width:320px; max-width:350px; flex:1 1 320px; margin: 0 12px; display:flex; flex-direction:column; justify-content:space-between;">
        <div style="display:flex;align-items:center;gap:16px;">
          <span style="font-size:2rem;"><svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-controller' viewBox='0 0 16 16'><path d='M11.5 6a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 0 1H12v.5a.5.5 0 0 1-1 0V8h-.5a.5.5 0 0 1 0-1H11v-.5a.5.5 0 0 1 .5-.5z'/><path d='M6.5 7a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 0 1H7v.5a.5.5 0 0 1-1 0V9h-.5a.5.5 0 0 1 0-1H6v-.5a.5.5 0 0 1 .5-.5z'/><path d='M8 1a7 7 0 0 0-7 7c0 1.657 1.567 3 3.5 3 .276 0 .5-.224.5-.5s-.224-.5-.5-.5C2.672 10 2 9.105 2 8c0-1.105.672-2 1.5-2 .276 0 .5-.224.5-.5s-.224-.5-.5-.5C1.567 5 0 6.343 0 8a8 8 0 1 0 16 0c0-1.657-1.567-3-3.5-3-.276 0-.5.224-.5.5s.224.5.5.5c.828 0 1.5.895 1.5 2 0 1.105-.672 2-1.5 2-.276 0-.5.224-.5.5s.224.5.5.5c1.933 0 3.5-1.343 3.5-3A7 7 0 0 0 8 1z'/></svg></span>
          <div>
            <span class="comunidade-nomie" style="font-size:1.2rem;font-weight:600;">Comunidade de Jogos</span>
            <div style="font-size:0.95rem; color:#393bb5;">Games, e-sports, diversão e novidades do mundo gamer.</div>
          </div>
        </div>
        <a href="comunidades-enter.php" class="btn-entraro" style="background:#fff;color:#ffb347;font-weight:600;box-shadow:0 2px 8px #ffb34720; margin-top:16px;">Entrar</a>
      </div>
    </div>
        <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Bibliotec. Todos os direitos reservados by Maiam Technologies</p>
    </footer>
</body>
</html>