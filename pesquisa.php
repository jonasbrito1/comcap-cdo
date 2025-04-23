<?php
$site_title = "Comcap - CDO - Central de Documentação";
$logo_path = "assets/images/logo_comcap.png";
$logo_alt_text = "Comcap - CDO";

// Conexão com o banco de dados
$servername = "localhost";
$username = "root"; // Seu usuário MySQL
$password = ""; // Sua senha MySQL
$dbname = "comcap";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verifica se o formulário de upload foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['document']) && isset($_POST['description'])) {
    // Diretório para salvar o arquivo
    $upload_dir = 'assets/docs/';
    $file_tmp = $_FILES['document']['tmp_name'];
    $file_name = basename($_FILES['document']['name']);
    $target_file = $upload_dir . $file_name;

    // Move o arquivo para o diretório desejado
    if (move_uploaded_file($file_tmp, $target_file)) {
        // Outros dados do formulário
        $title = $_POST['title'];
        $year = $_POST['year'];
        $authors = $_POST['authors'];
        $genre = $_POST['genre'];
        $subjects = $_POST['subjects'];
        $collection = $_POST['collection'];
        $description = $_POST['description'];

        // Prepara a consulta para inserir os dados no banco de dados
        $sql = "INSERT INTO documentos (titulo, ano, autores, genero, assuntos, colecao, descricao, caminho_arquivo)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sissssss", $title, $year, $authors, $genre, $subjects, $collection, $description, $target_file);

        if ($stmt->execute()) {
            echo "Documento enviado com sucesso!";
        } else {
            echo "Erro ao enviar o documento: " . $conn->error;
        }
    } else {
        echo "Erro ao mover o arquivo para a pasta de uploads.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $site_title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet"/>
  <style>
    /* Splash Screen */
    #loading-screen {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.95);
      z-index: 9999;
      display: flex;
      justify-content: center;
      align-items: center;
      visibility: visible;
      opacity: 1;
      transition: opacity 1s ease-out;
    }

    #loading-screen img {
      max-width: 100px;
      animation: logo-zoom 1s ease-in-out forwards;
    }

    @keyframes logo-zoom {
      10% { transform: scale(0.5); opacity: 1; }
      50% { transform: scale(1); opacity: 1; }
      100% { transform: scale(1); opacity: 1; }
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      color: #333;
      overflow-x: hidden;
    }

    .navbar {
      background-color: #659494ff;
      padding: 1rem 2rem;
      box-shadow: 0 8px 10px rgba(0, 0, 0, 0.1);
    }

    footer {
      background-color: #437865ff; /* Nova cor de fundo do footer */
      color: white !important; /* Cor da fonte para branco, para contraste com o fundo */
      padding: 2rem 0;
      text-align: center;
      border-top: 3px solid #ccc;
      box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
      margin-top: auto;
    }

    footer p {
      font-size: 1.1rem;
    }

    footer a {
    color: white; /* Cor dos links no footer para branco */
    text-decoration: none;
    }

    footer a:hover {
      color: #ffc107; /* Cor de destaque quando passar o mouse sobre o link */
    }

    footer p, footer span, footer div, footer h5 {
   color: white !important;  /* Aplicando a cor branca para textos dentro do footer */
}
    .form-container {
      width: 80%;
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    .form-control {
      margin-bottom: 1rem;
    }
    .btn-custom {
      background-color: #659494ff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      margin-top: 10px;
    }
    .btn-custom:hover {
      background-color: #74a386ff;
    }
    .alert {
      margin-top: 20px;
    }
  </style>
</head>



<body>
  <!-- Splash Screen -->
<div id="loading-screen">
    <img src="assets/images/logo_comcap.png" alt="Logo Comcap" />
  </div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container d-flex align-items-center">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="<?php echo $logo_path; ?>" alt="<?php echo $logo_alt_text; ?>" class="img-fluid" style="max-height: 60px;">
        <span class="ms-3 text-uppercase fw-bold" style="font-size: 1.5rem;">CDO</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
          <li class="nav-item"><a class="nav-link" href="acervo.php">ACERVO</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato">CONTATO</a></li>
          <li class="nav-item"><a class="nav-link" href="pesquisa.php">PESQUISA</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="form-container">
      <h2 class="text-center">Pesquisa e Envio de Documentos</h2>
      <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="document">Selecionar Documento</label>
          <input type="file" class="form-control" id="document" name="document" required />
        </div>
        <div class="form-group">
          <label for="title">Título</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Título do Documento" required />
        </div>
        <div class="form-group">
          <label for="year">Ano</label>
          <input type="number" class="form-control" id="year" name="year" placeholder="Ano do Documento" required />
        </div>
        <div class="form-group">
          <label for="authors">Autor(es)</label>
          <input type="text" class="form-control" id="authors" name="authors" placeholder="Exemplo: Dexter, Whitney, P. D." required />
        </div>
        <div class="form-group">
          <label for="genre">Gênero</label>
          <input type="text" class="form-control" id="genre" name="genre" placeholder="Exemplo: Telegramas" required />
        </div>
        <div class="form-group">
          <label for="subjects">Assuntos</label>
          <input type="text" class="form-control" id="subjects" name="subjects" placeholder="Exemplo: Políticas Econômicas, Condições Sociais" required />
        </div>
        <div class="form-group">
          <label for="collection">Coleção</label>
          <input type="text" class="form-control" id="collection" name="collection" placeholder="Exemplo: History, Opening the Archives" required />
        </div>
        <div class="form-group">
          <label for="description">Descrição do Documento</label>
          <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn-custom">Enviar Documento</button>
      </form>
    </div>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['document']) && isset($_POST['description'])): ?>
      <div class="alert alert-success">
        Documento enviado com sucesso! Descrição: <?php echo htmlspecialchars($_POST['description']); ?>
      </div>
    <?php endif; ?>
  </div>

  <footer class="text-center text-lg-start mt-5">
    <div class="container p-4">
      <h5 id="contato" class="fw-bold">Contato</h5>
      <p>📞 Telefone: (44) 3011-4700</p>
      <p>✉️ E-mail: <a href="mailto:cdo-comcap@uem.br">cdo-comcap@uem.br</a></p>
      <p>🕘 Horário de atendimento: 07h40 às 11h40 e 13h30 às 17h30 (Segunda-feira à Sexta-feira)</p>
      <p>📍 Endereço: Bloco 07 - Universidade Estadual de Maringá (UEM)</p>
      <hr class="my-4">
      <p>&copy; 2025 Comcap - Central de Documentação | Todos os direitos reservados.</p>
      <p>Desenvolvido por <a href="https://linktr.ee/jonas_pacheco" target="_blank">Jonas Pacheco</a></p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Função para remover a Splash Screen após 2 segundos
    window.onload = function () {
      setTimeout(() => {
        document.getElementById('loading-screen').style.opacity = '0';
        setTimeout(() => {
          document.getElementById('loading-screen').style.visibility = 'hidden';
        }, 1000);
      }, 2000);
    };
  </script>     

</body>
</html>
