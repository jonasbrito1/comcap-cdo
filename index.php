<?php
$site_title = "Comcap - CDO - Central de Documentação";
$logo_path = "assets/images/logo_comcap.png";
$logo_alt_text = "Comcap - CDO";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $site_title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link href="assets/css/style.css" rel="stylesheet"/>
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

/* Seção Galeria de Imagens */
.carousel-container {
  position: relative;
  width: 100%; /* Responsividade do carrossel */
  overflow: hidden; /* Oculta qualquer conteúdo que ultrapasse o carrossel */
}

.carousel {
  display: flex;
  gap: 20px; /* Espaçamento entre as imagens */
  transition: transform 0.5s ease-in-out; /* Transição suave para o movimento */
}

.carousel img {
  width: 100%;  /* Cada imagem ocupa 100% da largura do carrossel */
  height: auto;  /* Ajusta a altura de forma proporcional */
  max-height: 350px;  /* Limita a altura máxima das imagens */
  object-fit: cover;  /* Garante que a imagem cubra o bloco sem distorcer */
  border-radius: 10px;  /* Arredonda as bordas das imagens */
  margin-right: 10px;  /* Espaçamento entre as imagens */
  opacity: 1; /* As imagens ficam visíveis o tempo todo */
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transição suave */
}

/* Animação das imagens do carrossel ao passar o mouse */
.carousel img:hover {
  transform: scale(1.05);  /* Aumenta o tamanho da imagem ao passar o mouse */
  box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15); /* Aplica uma sombra suave */
}

/* Ajuste para telas médias */
@media (max-width: 768px) {
  .carousel img {
    width: 48%;  /* Ajusta para telas médias */
    height: auto;  /* Ajuste proporcional */
    max-height: 180px;  /* Limita a altura das imagens */
  }
}

/* Ajuste para telas muito pequenas */
@media (max-width: 480px) {
  .carousel img {
    width: 80%;  /* Ajusta para ocupar mais largura em telas menores */
    height: auto;  /* Ajuste proporcional */
    max-height: 150px;  /* Limita a altura das imagens */
  }
}

/* Estilos para o botão de navegação do carrossel */
.carousel-button {
  background-color: rgba(255, 255, 255, 0.8); /* Fundo branco com opacidade */
  color: #007bff; /* Cor do ícone de navegação */
  padding: 1rem;
  border-radius: 50%; /* Botões circulares */
  border: 2px solid #007bff; /* Borda azul */
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 1.5rem; /* Tamanho do ícone */
  transition: all 0.3s ease; /* Transições suaves */
  z-index: 10;
}

.carousel-button:hover {
  background-color: #007bff; /* Fundo azul no hover */
  color: white; /* Ícone branco */
  transform: translateY(-50%) scale(1.1); /* Aumenta o botão no hover */
}

.prev {
  left: 10px; /* Posição do botão anterior */
}

.next {
  right: 10px; /* Posição do botão seguinte */
}

/* Ajuste de posição do carrossel para tela pequena */
@media (max-width: 768px) {
  .carousel-button {
    padding: 0.8rem; /* Reduz o tamanho do botão em telas pequenas */
    font-size: 1.2rem; /* Ajusta o tamanho do ícone */
  }
}

    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      color: #333;
      overflow-x: hidden;
    }

    .navbar {
      background-color: #007bff;
      padding: 1rem 2rem;
      box-shadow: 0 8px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand img {
      max-height: 60px;
      width: auto;
    }

    .navbar-nav .nav-link {
      color: white;
      font-size: 1.1rem;
      margin-left: 15px;
    }

    .navbar-nav .nav-link:hover {
      color: #ffc107;
    }

    footer {
      background-color: #437865ff; /* Nova cor de fundo do footer */
      color: white !important; /* Cor da fonte para branco, para contraste com o fundo */
      padding: 2rem 0;
      text-align: center;
      border-top: 3px solid #ccc;
      box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
    }

    footer p {
      margin-bottom: 0.3rem;
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



    .circle-img {
      width: 400px;
      height: 400px;
      border-radius: 50%;
      overflow: hidden;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #ffffff;
      margin: 0 auto;
      transition: transform 0.4s ease;
    }

    .circle-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.4s ease;
    }

    .circle-img:hover img {
      transform: scale(1.05);
    }

    /* Estilização do botão Lattes */
.btn-lattes {
  background-color: #72a385ff ; /* Cor de fundo */
  color: white; /* Cor do texto */
  padding: 0.5rem 1.2rem; /* Espaçamento interno */
  border-radius: 5px; /* Bordas arredondadas */
  text-decoration: none; /* Remove o sublinhado */
  display: inline-block; /* Ajusta o botão ao redor do texto */
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animação */
}

.btn-lattes:hover {
  transform: scale(1.05); /* Aumenta o tamanho do botão */
  box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15); /* Efeito de sombra ao passar o mouse */
}

