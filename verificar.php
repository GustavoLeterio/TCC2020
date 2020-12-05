<?php
include "conexao.php";
include "funcao.php";
function getValorFinal()
{
  include "conexao.php";
	$final=0;
  $placamae=$_POST['placamae'];
  $processadores=$_POST['processador'];
  $memoriaram=$_POST['memoriaram'];
  $hd=$_POST['hd'];
  $ssd=$_POST['ssd'];
  $placadevideo=$_POST['placadevideo'];
  $fonte=$_POST['fonte'];
  $gabinete=$_POST['gabinete'];
  $mul=$_POST['mul'];

    $contplacamae = "SELECT valor FROM placamae WHERE id='$placamae'";
    $resultplacamae = mysqli_query($conexao, $contplacamae);
      while ($linhaplacamae = mysqli_fetch_assoc($resultplacamae)) {
        $j = $linhaplacamae["valor"];
  		$final = $final + $j;
    }
  	  $contprocessadores = "SELECT valor FROM processadores WHERE id='$processadores'";
    $resultproc = mysqli_query($conexao, $contprocessadores);
      while ($linhaproc = mysqli_fetch_assoc($resultproc)) {
        $r = $linhaproc["valor"];
  		$final = $final + $r;
    }

    	  $contmemoriaram = "SELECT valor FROM memoriaram WHERE id='$memoriaram'";
    $resultmemoria = mysqli_query($conexao, $contmemoriaram);
      while ($linhamemoria = mysqli_fetch_assoc($resultmemoria)) {
        $s = $linhamemoria["valor"];
  		$final = $final + ($s*$mul);

    }
    	  $conthd = "SELECT valor FROM armazenamento WHERE id='$hd'";
    $resulthd = mysqli_query($conexao, $conthd);
      while ($linhahd = mysqli_fetch_assoc($resulthd)) {
        $h = $linhahd["valor"];
  		$final = $final + $h;
   }
    	  $contssd = "SELECT valor FROM armazenamento WHERE id='$ssd'";
    $resultssd = mysqli_query($conexao, $contssd);
      while ($linhassd = mysqli_fetch_assoc($resultssd)) {
        $g = $linhassd["valor"];
  		$final = $final + $g;
    }
     $contplacadevideo = "SELECT valor FROM placadevideo WHERE id='$placadevideo'";
    $resultplacadevideo = mysqli_query($conexao, $contplacadevideo);
      while ($linhaplacadevideo = mysqli_fetch_assoc($resultplacadevideo)) {
        $v = $linhaplacadevideo["valor"];
  		$final = $final + $v;
    }
      	  $contfonte = "SELECT valor FROM fontes WHERE id='$fonte'";
    $resultfonte = mysqli_query($conexao, $contfonte);
      while ($linhafonte = mysqli_fetch_assoc($resultfonte)) {
        $f = $linhafonte["valor"];
  		$final = $final + $f;
  	}


        	  $contgab = "SELECT valor FROM gabinetes WHERE id='$gabinete'";
    $resultgab = mysqli_query($conexao, $contgab);
      while ($linhagab = mysqli_fetch_assoc($resultgab)) {
        $g = $linhagab["valor"];
  		$final = $final + $g;
  	}
    echo "R$$final reais";
}

function printPlacamae(){
  $placamae=$_POST['placamae'];
  placamaeCalcula($id=$placamae);
}

function printProcessador(){
  $processadores=$_POST['processador'];
  processadorCalcula($id=$processadores);
}

function printMemoriaram(){
  $mul=$_POST['mul'];
  $memoriaram=$_POST['memoriaram'];
  echo "<div class='nome'>";
  echo "$mul";
  echo "X ";
  memoriaramCalcula($id=$memoriaram);
  echo "</div>";
}

function printHds(){
    $hd=$_POST['hd'];
  if ($hd ==1000){
    echo "<div class='nome'>Computador sem HD<div class='preço'>R$0 reais</div></div>";
  }else{
    hdCalcula($id=$hd);
  }
}

