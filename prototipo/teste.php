<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Conheça a MAIAM Tech</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f7f7f7;
      color: #333;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
      padding: 40px 20px;
    }

    h2.section-title {
      font-size: 2.2rem;
      margin-bottom: 10px;
      color: #1c164e;
    }

    .highlight {
      color: #f26522;
      font-weight: bold;
    }

    /* --- SOBRE A EMPRESA --- */
    .about {
      display: flex;
      flex-wrap: wrap;
      align-items: flex-start;
      gap: 40px;
      margin-bottom: 60px;
    }

    .about-text {
      flex: 1;
      min-width: 280px;
    }

    .about-text h2 {
      font-size: 2rem;
      color: #1c164e;
      margin-bottom: 20px;
    }

    .about-text p {
      font-size: 1.1rem;
      line-height: 1.6;
      margin-bottom: 10px;
    }

    .about-image {
      flex: 1;
      min-width: 300px;
    }

    .about-image img {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    /* --- MISSÃO, VISÃO E VALORES --- */
    .mission-section {
      background-color: #eaeaea;
      padding: 40px 20px;
      border-radius: 12px;
      margin-bottom: 60px;
      text-align: center;
    }

    .mission-section h3 {
      font-style: italic;
      color: #555;
      margin-bottom: 8px;
    }

    .mission-section h2 {
      font-size: 1.8rem;
      color: #1c164e;
      margin-bottom: 30px;
    }

    .mission-items {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 20px;
    }

    .mission-item {
      flex: 1;
      min-width: 200px;
      max-width: 300px;
    }

    .mission-item h4 {
      font-size: 1.2rem;
      color: #1c164e;
      margin-bottom: 10px;
    }

    .mission-item p {
      font-size: 1rem;
      color: #444;
    }

    /* --- NÚMEROS --- */
    .numbers-section {
      text-align: center;
      padding: 40px 20px;
    }

    .numbers-section h2 {
      font-size: 2rem;
      color: #1c164e;
      margin-bottom: 10px;
    }

    .numbers-section p {
      color: #888;
      margin-bottom: 30px;
    }

    .numbers-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 30px;
    }

    .number-item {
      font-size: 1.8rem;
      color: #1c164e;
    }

    .number-item span {
      display: block;
      font-size: 0.9rem;
      color: #f26522;
      margin-top: 5px;
    }

    /* --- RESPONSIVO --- */
    @media (max-width: 768px) {
      .about {
        flex-direction: column;
      }
      .mission-items {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <!-- SOBRE A EMPRESA -->
    <section class="about">
      <div class="about-text">
        <h2>Sobre a <strong class="highlight">empresa</strong></h2>
        <p>Idealizada a partir dos sonhos de Claudia Santiago e fundada em 2008, a SK Condomínios é uma empresa compromissada com a qualidade, instalações atualizadas, serviços informatizados e equipamentos profissionais, tendo estes como pontos que tornam a <span class="highlight">SK Condomínios</span> a melhor opção em administração e a resposta definitiva às necessidades do seu condomínio.</p>
        <p>Nossa prioridade é garantir a satisfação dos clientes, ouvindo suas demandas e apresentando a melhor solução ao operar com transparência e profissionalismo.</p>
      </div>
      <div class="about-image">
        <img src="sua-imagem-da-fachada.png" alt="Fachada da SK Condomínios">
      </div>
    </section>

    <!-- MISSÃO VISÃO VALORES -->
    <section class="mission-section">
      <h3>Missão, Visão e Valores</h3>
      <h2><strong>Saiba</strong> <span class="highlight">o que nos move</span></h2>

      <div class="mission-items">
        <div class="mission-item">
          <h4>MISSÃO</h4>
          <p>Atender personalizadamente a cada cliente, ouvir e apresentar a melhor solução com profissionalismo.</p>
        </div>
        <div class="mission-item">
          <h4>VISÃO</h4>
          <p>Liderar o mercado da administração condominial e gerar soluções aos nossos clientes e rentabilidade a seus negócios.</p>
        </div>
        <div class="mission-item">
          <h4>VALORES</h4>
          <p>Transparência, imparcialidade, especialização, inovação, competência e qualidade.</p>
        </div>
      </div>
    </section>

    <!-- NÚMEROS -->
    <section class="numbers-section">
      <h2>Números</h2>
      <p>que exemplificam a excelência de nosso atendimento</p>

      <div class="numbers-grid">
        <div class="number-item">+ 180 <span>CONDOMÍNIOS</span></div>
        <div class="number-item">+ 55 mil <span>CONDÔMINOS</span></div>
        <div class="number-item">9 anos <span>MÉDIA DE PERMANÊNCIA</span></div>
        <div class="number-item">+ 11 mil <span>UNIDADES</span></div>
      </div>
    </section>
  </div>

</body>
</html>