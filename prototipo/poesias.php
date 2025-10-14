<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <link href="./csspaginas/poesias.css" rel="stylesheet">
    <title>Livros de Poesia</title>
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
require_once('bd.php');
$mysql = new BancodeDados();
$mysql -> conecta();
$sqlstring = "select * from livros where id_genero=1"; 
$result = @mysqli_query($mysql->conn, $sqlstring);
?>
<body>
    <nav class="navbar">
        <div id="mySidenav" class="navbarladinho">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="homepage.php"><span class="generos-text">Home</span></a>
            <a href="comunidades-list.php"><span class="generos-text">Comunidades</span></a>
            <a href="sobrenos.php"><span class="generos-text">Sobre Nós</span></a>
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
        <div class="menuo">
            <span class="tresrisco" style="font-size:30px;cursor:pointer;margin-left:50px;" onclick="openNav()">&#9776;</span>
        </div>
        <div class="search-area">
            <form class="search-form" action="#" method="get">
                <input type="text" style="align-items: center;" name="q" class="search-input" placeholder="Pesquisar...">
                <button type="submit" class="search-btn" id="bolalupa">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" id="lupa">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </button>
            </form>
        </div>
        <div class="col-4 d-flex justify-content-end align-items- header-1">
            <a class="btn icon" href="paginaperfil.php"><i class="bi bi-person-circle"></i></a>
        </div>
        <img class="navlogo" src="src/img/logodeitada.png" alt="Logo da Bibliotec">
    </nav>

    <section class="comunidades-hero" style="text-align:center; margin-top:40px; margin-bottom:30px;">
        <h1 class="titulo1" style="font-size:2.5rem; color:#393bb5; margin-bottom:10px;">Poesias</h1>
        <p style="font-size:1.2rem; color:#333; max-width:600px; margin:0 auto 10px auto;">
            Seja bem-vindo à página de Poesias <b>Bibliotec</b>!<br>
            Encontre, crie e leia livros de poesia compartilhados por nossa comunidade apaixonada por literatura.<br>
        </p>
    </section>
    <div class="bloco-comunidades" style="gap: 24px; flex-direction: row; flex-wrap: wrap; justify-content: center; align-items: stretch;">
        <h2 class="titulo2" style="color:#222; font-size:1.7rem; margin-bottom:10px; width:100%;">Poesias em destaque</h2>
        <?php
        while ($livro = mysqli_fetch_assoc($result)) {
            echo "<div class='comunidade-card' style='background:linear-gradient(90deg,#393bb5 60%,#917bff 100%); color:#fff; box-shadow:0 4px 16px #393bb540; border:none; min-width:320px; max-width:350px; flex:1 1 320px; margin: 0 12px; display:flex; flex-direction:column; justify-content:space-between;'>";
            echo "<div style='display:flex;align-items:center;gap:16px;'>";
            echo "<span style='font-size:2rem;'><svg xmlns=\'http://www.w3.org/2000/svg\' width='32' height='32' fill='currentColor' class='bi bi-code-slash' viewBox='0 0 16 16'><path d='M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0'/></svg></span>";
            echo "<div>";
            echo "<span class='comunidade-nomie' style='font-size:1.2rem;font-weight:600;'>{$livro['titulo']}</span>";
            echo "<div style='font-size:0.95rem; color:#eae6ff;'>";
            echo "<p>{$livro['sinopse']}</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            // Botão Baixar encaixado na base do card
            echo "<div style='display:flex; justify-content:flex-end; align-items:flex-end; margin-top:auto; padding-top:24px;'>";
            echo "<a href='{$livro['caminho']}' download class='btn-entraro' style='background:#fff;color:#393bb5;font-weight:600;box-shadow:0 2px 8px #393bb520; min-width:100px; text-align:center;'>Baixar</a>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
    <footer class="footer">
        <p>&copy; 2025 Bibliotec. Todos os direitos reservados by Maiam Technologies</p>
    </footer>
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.body.style.backgroundColor = "white";
    }
    </script>
</body>
</html>