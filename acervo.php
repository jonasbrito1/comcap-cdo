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

// Consulta para obter documentos
$sql = "SELECT * FROM documentos";
$result = $conn->query($sql);

if ($result === false) {
    echo "Erro ao consultar a base de dados: " . $conn->error;
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $site_title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
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

    html, body {
      height: 100%;
      margin: 0;
    }

    /* Estilização do título */
h2.text-center {
  font-size: 2rem;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: #659494ff; /* Cor personalizada para o título */
  transition: all 0.3s ease; /* Animação suave */
}

h2.text-center:hover {
  color: #74a386ff; /* Cor quando o mouse passar sobre o título */
  transform: scale(1.05); /* Leve aumento no tamanho */
}

    footer {
      margin-top: auto;
      background-color: #437865ff;
      color: white !important;
      padding: 2rem 0;
      text-align: center;
      border-top: 3px solid #ccc;
      box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
      position: relative;
      z-index: 100;
    }

    footer p {
      margin-bottom: 0.3rem;
      font-size: 1.1rem;
    }

    footer a {
      color: white;
      text-decoration: none;
    }

    footer a:hover {
      color: #ffc107;
    }

    footer p, footer span, footer div, footer h5 {
      color: white !important;
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

    .doc-info-container {
      width: 100%;
      max-width: 800px;
      margin: 0 auto 20px;
      padding: 20px;
      border: 1px solid #ddd;
      background-color: #fff;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .btn-custom {
      background-color: #659494ff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
    }

    .btn-custom:hover {
      background-color: #74a386ff;
    }

    .btn-custom-modal {
  background-color: #659494ff; /* Cor personalizada do botão */
  color: white; /* Cor do texto do botão */
  border: none;
}

.btn-custom-modal:hover {
  background-color: #74a386ff; /* Cor de hover do botão */
  color: white;
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

  <div class="container mt-5">
    <h2 class="text-center">Acervo de Documentos</h2>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $filePath = 'assets/docs/' . basename($row["caminho_arquivo"]);

            echo '<div class="doc-info-container">';
            echo '<h3>' . $row["titulo"] . ' (' . $row["ano"] . ')</h3>';
            echo '<p><strong>Autor(es):</strong> ' . $row["autores"] . '</p>';
            echo '<p><strong>Gênero:</strong> ' . $row["genero"] . '</p>';
            echo '<p><strong>Assuntos:</strong> ' . $row["assuntos"] . '</p>';
            echo '<p><strong>Coleção:</strong> ' . $row["colecao"] . '</p>';
            echo '<p><strong>Descrição:</strong> ' . $row["descricao"] . '</p>';

            // Botão para abrir em nova guia
            echo '<a href="' . $filePath . '" class="btn btn-secondary" target="_blank">Abrir documento</a>';

            // Botão para abrir no modal de visualização
            echo '<button class="btn btn-custom-modal ms-2" data-bs-toggle="modal" data-bs-target="#documentModal" onclick="openModal(\'' . $filePath . '\')">Pré Visualizar Documento</button>';

            echo '</div>';
        }
    } else {
        echo '<p>Nenhum documento encontrado.</p>';
    }
    $conn->close();
    ?>
  </div>

  <!-- Modal para Exibir Documento em Tela Cheia -->
  <div class="modal fade" id="documentModal" tabindex="-1" aria-labelledby="documentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <button class="btn btn-custom-modal ms-2" data-bs-toggle="modal" data-bs-target="#documentModal" onclick="openModal('<?php echo $filePath; ?>')">Visualizar Documento</button>
        </div>
        <div class="modal-body">
          <iframe id="docIframe" src="" width="100%" height="500px" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
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
    window.onload = function () {
      setTimeout(() => {
        document.getElementById('loading-screen').style.opacity = '0';
        setTimeout(() => {
          document.getElementById('loading-screen').style.visibility = 'hidden';
        }, 1000);
      }, 2000);
    };

    // Função para abrir o documento no modal
    function openModal(filePath) {
      const iframe = document.getElementById('docIframe');
      iframe.src = filePath;
    }
  </script>

</body>
</html>
