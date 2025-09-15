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
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Astro v5.13.2">
    <title>Página Inicial</title>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
  
   
    <style>
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
                --bs-btn-hover-color: #5158b5ff;
                
                --bs-btn-focus-shadow-rgb: 57, 59, 181;
                --bs-btn-active-color: #fff;
                --bs-btn-active-bg: #24266f;
                --bs-btn-disabled-color: #393bb5;
             }
        .btn-bd-primary{
            --bd-violet-bg: #712cf9;--bd-violet-rgb: 112.520718, 44.062154, 249.437846;--bs-btn-font-weight: 600;--bs-btn-color: var(--bs-white);--bs-btn-bg: var(--bd-violet-bg);--bs-btn-border-color: var(--bd-violet-bg);--bs-btn-hover-color: var(--bs-white);--bs-btn-hover-bg: #6528e0;--bs-btn-hover-border-color: #6528e0;--bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);--bs-btn-active-color: var(--bs-btn-hover-color);--bs-btn-active-bg: #5a23c8;--bs-btn-active-border-color: #5a23c8}
            .bd-mode-toggle{z-index:1500}.bd-mode-toggle .bi{width:1em;height:1em}.bd-mode-toggle .dropdown-menu .active .bi{display:block!important}

       
        :root[data-bs-theme="light"] { 
             --bs-body-bg:  #eae6ff; /* --cor-de-fundo */
             --bs-body-color:  #222; /*--cor-texto */
             --bs-primary: #393bb5;
             --bs-secondary: #060025ff;
             --cor-lead: #ffffff; /* cor do texto lead */
             .bg-body-secondary{
                background-color: var(--bs-primary) !important;
                color: var(--bs-body-bg) !important;
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
  /* Adicione outras variáveis para o modo claro aqui */
            }

        :root[data-bs-theme="dark"] {
        --bs-body-bg: #181a1b;
        --bs-body-color: #f8f9fa;
        --bs-primary: #4f8cff;
        --bs-secondary: #b0b3b8;
        --cor-lead: #ffffff;
        /* Adicione outras variáveis para o modo escuro aqui */
        }


         .lead{
            color: var(--bs-body-) !important;
        }

        .header-1{
            
        }
        
    </style>
</head>
<body>
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
 
<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
  <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Alternar tema (auto)">
    <svg class="bi my-1 theme-icon-active" aria-hidden="true"><use href="#circle-half"></use></svg>
    <span class="visually-hidden" id="bd-theme-text">Alternar tema</span>
  </button>
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

    <div class="container">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#"><?php echo "Bem-vindo(a) " . $nome_usuario . "!"; ?></a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">Bibliotec</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center header-1">
                    <a class="link-secondary" href="#" aria-label="Buscar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Buscar</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
                    </a>
                    <a class="btn icon" href="#"><i class="bi bi-person-circle"></i></i> <!-- Ícone de perfil --></a>
                </div>
            </div>
        </header>
        <div class="nav-scroller py-1 mb-3 border-bottom">
            <nav class="nav nav-underline justify-content-between">
                <a class="nav-item nav-link link-body-emphasis active" href="#">Poesia</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Romance</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Drama</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Fantasia</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Ficção científica</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Terror</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Aventura</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Biografia</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">História</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Política</a>
            </nav>
        </div>
    </div>
    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-6 px-0">
                <h1 class="display-4 fst-italic">Destaques da Bibliotec!</h1>
                <p class="lead my-3">Aventuras Perigosas, romances melancólicos... Veja o que as pessoas mais estão lendo!</p>
                <p class=""><a href="#" class="text-body-emphasis fw-bold lead">Acessar</a></p>
            </div>
        </div>
        <div class="row mb-2">
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
                        <svg aria-label="Placeholder: Miniatura" class="bd-placeholder-img " height="250" preserveAspectRatio="xMidYMid slice" role="img" width="200" xmlns="http://www.w3.org/2000/svg">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Miniatura</text>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                        <h3 class="mb-0">Título do Post</h3>
                        <div class="mb-1 text-body-secondary">11 de novembro</div>
                        <p class="mb-auto">Este é um cartão mais amplo com texto de apoio abaixo como uma introdução natural ao conteúdo adicional.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue lendo
                            <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg aria-label="Placeholder: Miniatura" class="bd-placeholder-img " height="250" preserveAspectRatio="xMidYMid slice" role="img" width="200" xmlns="http://www.w3.org/2000/svg">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Miniatura</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    Do Firehose
                </h3>
                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">Exemplo de Postagem</h2>
                    <p class="blog-post-meta">1 de janeiro de 2021 por <a href="#">Mark</a></p>
                    <p>Esta postagem de blog mostra alguns tipos diferentes de conteúdo suportados e estilizados com Bootstrap. Textos básicos, imagens e códigos são totalmente suportados.</p>
                    <hr>
                    <p>Garantir a segurança alimentar no futuro é uma questão que preocupa governos e cientistas em todo o mundo. Durante o século XX, a população mundial quadruplicou, e estima-se que chegará a dez bilhões de pessoas até 2050. Esse aumento representará um grande desafio e pressão sobre a capacidade de produção agrícola, o que exige o desenvolvimento de tecnologias inovadoras para produção de alimentos além da agricultura, como a fabricação de alimentos a partir do ar.</p>
                    <blockquote class="blockquote">
                        <p>A agricultura ocupa grandes áreas de terra, consome enormes quantidades de água e contribui significativamente para as emissões globais de gases de efeito estufa.</p>
                    </blockquote>
                    <p>A agricultura ocupa grandes áreas de terra e consome muita água. Além disso, a produção de alimentos por meio da agricultura contribui com uma alta porcentagem das emissões globais de gases de efeito estufa, superando até mesmo o setor de transporte.</p>
                    <h2>Título</h2>
                    <p>As plantas obtêm seu alimento por meio da fotossíntese, processo em que convertem luz solar, água e dióxido de carbono em alimento, liberando oxigênio como subproduto. Esse processo ocorre nos cloroplastos. As plantas usam a energia da luz solar para dividir a água em hidrogênio e oxigênio, e outras reações químicas produzem glicose, usada como fonte de alimento, enquanto o oxigênio é liberado na atmosfera. Ou seja, as plantas transformam dióxido de carbono em alimento por meio de reações químicas complexas. A fotossíntese é uma das reações químicas mais importantes da Terra, pois permitiu o surgimento da vida. As plantas usam CO₂ para produzir alimento e liberam oxigênio para outros seres vivos respirarem!</p>
                    <h3>Subtítulo</h3>
                    <p>Esse processo inspirou cientistas da NASA nos anos 1960 a pesquisar formas de alimentar astronautas em missões longas, como viagens a Marte. Uma ideia promissora era produzir alimento a partir do CO₂ exalado pelos astronautas, não por plantas, mas por microrganismos unicelulares capazes de transformar CO₂ em proteína em pó, sem sabor, que pode ser usada em alimentos comuns.</p>
                    <pre><code>Exemplo de bloco de código</code></pre>
                    <p>Diferente das plantas, esses microrganismos não usam luz, podendo crescer no escuro. Chamadas de "hidrogenotróficas", essas bactérias usam hidrogênio como combustível para produzir alimento a partir do CO₂. Assim, o CO₂ exalado é capturado pelos microrganismos e transformado, junto com outros insumos, em alimento rico em carbono, criando um ciclo fechado de carbono.</p>
                    <h3>Subtítulo</h3>
                    <p>Mais de meio século depois das pesquisas da NASA, empresas como Air Protein e Solar Foods desenvolvem novos produtos alimentícios sustentáveis, sem pegada de carbono, para todos os habitantes da Terra, produzidos rapidamente e sem depender de terras agrícolas. Isso permite obter mais alimentos em menos espaço.</p>
                    <p>A alimentação humana é composta por três tipos principais:</p>
                    <ul>
                        <li>Proteínas</li>
                        <li>Carboidratos</li>
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
                        <p class="mb-0">Você chegou, e com você veio a vida em todas as suas formas e cores: as plantas crescem, as árvores florescem, o gato mia, o pássaro canta, as ovelhas balem, as vacas mugem, e todos os seres chamam seus pares. Tudo sente a vida, esquece as preocupações e só lembra da felicidade. Se o tempo fosse um corpo, você seria sua alma; se fosse uma vida, você seria sua juventude.</p>
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
        </div>
    </main>
    <footer class="py-5 text-center text-body-secondary bg-body-tertiary">
        <p> &copy;  2025 Bibliotec. Todos os direitos reservados  by Maiam Technologies</p>
        <p class="mb-0">
            <a href="#">Voltar ao topo</a>
        </p>
    </footer>

     <footer class="footer">  </p></footer>
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