<?php
include "conexao.php";
include "funcao.php";
?>
<html>

<head>
  <meta charset="utf-8">
  <title>Purple Wolf</title>
  <link rel="icon" type="image/jpg" href="logos/Logo do Titulo.png" />
  <link rel="stylesheet" href="ccsverifica.css">

</head>
<script>
  window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  });
</script>

<body>
  <header>
    <a href="index.html" class="logo"><img src="logos/Logo com Nome.png" alt="Página Inicial" width="300vw;"></a>
    <ul>
      <li><a href="montagem.html">Montagem</a></li>
      <li><a href="sugestoes.html">Sugestões</a></li>
      <li><a href="quemsomos.html">Quem Somos</a></li>
    </ul>
  </header>
  <section class="sec">
    <div class="frase">
      Aqui estão todas as peças que você escolheu!<br>Para auxiliá-lo somaremos o preço médio do seu computador e deixamos algumas URLs de site de pesquisa para cada componente.
    </div>
    <div class="box-body">
      <div class="box">
        <div class="content-wrapper">
          <h2 class="nome" id="nomePlacaMae">Placa Mãe<?php fonteAtualiza($id = 15); ?></h2>
          <div class="content">
            <div class="caracteristicas"  id="caracteristicasPlacamae"> Aqui está o coração do seu computador, onde todos os componentes serão conectados.
              Teremos também todas as entradas de conexão para periféricos como mouse, teclado, fone, monitor.<p class="selecioneoseu">Clique em Placas Mães e selecione a sua!</p></div>
          </div>
        </div>
      </div>
    </div>
      <a class="button" href="verificar.php">Enviar PC</a>
  </section>
  <footer class="footer">
    <ul class="tcc">
      <h2>Projeto TCC<br>
        ETEC Jacinto Ferreira de Sá<br>
        SP, Ourinhos 2020</h2>
      </li>
    </ul>
    <ul class="redes">
      <li><a href="www.facebook.com" target="_blank"><img src="logos/facebooklogo.png" width="100px">www.facebook.com/PurpleWolfOficial</a></li>
      <li><a href="www.instagram.com" target="_blank"><img src="logos/instagramlogo.png" width="100px">www.instagram.com/PurpleWolfOficial</a></a></li>
      <li><a href="www.twitter.com" target="_blank"><img src="logos/twitterlogo.png" width="100px">www.twitter.com/PurpleWolfOficial</a></li>
    </ul>
  </footer>
</body>

</html>