/* Estilização para as imagens dos pesquisadores */
.img-reduzida {
  width: 70%;
  max-width: 150px;  /* Defina um tamanho máximo */
  height: auto;  /* Mantém a proporção da imagem */
  margin: 0 auto; /* Centraliza a imagem */
 
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Estilização das imagens dos Professores e Pesquisadores */
#pesquisadores-integrantes .img-reduzida {
  width: 200px;/* Largura fixa */
  height: 200px;/* Altura fixa */
  object-fit: cover;  /* As imagens irão cobrir completamente a área sem distorcer */
  margin: 0 auto; /* Centraliza a imagem */
  border-radius: 10px; /* Mantém as bordas arredondadas */
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transição suave */
  border-top-left-radius: 50%; /* Parte superior arredondada */
  border-top-right-radius: 50%; /* Parte superior arredondada */
  border-bottom-left-radius: 0; /* Parte inferior reta */
  border-bottom-right-radius: 0; /* Parte inferior reta */

}

#pesquisadores-integrantes .img-reduzida:hover {
  transform: scale(1.05); /* Aumenta um pouco o tamanho da imagem ao passar o mouse */
  box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15); /* Aplica uma sombra suave */
}

/* Ajustes para telas menores */
@media (max-width: 768px) {
  #pesquisadores-integrantes .img-reduzida {
    width: 120px; /* Reduz o tamanho das imagens para telas menores */
    height: 120px; /* Mantém a proporção da altura */
  }
}

@media (max-width: 480px) {
  #pesquisadores-integrantes .img-reduzida {
    width: 100px;  /* Ajusta ainda mais o tamanho máximo para telas pequenas */
    height: 100px; /* Mantém a proporção da altura */
  }
}



.img-reduzida:hover {
  transform: scale(1.1);
  box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
}

@media (max-width: 768px) {
  /* Para telas menores, reduzimos o tamanho das imagens */
  .img-reduzida {
    max-width: 120px;  /* Reduz o tamanho máximo */
    height: auto;  /* Ajusta automaticamente a altura */
  }
}

@media (max-width: 480px) {
  /* Para telas muito pequenas, ajustamos ainda mais o tamanho */
  .img-reduzida {
    max-width: 100px;  /* Reduz ainda mais o tamanho máximo */
    height: auto;  /* Mantém a proporção da imagem */
  }
}



@media (max-width: 768px) {
  #pesquisadores-integrantes h2 {
    flex-direction: column;
    text-align: center;
  }

  #pesquisadores-integrantes h2 img {
    max-height: 30px; /* Reduz o tamanho da logo no mobile */
  }

      .navbar-nav .nav-link {
        font-size: 1rem;
        margin-left: 10px;
      }

      .img-reduzida {
    width: 80%;  /* Ajuste para telas menores */
    max-width: 120px;  /* Limite o tamanho máximo para telas pequenas */
  }

  /* Estilos do Modal */
.modal-body {
  text-align: center;
}

