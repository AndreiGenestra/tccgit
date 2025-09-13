
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <title> Conheça a Maiam Tech</title>
</head>
<style>
    body {
      background-image: url("src/img/fundologin.png");
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fff;
      color: #333;
    }

    .container {
      width: 150%;
      max-width: 1200px;
      margin: auto;
      background-color: #e3dfdf;
    }

    .forte {
      color: #ffffff;
      font-weight: bold;
    }

    .forteb {
      color: #393bb5;
      font-weight: bold;
    }
    /* --- SOBRE A EMPRESA --- */
    .titulo-empresa {
      font-size: 2.2rem;
      margin-top: 25px;
      margin-bottom: 25px;
      color: #1c164e;
    }

    .sobre {
      display: flex;
      flex-wrap: wrap;
      align-items: flex-start;
      gap: 40px;
      margin-bottom: 60px;
    }

    .sobre-texto {
      flex: 1;
      min-width: 280px;
      font-weight: normal;
    }

    .sobre-texto  h2{
      font-size: 2rem;
      margin-bottom: 20px;
       font-weight: normal;
    }

    .sobre-texto p {
      font-size: 1.1rem;
      line-height: 1.6;
      margin-bottom: 10px;
    }

    .sobre-imagem {
      flex: 1;
      min-width: 300px;
    }

b, strong {
  font-weight: normal;
}
    .sobre-imagem img {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    /* --- MISSÃO, VISÃO E VALORES --- */
    .secao-missao {
      background-color: #393bb5;
      padding: 40px 20px;
      border-radius: 12px;
      margin-bottom: 60px;
      text-align: center;
      font-weight: normal;
      color: #ffffff;
    }

    .secao-missao h3 {
      font-style: italic;
      color: #555;
      margin-bottom: 25px;
      margin-top: 25px;
       color: #ffffff ;
    }

    .secao-missao h2 {
      font-size: 1.8rem;
      color: #393bb5;
      margin-bottom: 35px;
      margin-top: 35px;
      font-weight: bold;
      color: #ffffff ;
    }

    .itens-missao {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 20px;
      color: #ffffff;
    }

    .item-missao {
      flex: 1;
      min-width: 200px;
      max-width: 300px;
       color: #ffffff ;
    }

    .item-missao h4 {
      font-size: 1.2rem;
      color: #1c164e;
      margin-bottom: 10px;
       color: #ffffff ;
    }

    .item-missao p {
      font-size: 1rem;
      color: #444;
       color: #ffffff ;
    }

    /* --- NÚMEROS --- */
    .secao-numero {
      text-align: center;
      padding: 40px 20px;
    }

    .secao-numero h2 {
      font-size: 2rem;
      color: #1c164e;
      margin-bottom: 10px;
    }

    .secao-numero p {
      color: #888;
      margin-bottom: 30px;
    }

    .grid-dos-numero {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 30px;
    }

    .item-numero {
      font-size: 1.8rem;
      color: #1c164e;
    }

    .item-numero span {
      display: block;
      color: #f26522;
      margin-top: 5px;
    }

    /* --- RESPONSIVO --- */
    @media (max-width: 768px) {
      .sobre {
        flex-direction: column;
      }
      .itens-missao {
        flex-direction: column;
        align-items: center;
      }
    }
    .espaço {
      margin-bottom: 100px;
    }
  </style>
</head>
<body>
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
   <div class="titulo-empresa">
    
   <center>

     <strong class="forteb"> <h1>Sobre a empresa</h1> </strong>

    </center>

   </div>
  <div class="container">
    <!-- SOBRE A EMPRESA -->
    <section class="sobre">
      <div class="sobre-texto">
        <p>Com foco em transformar a jornada acadêmica, a <span class="forteb">Bibliotec</span> foi idealizada para ser a sua biblioteca digital definitiva. Desde sua fundação, a Bibliotec tem se dedicado a oferecer um acervo vasto e de alta qualidade, com ferramentas de pesquisa avançadas e uma interface intuitiva. Nossa plataforma é a solução ideal para as necessidades de estudantes, oferecendo acesso ilimitado a livros, artigos e materiais de estudo essenciais para o seu sucesso.</p>
        <p>Nossa prioridade é o seu aprendizasdo. A <span class="forteb">Bibliotec</span> foi criada para simplificar a sua pesquisa, garantindo que você encontre o conhecimento que precisa de forma rápida e eficiente, com a transparência e profissionalismo que você merece.</p>
      </div>
      <div class="sobre-imagem">
        <img src="src/img/MAIAM.jpg" alt="Fachada da SK Condomínios">
      </div>
    </section>

    <!-- MISSÃO VISÃO VALORES -->
    <section class="secao-missao">
      <h3>Missão, Visão e Valores</h3>
     <h2>Saiba o que nos move </h2>

      <div class="itens-missao">
        <div class="item-missao">
          <h4><strong class="forte">MISSÃO</strong></h4>
          <p>Atender personalizadamente a cada cliente, ouvir e apresentar a melhor solução com profissionalismo.</p>
        </div>
        <div class="item-missao">
          <h4><strong class="forte">VISÃO</strong></h4>
          <p>Liderar o mercado da administração condominial e gerar soluções aos nossos clientes e rentabilidade a seus negócios.</p>
        </div>
        <div class="item-missao">
          <h4><strong class="forte">VALORES</strong></h4>
          <p>Transparência, imparcialidade, especialização, inovação, competência e qualidade.</p>
        </div>
      </div>
</div>
<div class="espaço"></div>
    <footer class="footer"> <p> &copy;  2025 Bibliotec. Todos os direitos reservados  by Maiam Technologies </p></footer>
</body>
</html>