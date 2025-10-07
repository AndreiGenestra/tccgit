<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <title>Seu perfil</title>
</head>
  <style>

     body{
         background-image: url("src/img/fundologin.png");
     }

    .coroalogin {
        z-index: -1;
        max-height: 300px;
        min-height:300px; 
        min-width: 400px; ;
        max-width: 600px;
    }
        .perfil{
           color: #393bb5;
           align-items: center;
           position: relative;
           justify-items: center;
           display: flex;
           flex-direction: column;
           font-size: 75px;
           top: 75px;
    }
        .perfil-area{
            width:100%;
            height: auto;
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            border color: #393bb5;

        }

         .perfil-container {
            min-width: 400px; ;
            max-width: 600px;
            margin: 40px auto;
            background: #e3dfdf;
            border-radius: 8px;
            border-color: #393bb5;
            border-style: solid;
            border-width: 5px;
            padding: 32px 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-items: center;
            position: relative;
            bottom:100px;
            z-index: 1;
        }

        .informacoes {
           align-items: center;
           position: relative;
           justify-items: center;
           display: flex;
           flex-direction: column;
        }

        .perfil-container h2 {
            margin-bottom: 18px;
            font-size: 1.4rem;
            font-weight: 600;
        }

        .login-form {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .login-form label {
            margin-bottom: 6px;
            font-weight: 500;
        }

        .login-form input {
            padding: 8px 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .voltar {
            background: var(--cor-primaria);
            color: #fff;
            padding: 10px 0;
            border: none;
            border-radius: 5px;
            font-weight: 500;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
            width: 100px;
            text-decoration: none;
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            float: left;
        }

        .voltar:hover {
            background: var(--cor-gradiente);
        }

        .cadastro-link {
            margin-top: 14px;
            font-size: 0.95rem;
        }

        .cadastro-link a {
            color: #007bff;
            text-decoration: none;
        }

        .cadastro-link a:hover {
            text-decoration: underline;
        }
        .caixaperfil{
            background-color:rgb(255, 255, 255);
            width: 100%;
            text-align: center;
            padding: 10px 0;
            border-radius: 5px;S
            font-size: 1.2rem;
            font-weight: 600;

        }
    </style>

<?php
session_start();

$id = $_SESSION['id'];
$nome_usuario = $_SESSION['nome'];
$senha = $_SESSION['senha'];
$email = $_SESSION['email'];
$idade = $_SESSION['idade'];
$logado = $_SESSION['logado'];

if (!isset($logado) || $logado !== true) {
    echo "<script language='javascript' type='text/javascript'>
    alert('Acesso negado! Entre na conta para acessar');window.location.href='entrarconta.php';</script>";
    die();
}

?>

<body>

    <nav class="navbar" style="box-shadow:0 2px 8px rgba(57,59,181,0.07);padding:0 32px;">
  <button class="navbar-toggle" aria-label="Abrir menu" onclick="toggleNavbar()">☰</button>
  <ul class="nav-list" style="display:flex;gap:32px;align-items:center;list-style:none;margin:0;padding:0;">
    <li class="nav-list-item home-item">
      <?php
        if($_SESSION['logado']){
          echo"<a href='./homepage.php' style='display:flex;align-items:center;gap:8px;text-decoration:none;'>";
        }
        else{
          echo"<a href='./index.php' style='display:flex;align-items:center;gap:8px;text-decoration:none;'>";
        }
      ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#917bff" class="bi bi-house-fill" viewBox="0 0 16 16">
          <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
          <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
        </svg>
        <span class="home-text" style="font-weight:600;color:#white;">Home</span>
      </a>
    </li>
    <li class="nav-list-item generos-item">
      <a href="comunidades-list.php" style="display:flex;align-items:center;gap:8px;text-decoration:none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#917bff" class="bi bi-book-fill" viewBox="0 0 16 16">
          <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
        </svg>
        <span class="generos-text" style="font-weight:600;color:#white;">Comunidades</span>
      </a>
    </li>
    <li class="nav-list-item sobre-item">
      <a href="sobrenos.php" style="display:flex;align-items:center;gap:8px;text-decoration:none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#917bff" class="bi bi-code-slash" viewBox="0 0 16 16">
          <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0"/>
        </svg>
        <span class="sobre-text" style="font-weight:600;color:#white;">Sobre Nós</span>
      </a>
    </li>
  </ul>
  <img class="navbar-logo" src="src/img/logodeitada.png" alt="Logo da Bibliotec" style="height:40px;margin-left:32px;">
</nav>

  <main style="display:flex;align-items:center;justify-content:center;min-height:87.55vh;padding:0;">
  <section style="width:100%;max-width:900px;background:rgba(255,255,255,0.98);border-radius:16px;box-shadow:0 8px 32px rgba(57,59,181,0.15);padding:56px 0;display:flex;flex-direction:row;align-items:center;gap:0;">
    <!-- Avatar e nome -->
    <div style="flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:24px;">
      <div style="width:160px;height:160px;border-radius:16px;background:#917bff;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 16px rgba(57,59,181,0.12);font-size:5.5rem;color:#fff;font-weight:700;">
        <?php echo strtoupper(substr($nome_usuario,0,1)); ?>
      </div>
      <span style="font-size:2rem;font-weight:700;color:#393bb5;"><?php echo htmlspecialchars($nome_usuario); ?></span>
      <span style="color:#917bff;font-size:1.1rem;">@<?php echo htmlspecialchars($nome_usuario); ?></span>
    </div>
    <!-- Dados do usuário -->
    <div style="flex:2;display:flex;flex-direction:column;gap:28px;padding:0 24px;">
      <div style="background:#e3e0fa;border-radius:8px;padding:20px 32px;box-shadow:0 1px 4px rgba(57,59,181,0.07);margin-bottom:0;">
        <label style="font-weight:600;color:#393bb5;">E-mail</label>
        <div style="font-size:1.15rem;color:#393bb5;"><?php echo htmlspecialchars($email); ?></div>
      </div>
      <div style="background:#e3e0fa;border-radius:8px;padding:20px 32px;box-shadow:0 1px 4px rgba(57,59,181,0.07);margin-bottom:0;">
        <label style="font-weight:600;color:#393bb5;">Idade</label>
        <div style="font-size:1.15rem;color:#393bb5;"><?php echo htmlspecialchars($idade); ?></div>
      </div>
      <div style="display:flex;gap:24px;width:100%;justify-content:flex-start;margin-top:24px;">
        <a href="bddeslogar.php" style="background:#393bb5;color:#fff;padding:16px 0;border:none;border-radius:8px;font-weight:700;font-size:1.1rem;cursor:pointer;text-decoration:none;transition:background 0.2s;width:45%;text-align:center;box-shadow:0 2px 8px rgba(57,59,181,0.10);">Logout</a>
        <a href="homepage.php" style="background:#393bb5;color:#fff;padding:16px 0;border:none;border-radius:8px;font-weight:700;font-size:1.1rem;cursor:pointer;text-decoration:none;transition:background 0.2s;width:45%;text-align:center;box-shadow:0 2px 8px rgba(57,59,181,0.10);">Voltar</a>
      </div>
    </div>
  </section>
</main>
        <!-- Rodapé -->
    <footer class="footer">
        <p>&copy; 2025 Bibliotec. Todos os direitos reservados by Maiam Technologies</p>
    </footer>

</body>

</html>