.modal-body img {
  max-width: 100%;
  max-height: 80vh;  /* Garante que a imagem não ultrapasse 80% da altura da tela */
  object-fit: contain;  /* Faz com que a imagem seja redimensionada sem distorções */
}

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

  <!-- Conteúdo principal -->
  <div class="container my-5">
    <div class="row align-items-center">
      <div class="col-md-6 text-center" data-aos="fade-right">
        <div class="circle-img">
          <img src="assets/images/comcap1.png" alt="Central de Documentação">
        </div>
        <p class="text-center mt-3" style="font-size: 0.9rem; color: #6c757d; font-style: italic;">
          Bloco Principal - Central de Documentações
        </p>
        <p class="text-center" style="font-size: 0.9rem; color: #6c757d;">
          Foto: Vanessa Mayumi
        </p>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <h2>Sobre a Central de Documentação</h2>
        <p>A Central de Documentação da UEM, que fica sob a custódia do Complexo de Centrais Apoio à Pesquisa – COMCAP, 
          localizado na Universidade Estadual de Maringá-PR. Foi implantada com recursos do edital 03/2003 FINEP; por meio do edital 01/2007, 
          o subprojeto teve como referência, em sua construção, a listagem de alguns equipamentos do Arquivo Nacional. Tem como propósito o trabalho de
        digitalizar e conservar documentos históricos a fim de contribuir com o crescimento de pesquisas em diversas áreas dos saberes. Possui equipamentos  
        que fazem leitura e escaneiam microfilmes, mapas, jornais entre outros documentos até o tamanho A1. Ao longo dos anos, a Central ganhou notoriedade em 
        relação a qualidade do trabalho inigualável com relação a outros centros públicos e mesmo centros privados de digitalização no estado do Paraná (MATSUOKA, 2025).</p>
      </div>
    </div>
  </div>

  <!-- Seção Saiba Mais -->
  <div class="container my-5">
    <div class="row align-items-center">
      <div class="col-md-6" data-aos="fade-right">
        <h2>Sobre o projeto</h2>
        <p>Em 2009, a CDO digitalizou, em parceria com o Laboratório de Estudos do Tempo Presente (LabTempo-UEM) 104 rolos de microfilmes 
          de documentos sobre o Brasil, produzidos pela diplomacia estadunidense entre 1945 e 1959. O acervo organizado pelo National Archives 
          and Record Administration (NARA ) é composto pelas séries: M1492 - Records of the Department of State Relating to Internal Affairs of 
          Brazil, 1945-1949, 48 rolos; M1487, Records of the Department of State Relating to Internal Political and National Defense Affairs of 
          Brazil, 1950-1954, 14 rolos; M1489 -Records of the Department of State Relating to Internal Political and National Defense Affairs of 
          Brazil, 1950-1954, 34 rolos; e M1511, Records of the Department of State Relating to Internal Political and National Defense Affairs of 
          Brazil, 1955-1959, 8 rolos. Ressalta-se que o Nara ainda não digitalizou esses documentos e que a CDO foi a primeira a disponibilizá-los 
          virtualmente. Ainda em 2009, foi digitalizada a coleção quase completa do periódico de estudos militares “Em Guarda”, publicado nas 
          décadas de 1930-40. Outros acervos estão em fase de digitalização, dentre os quais a coleção de plantas e mapas do antigo Instituto de 
          Terras e Cartografia Fundiária do Estado do Paraná (ITCF), com 700 originais dos séculos XIX e XX.</p>

          <p>Nos dois últimos anos, desde 2018, em parceria com a prefeitura de Maringá-PR, foi digitalizado o jornal Folha do Norte do Paraná 
            (1962-1979). Em conjunto com a bolsista Vanessa M. Matsuoka e o técnico Edson M. da Silva da UEM e com o agente técnico Hagá Galvão e o
             historiador Elias Theodoro Mateus, do setor de Patrimônio da prefeitura de Maringá, o trabalho foi sendo realizado com devidos 
             cuidados e respeito com o arquivo. Atualmente esse material se encontra em processamento para posterior publicação no site da CDO.</p>
        <a href="acervo.php" class="btn btn-primary">Clique aqui para consultar o acervo</a>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <div class="row mb-3">
        <div class="col-md-6">
            <img src="assets/images/comcap2.png" alt="Acervo" class="img-fluid rounded img-reduzida" >
            <p class="text-center mt-3" style="font-size: 0.9rem; color: #6c757d; font-style: italic;">
             Historiador Elias Theodoro escaneando o jornal Folha do Norte do Paraná (1962-1979).
            </p>
          </div>
          <div class="col-md-6">
            <img src="assets/images/comcap3.png" alt="Acervo" class="img-fluid rounded img-reduzida">
            <p class="text-center mt-3" style="font-size: 0.9rem; color: #6c757d; font-style: italic;">
            Vanessa Mayumi ministrando curso sobre o que é documento histórico, cuidados e a importância da digitalização.    
          </p>
          </div>
        </div>
        <!-- Imagem com fade-in e responsiva abaixo das outras -->
        <div class="row">
          <div class="col-md-12" data-aos="fade-in">
            <img src="assets/images/comcap2.jpeg" alt="Acervo" class="img-fluid rounded img-reduzida">
            <p class="text-center mt-3" style="font-size: 0.9rem; color: #6c757d; font-style: italic;">
             Bloco Principal - Central de Documentações
            </p>
            <p class="text-center" style="font-size: 0.9rem; color: #6c757d;">
              Fotos: Vanessa Mayumi
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Seção Galeria de Imagens -->
<section class="section-with-carousel container my-5" id="galeria-imagens">
  <h2 class="text-center mb-4" data-aos="fade-up" id="pesquisadores-integrantes" style="background: linear-gradient(90deg, #659494ff, #74a386ff); color: white; padding: 1rem; border-radius: 5px; display: flex; justify-content: space-between; align-items: center;">
    Bloco - Central de Documentação
    <img src="assets/images/logo_comcap.png" alt="Logo Comcap" style="max-height: 60px; transition: transform 0.3s ease;">
  </h2>     
  <div class="carousel-container">
    <button class="carousel-button prev"><</button>
    <div class="carousel">
      <img src="assets/images/cdo1.jpeg" alt="Imagem 1" class="gallery-image">
      <img src="assets/images/cdo2.jpeg" alt="Imagem 2" class="gallery-image">
      <img src="assets/images/cdo3.jpeg" alt="Imagem 3" class="gallery-image">
      <img src="assets/images/cdo4.jpeg" alt="Imagem 4" class="gallery-image">
      <img src="assets/images/cdo5.png" alt="Imagem 5" class="gallery-image">
      <img src="assets/images/cdo6.png" alt="Imagem 6" class="gallery-image">
      <img src="assets/images/cdo7.png" alt="Imagem 7" class="gallery-image">
      <img src="assets/images/cdo8.png" alt="Imagem 8" class="gallery-image">
    </div>
    <button class="carousel-button next">></button>
  </div>