function printSsds(){
  $ssd=$_POST['ssd'];
  if ($ssd == 1000){
    echo "<div class='nome'>Computador sem SSD<div class='preço'>R$0 reais</div></div>";
  }else{
    ssdCalcula($id=$ssd);
  }
}

function printPlacasdevideo(){
  $placadevideo=$_POST['placadevideo'];
  if ($placadevideo == 1000){
    echo "<div class='nome'>Computador sem Placa de Vídeo<div class='preço'>R$0 reais</div></div>";
  }
  else {
  placadevideoCalcula($id=$placadevideo);
  }
}

function printFontes(){
  $fonte=$_POST['fonte'];
  fonteCalcula($id=$fonte);
}

function printGabinetes(){
  $gabinete=$_POST['gabinete'];
  if ($gabinete ==1000){
    echo "<div class='nome'>Computador sem Gabinete<div class='preço'>R$0 reais</div></div>";
  }
  else {
  	gabineteCalcula($id=$gabinete);
  }
}
?>
<html>

<head>
  <meta charset="utf-8">
  <title>Purple Wolf</title>
  <link rel="icon" type="image/jpg" href="logos/Logo do Titulo.png" />
  <link rel="stylesheet" href="verifica.css">

</head>
<script>
  window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  });
</script>

<body>
  <header>
    <a href="index.html" class="logo"><img src="logos/Logo com Nome.png" title="Volte a Página Inicial" alt="Página Inicial" width="300vw;"></a>
    <ul>
      <li><a href="montagem.php">Montagem</a></li>
      <li><a href="sugestoes.html">Sugestões</a></li>
      <li><a href="quemsomos.html">Quem Somos</a></li>
    </ul>
  </header>
  <section class="sec">
    <div class="frase">
      Aqui estão todas as peças que você escolheu!<br><br>Recomendamos a ferramenta de busca de preço ZOOM<br><br><a href="https://www.zoom.com.br/" target="_blank" class="zoom">https://www.zoom.com.br/</a>
    </div>
    <div class="box-body">
      <div class="box">
        <div class="content-wrapper">
          <h1 class="titulo" >Componente Selecionados</h1>
          <h1 class="setor" >Placa Mãe <?php printPlacamae(); ?></h1>
          <h1 class="setor" >Processador <?php printProcessador(); ?></h1>
          <h1 class="setor" >Memória(s) Ram <?php printMemoriaram(); ?></h1>
          <h1 class="setor" >HD <?php printHds(); ?></h1>
          <h1 class="setor" >SSD <?php printSsds(); ?></h1>
          <h1 class="setor" >Placas de Vídeo <?php printPlacasdevideo(); ?></h1>
          <h1 class="setor" >Fonte <?php printFontes(); ?></h1>
          <h1 class="setor" >Gabinete <?php printGabinetes(); ?></h1>
          <h1 class="setor" style="padding-bottom: 3vh; text-align:center;font-size:40px">Preço Médio Final <?php getValorFinal(); ?></h1>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <ul class="tcc">
      <h2>Projeto TCC<br>
        ETEC Jacinto Ferreira de Sá<br>
        SP, Ourinhos 2020</h2>
      </li>
    </ul>
    <ul class="redes">
      <li><a href="https://www.facebook.com/" target="_blank"><img src="logos/facebooklogo.png" width="100px">www.facebook.com/PurpleWolfOficial</a></li>
      <li><a href="https://www.instagram.com" target="_blank"><img src="logos/instagramlogo.png" width="100px">www.instagram.com/PurpleWolfOficial</a></a></li>
      <li><a href="https://www.twitter.com" target="_blank"><img src="logos/twitterlogo.png" width="100px">www.twitter.com/PurpleWolfOficial</a></li>
    </ul>
  </footer>
</body>

</html>