</section>

<!-- Modal para Exibir Imagem em Tela Cheia -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="modalImage" src="" alt="Imagem Ampliada" class="img-fluid">
      </div>
    </div>
  </div>
</div>



 <!-- Seção Professores reponsáveis -->
 <div class="container my-5" id="pesquisadores-integrantes" data-aos="fade-in">
 <h2 class="text-center mb-4" data-aos="fade-up" id="pesquisadores-integrantes" style="background: linear-gradient(90deg, #659494ff, #74a386ff); color: white; padding: 1rem; border-radius: 5px; display: flex; justify-content: space-between; align-items: center;">
 Professores responsáveis pela CDO
  <img src="assets/images/logo_comcap.png" alt="Logo Comcap" style="max-height: 60px; transition: transform 0.3s ease;">
  </h2>    
  <div class="row">
      <!-- Professor Doutor Sidnei J. Munhoz -->
      <div class="col-md-12 mb-4 d-flex flex-column flex-md-row align-items-center" data-aos="fade-in">
        <div class="col-md-3">
          <img src="assets/images/sidnei_munhoz.png" alt="Sidnei J. Munhoz" class="img-fluid img-reduzida">
        </div>
        <div class="col-md-9">
          <h4>Professor Doutor Sidnei J. Munhoz</h4>
          <p>Possui graduação em História pela Universidade Estadual Paulista Júlio de Mesquita Filho (1982), mestrado em História Social do Trabalho pela Universidade Estadual de Campinas (1990), doutorado em História Econômica pela Universidade de São Paulo (1997), Pós-doutorado pela UFRJ (2001-2002) e pela Brown University (2015-2016). Foi Visiting Scholar do Watson Institute for International and Public Affairs da Brown University (2015-2016).</p>
          <a href="http://lattes.cnpq.br/6366314107537617" target="_blank" class="btn btn-lattes">Link para Lattes</a>
        </div>
      </div>

      <!-- Professor Doutora Maria Cristina Gomes Machado -->
      <div class="col-md-12 mb-4 d-flex flex-column flex-md-row align-items-center" data-aos="fade-in">
        <div class="col-md-3">
          <img src="assets/images/maria_cristina.png" alt="Maria Cristina Gomes Machado" class="img-fluid img-reduzida">
        </div>
        <div class="col-md-9">
          <h4>Professora Doutora Maria Cristina Gomes Machado</h4>
          <p>Doutora em Filosofia e História da Educação (1999), pela Universidade Estadual de Campinas - UNICAMP. Possui Graduação em Pedagogia (1987) e Mestrado em Fundamentos da Educação (1993), ambos pela Universidade Estadual de Maringá - UEM. Realizou estágio de Pós-doutorado na área de Educação (2010), na Universidade Federal de Minas Gerais - UFMG.</p>
          <a href="http://lattes.cnpq.br/3874168724032825" target="_blank" class="btn btn-lattes">Link para Lattes</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Seção Pesquisadores Instegrantes -->
 <div class="container my-5" id="pesquisadores-integrantes" data-aos="fade-in">
 <h2 class="text-center mb-4"  id="pesquisadores-integrantes" style="background: linear-gradient(90deg, #72a385ff, #88b570ff); color: white; padding: 1rem; border-radius: 5px; display: flex; justify-content: space-between; align-items: center;">
 Pesquisadores Integrantes
  <img src="assets/images/logo_comcap.png" alt="Logo Comcap" style="max-height: 60px; transition: transform 0.3s ease;">
  </h2>    
  <div class="row">
      <!-- Professor Doutor André Porto Ancona Lopez -->
      <div class="col-md-12 mb-4 d-flex flex-column flex-md-row align-items-center" data-aos="fade-in">
        <div class="col-md-3">
          <img src="assets/images/andre.png" alt="Professor Doutor André Porto Ancona Lopez" class="img-fluid img-reduzida">
        </div>
        <div class="col-md-9">
          <h4>Professor Doutor André Porto Ancona Lopez</h4>
          <p>Concluiu seu estágio pós-doutoral na Universidad de Buenos Aires em março de 2021, pesquisando os grupos de pesquisa de fotodocumentação. É doutor (2001) e mestre em História Social (1994), licenciado em História (1992), especialista em Organização de Arquivos (1990) e bacharel em História (1989); todos os títulos obtidos na Universidade de São Paulo (USP). Desde 2005 é professor da Universidade de Brasília (UnB), onde se dedica à graduação em Arquivologia, Foi vinculado do Programa de Pós-graduação em Ciência da Informação da UnB de ago/2008 a dez/2024, Atualmente participa do Programa de Pós-graduação em História da Universidade Federal de Goiás. Atuou como professor visitante na Espanha (UCM), Colômbia (UdeA, ITM e ULaSalle),Argentina (UNLu e UnTreF) e Uruguai (UdelaR). Nos anos 2000 foi professor convidado do curso de especialização em Arquivos do IEB/ECA-USP. Entre 1994 e 2004 foi professor junto ao departamento de História da Universidade Estadual de Maringá.</p>
          <a href="http://lattes.cnpq.br/2683882609392455" target="_blank" class="btn btn-lattes">Link para Lattes</a>
        </div>
      </div>

      <!-- Professor Doutor James Naylor Green -->
      <div class="col-md-12 mb-4 d-flex flex-column flex-md-row align-items-center" data-aos="fade-in">
        <div class="col-md-3">
          <img src="assets/images/james.png" alt="Professor Doutor James Naylor Green" class="img-fluid img-reduzida">
        </div>
        <div class="col-md-9">
          <h4>Professor Doutor James Naylor Green</h4>
          <p>Atualmente é Carlos Manuel de Céspedes Professor of Latin American History na Brown University e professor visitante na Hebrew University de Jerusalem, Israel. Fez graduação em Ciência Política no Earlham College, Indiana (1972), e doutorado na University of California, Los Angeles (1996). Tem experiência na área de História, com ênfase em História do Brasil República, atuando principalmente nos seguintes temas: ditadura militar, América Latina, Brasil, direitos humanos e homossexualidade. </p>
          <a href="http://lattes.cnpq.br/7712176166454272" target="_blank" class="btn btn-lattes">Link para Lattes</a>
        </div>
      </div>
      <!-- Professor Doutor Alexandre Busko Valim -->
      <div class="col-md-12 mb-4 d-flex flex-column flex-md-row align-items-center" data-aos="fade-in">
        <div class="col-md-3">
          <img src="assets/images/alexandre.png" alt="Professor Doutor Alexandre Busko Valim" class="img-fluid img-reduzida">
        </div>
        <div class="col-md-9">
          <h4>Professor Doutor Alexandre Busko Valim</h4>
          <p>Possui graduação em História pela Universidade Estadual de Maringá (1998-2001) e Doutorado pela Universidade Federal Fluminense (2002-2006). Possui Pós-Doutorado pela School of Journalism and Communication da Carleton University em Ottawa, ON, Canadá (2008-2009). Foi Visiting Scholar no College of Arts Science da New York University em Nova York, NY, Estados Unidos (2015-2016), e no Department of History da Harvard University (2020-2021).Avaliador de Cursos de Graduação (área de História) do Ensino Superior do Sistema Nacional de Avaliação da Educação Superior - BASis, INEP/MEC (2006-2022). Editor chefe da Revista Esboços - Histórias em Contextos Globais - Qualis A2 (2015-2018; 2024-atual).Professor Associado IV do Departamento de História da Universidade Federal de Santa Catarina - UFSC, onde leciona e orienta no Curso de Graduação de Cinema, no Curso de Graduação de História e no Programa de Pós-Graduação de História.  </p>
          <a href="http://lattes.cnpq.br/2389703104377365" target="_blank" class="btn btn-lattes">Link para Lattes</a>
        </div>
      </div>

      <!-- Professor Doutor Francisco Ferrazm -->
      <div class="col-md-12 mb-4 d-flex flex-column flex-md-row align-items-center" data-aos="fade-in">
        <div class="col-md-3">
          <img src="assets/images/francisco.png" alt="Professor Doutor Francisco Ferraz" class="img-fluid img-reduzida">
        </div>
        <div class="col-md-9">
          <h4>Professor Doutor Francisco Ferraz</h4>
          <p>Possui graduação em História pela Universidade Estadual Paulista Júlio de Mesquita Filho (1988), Mestrado em História pela Universidade Estadual Paulista Júlio de Mesquita Filho (1994) e Doutorado em História Social pela Universidade de São Paulo (2003), onde pesquisou a reintegração social e a memória coletiva dos veteranos brasileiros da Segunda Guerra Mundial. É Professor Associado do Departamento de História. Foi Coordenador do Programa de Mestrado em História Social, na Universidade Estadual de Londrina (2006-2008; 2013-2016).  </p>
          <a href="http://lattes.cnpq.br/5609472501010800" target="_blank" class="btn btn-lattes">Link para Lattes</a>
        </div>
      </div>

      <!-- Professor Doutor Pedro Carvalho de Oliveira -->
      <div class="col-md-12 mb-4 d-flex flex-column flex-md-row align-items-center" data-aos="fade-in">
        <div class="col-md-3">
          <img src="assets/images/pedro.png" alt="Professor Doutor Pedro Carvalho de Oliveira" class="img-fluid img-reduzida">
        </div>
        <div class="col-md-9">
          <h4>Professor Doutor Pedro Carvalho de Oliveira</h4>
          <p>Professor Adjunto de História Moderna e Contemporânea do Colegiado de História da Universidade Federal do Vale do São Francisco (Univasf - Campus Senhor do Bonfim/BA). Doutor em História pela Universidade Estadual de Maringá (2020). Mestre em História pela Universidade Estadual de Maringá (2017). Graduado em História pela Universidade Federal de Sergipe (2013). Integra o Laboratório de Estudos do Tempo Presente (LabTempo-UEM) e o Grupo de Pesquisa Política, Estado e América Latina (GPPEAL-UEM). É colaborador do Opening the Archives Project (UEM-Brown University) e do Grupo de Estudos do Tempo Presente (GET/CNPq/UFS).  </p>
          <a href="http://lattes.cnpq.br/5308202464493853" target="_blank" class="btn btn-lattes">Link para Lattes</a>
        </div>
      </div>

      <!-- Professora Doutora Natália Abreu Damasceno -->
      <div class="col-md-12 mb-4 d-flex flex-column flex-md-row align-items-center" data-aos="fade-in">
        <div class="col-md-3">
          <img src="assets/images/natalia.png" alt="Professora Doutora Natália Abreu Damasceno" class="img-fluid img-reduzida">
        </div>
        <div class="col-md-9">
          <h4>Professora Doutora Natália Abreu Damasceno</h4>
          <p>Doutora em História pela Universidade Federal de Santa Catarina (PPGH-UFSC/CAPES). Mestre em História pela Universidade Estadual de Maringá (PPH-UEM/CAPES). Integrante do Laboratório de Estudos do Tempo Presente (LabTempo) e pesquisadora membro da Rede de Estudos de História dos Estados Unidos (CNPq). Graduada em História pela Universidade Federal de Sergipe. Temas de Interesse: História Contemporânea, História do Tempo Presente, História Política, História e Mídia, Guerra Fria, Século XX, Relações EUA-América Latina.  </p>
          <a href="http://lattes.cnpq.br/8972795630011253" target="_blank" class="btn btn-lattes">Link para Lattes</a>
        </div>
      </div>

      <!-- Professor Doutor José Victor de Lara -->
      <div class="col-md-12 mb-4 d-flex flex-column flex-md-row align-items-center" data-aos="fade-in">
        <div class="col-md-3">
          <img src="assets/images/natalia.png" alt="Professor Doutor José Victor de Lara" class="img-fluid img-reduzida">
        </div>
        <div class="col-md-9">
          <h4>Professor Doutor José Victor de Lara</h4>
          <p>Doutor em História pela Universidade Estadual de Maringá (UEM), com estágio de pesquisa sanduíche na Brown University (EUA). Atuou como professor temporário de Teoria e Filosofia da História e História do Brasil na Universidade Estadual do Paraná (Unespar), campus Paranavaí (2020-2023). É graduado (2016), mestre (2019) e doutor (2024) em História pela UEM. Dedica-se ao estudo das relações entre Brasil e Estados Unidos na década de 1960, com interesses abrangendo História das Relações Internacionais, História do Brasil República e Teoria e Filosofia da História. É membro do Laboratório de Estudos do Tempo Presente (UEM) e integra o Opening the Archives Project (Brown University-UEM), contribuindo em atividades técnicas, pesquisas e publicações de documentos diplomáticos sobre as relações Brasil-EUA no século XX. Também atuou como bolsista técnico da Fundação Araucária no Complexo de Centrais de Apoio à Pesquisa (Comcap), na Central de Documentação (CDO) da UEM (2019-2020).  </p>
        </div>
      </div>

      <!-- Mestre Vanessa Mayumi Matsuoka -->
      <div class="col-md-12 mb-4 d-flex flex-column flex-md-row align-items-center" data-aos="fade-in">
        <div class="col-md-3">
          <img src="assets/images/natalia.png" alt="Mestre Vanessa Mayumi Matsuoka" class="img-fluid img-reduzida">
        </div>
        <div class="col-md-9">
          <h4>Mestre Vanessa Mayumi Matsuoka</h4>
          <p>Licenciada em História pela Universidade Estadual de Maringá com especialização em Antropologia Brasileira e História Social e Contemporânea pela Faculdade Única de Ipatinga. Possui interesse em História das Mulheres, relação entre História e Gênero, História Pública e História do Japão. Mestre em História Pública pela Universidade Estadual do Paraná como pesquisadora com ênfase em História Pública dos Movimentos das Mulheres no Japão do início do século XX. Atua também como bolsista técnica da Central de Documentação do Complexo de Apoio à Pesquisa (CDO-COMCAP), Pertencente a Universidade Estadual de Maringá.  </p>
        </div>
      </div>

       <!-- Técnico efetivo do CCH  -->
       <div class="col-md-12 mb-4 d-flex flex-column flex-md-row align-items-center" data-aos="fade-in">
        <div class="col-md-3">
          <img src="assets/images/natalia.png" alt="Mestre Vanessa Mayumi Matsuoka" class="img-fluid img-reduzida">
        </div>
        <div class="col-md-9">
          <h4>Edson Marques da Silva</h4>
          <p>Técnico efetivo do CCH  </p>
        </div>
      </div>


    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center text-lg-start mt-5" >
      <div class="container p-4" data-aos="fade-in" data-aos="fade-up">
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


<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1000, easing: 'ease-in-out' });

  window.onload = function () {
    setTimeout(() => {
      document.getElementById('loading-screen').style.opacity = '0';
      setTimeout(() => {
        document.getElementById('loading-screen').style.visibility = 'hidden';
      }, 1000);
    }, 2000);
  };

  document.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', function (e) {
      const href = link.getAttribute("href");

      if (
        link.getAttribute("target") === "_blank" ||
        link.hasAttribute("data-bs-toggle") ||
        href.startsWith("#")
      ) return;

      e.preventDefault();
      const splash = document.getElementById('loading-screen');
      splash.style.visibility = 'visible';
      splash.style.opacity = '1';

      setTimeout(() => {
        window.location.href = href;
      }, 1000);
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
  const prevButton = document.querySelector('.prev');
  const nextButton = document.querySelector('.next');
  const carousel = document.querySelector('.carousel');
  const images = document.querySelectorAll('.carousel img'); // Seleciona todas as imagens
  let currentIndex = 0; // Índice inicial da imagem
  const totalImages = images.length; // Total de imagens

  // Função para mover o carrossel
  function updateCarousel() {
    // Desloca o carrossel para a imagem correta, usando translateX com a largura das imagens
    const offset = -currentIndex * 100;  // Deslocamento de 100% por imagem
    carousel.style.transition = "transform 0.5s ease-in-out"; // Garantir que a transição seja suave
    carousel.style.transform = `translateX(${offset}%)`; // Aplica o deslocamento no carrossel

    // Atualiza o estado dos botões
    if (currentIndex === totalImages - 1) {
      nextButton.style.visibility = 'hidden';  // Torna o botão "Próximo" invisível se for a última imagem
    } else {
      nextButton.style.visibility = 'visible';  // Torna o botão "Próximo" visível se não for a última imagem
    }

    if (currentIndex === 0) {
      prevButton.disabled = true;  // Desativa o botão "Anterior" se for a primeira imagem
    } else {
      prevButton.disabled = false;  // Reativa o botão "Anterior"
    }
  }

  // Navegar para a imagem anterior
  prevButton.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;  // Decrementa o índice para ir para a imagem anterior
      updateCarousel();
    }
  });

  // Navegar para a próxima imagem
  nextButton.addEventListener('click', () => {
    if (currentIndex < totalImages - 1) {
      currentIndex++;  // Incrementa o índice para ir para a imagem seguinte
      updateCarousel();
    }
  });

  // Inicializa o carrossel, mostrando a primeira imagem
  updateCarousel();
});


document.addEventListener('DOMContentLoaded', function () {
  // Seleciona todas as imagens da galeria
  const galleryImages = document.querySelectorAll('.gallery-image');

  // Adiciona um evento de clique a cada imagem
  galleryImages.forEach(image => {
    image.addEventListener('click', function() {
      // Obtém o URL da imagem clicada
      const imageUrl = this.src;
      
      // Define a imagem no modal
      const modalImage = document.getElementById('modalImage');
      modalImage.src = imageUrl;

      // Exibe o modal
      const modal = new bootstrap.Modal(document.getElementById('imageModal'));
      modal.show();
    });
  });
});


</script>

</body>
</html>