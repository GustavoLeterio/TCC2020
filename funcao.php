<?php
function placamaeAtualiza($id)
{
  include "conexao.php";
  $sql = "SELECT nome,valor,chipset,soquetes,usbinterno,usbtraseiro FROM placamae WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $d = $linha["nome"];
      $v = $linha["valor"];
      $soq = $linha["soquetes"];
      $chi = $linha["chipset"];
      $usbin = $linha["usbinterno"];
      $usbtr = $linha["usbtraseiro"];
      echo "<div class='descrição' style='font-family:CaviarDreams;'>Chipset -> $chi</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>MMR Ram -> $soq</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>USBs Internos -> $usbin</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>USBs Externos -> $usbtr</div>";
      echo "<div class='preço'>R$$v reais</div>";
    }
  }
}
function processadorAtualiza($id)
{
  include "conexao.php";
  $sql = "SELECT nome,clock,maxclock,nucleo,thread,soquete,valor FROM processadores WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $d = $linha["nome"];
      $c = $linha["clock"];
      $mx = $linha["maxclock"];
      $n = $linha["nucleo"];
      $t = $linha["thread"];
      $s = $linha["soquete"];
      $v = $linha["valor"];
      echo "<div class='descrição' style='font-family:CaviarDreams;'>Clock Normal -> $c</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>Max Clock -> $mx</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>N° de Núcleos -> $n</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>N° de Threads -> $t</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>Tipo de Soquete -> $s</div>";
      echo "<div class='preço'>R$$v reais</div>";
    }
  }
}
function memoriaramAtualiza($id)
{
  include "conexao.php";
  $sql = "SELECT nome,valor,capacidade,velocidade,tipo FROM memoriaram WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $c = $linha["capacidade"];
      $vel = $linha["velocidade"];
      $t = $linha["tipo"];
      $v = $linha["valor"];
      echo "<div class='descrição' style='font-family:CaviarDreams; font-size:20px;'>Capacidade -> $c</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams; font-size:20px;'>Velocidade -> $vel</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams; font-size:20px;'>Tipo -> $t</div>";
      echo "<div class='preço'>R$$v reais</div>";
    }
  }
}
function hdAtualiza($id)
{
  include "conexao.php";
  $sql = "SELECT tamanho,dimensões,Tecnologia,valor FROM armazenamento WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $t = $linha["tamanho"];
      $d = $linha["dimensões"];
      $te = $linha["Tecnologia"];
      $v = $linha["valor"];
      echo "<div class='descrição' style='font-family:CaviarDreams;' style='font-family:CaviarDreams;'>Armazenamento -> $t</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>Dimensão -> $d</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>Tecnologia -> $te</div>";
      echo "<div class='preço'>R$$v reais</div>";
    }
  }
}
function ssdAtualiza($id)
{
  include "conexao.php";
  $sql = "SELECT tamanho,gravação,leitura,Tecnologia,valor FROM armazenamento WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $t = $linha["tamanho"];
      $l = $linha["leitura"];
      $g = $linha["gravação"];
      $te = $linha["Tecnologia"];
      $v = $linha["valor"];
      echo "<div class='descrição' style='font-family:CaviarDreams;' style='font-family:CaviarDreams;'>Armazenamento -> $t</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>Velocidade de Leitura -> $l</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>Velocidade de Gravação ->$g</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>Tecnologia -> $te</div>";
      echo "<div class='preço'>R$$v reais</div>";
    }
  }
}

function placadevideoAtualiza($id)
{
  include "conexao.php";
  $sql = "SELECT nome,valor,minclock,maxclock,memoria,interface FROM placadevideo WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $d = $linha["nome"];
      $v = $linha["valor"];
      $minC = $linha["minclock"];
      $maxC = $linha["maxclock"];
      $m = $linha["memoria"];
      $i = $linha["interface"];
      if($maxC!="null"){
      echo "<div class='descrição'style='font-family:CaviarDreams;'>MinClock -> $minC</div>";
      echo "<div class='descrição'style='font-family:CaviarDreams;'>MaxClock -> $maxC</div>";
    }else{
      echo "<div class='descrição'style='font-family:CaviarDreams;'>Clock -> $minC</div>";
    }
      echo "<div class='descrição'style='font-family:CaviarDreams;'>Memória -> $m </div>";
      echo "<div class='descrição'style='font-family:CaviarDreams;'>Interface -> $i</div>";
      echo "<div class='preço'>R$$v reais</div>";
    }
  }
}
function fonteAtualiza($id)
{
  include "conexao.php";
  $sql = "SELECT nome, valor, potencia, potenciamax, frequencia, certificacao FROM fontes WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $d = $linha["nome"];
      $p = $linha["potencia"];
      $pMax = $linha["potenciamax"];
      $f = $linha["frequencia"];
      $c = $linha["certificacao"];
      $v = $linha["valor"];
      echo "<div class='descrição' style='font-family:CaviarDreams;'>Potencia -> $p</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>Potencia Máxima -> $pMax</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>Potencia Máxima -> $f</div>";
      echo "<div class='descrição' style='font-family:CaviarDreams;'>Frequencia -> $c</div>";
      echo "<div class='preço'>R$$v reais</div>";
    }
  }
}
function gabineteAtualiza($id)
{
  include "conexao.php";
  $sql = "SELECT nome,valor FROM gabinetes WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $d = $linha["nome"];
      $v = $linha["valor"];
      echo "<div class='descrição' style='font-family:CaviarDreams;'>$d</div>";
      echo "<div class='preço'>R$$v reais</div>";
    }
  }
}
function placamaeCalcula($id)
{
  include "conexao.php";
  $sql = "SELECT nome,valor FROM placamae WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $d1 = $linha["nome"];
      $a = $linha["valor"];
	    echo "<div class='nome'>$d1</div>";
    }
  }
}
function processadorCalcula($id)
{
  include "conexao.php";
  $sql = "SELECT nome,valor FROM processadores WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $d2 = $linha["nome"];
      $b = $linha["valor"];
	    echo "<div class='nome'>$d2</div>";
    }
  }
}
function memoriaramCalcula($id)
{
  include "conexao.php";
  $sql = "SELECT nome,valor FROM memoriaram WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $d3 = $linha["nome"];
      $c = $linha["valor"];
	    echo "<div class='nome'>$d3</div>";
    }
  }
}
function hdCalcula($id)
{
  include "conexao.php";
  $sql = "SELECT nome,valor FROM armazenamento WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $d4 = $linha["nome"];
      $d = $linha["valor"];
     echo "<div class='nome'>$d4</div>";
    }
  }
}
function ssdCalcula($id)
{
  include "conexao.php";
  $sql = "SELECT nome,valor FROM armazenamento WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $d5 = $linha["nome"];
      $e = $linha["valor"];
	    echo "<div class='nome'>$d5</div>";
    }
  }
}

function placadevideoCalcula($id)
{
  include "conexao.php";
  $sql = "SELECT nome,valor FROM placadevideo WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $d6 = $linha["nome"];
      $h = $linha["valor"];
	    echo "<div class='nome'>$d6</div>";
    }
  }
}
function fonteCalcula($id)
{
  include "conexao.php";
  $sql = "SELECT nome,valor FROM fontes WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $d7 = $linha["nome"];
      $i = $linha["valor"];
	    echo "<div class='nome'>$d7</div>";
    }
  }
}
function gabineteCalcula($id)
{
  include "conexao.php";
  $sql = "SELECT nome,valor FROM gabinetes WHERE id='$id'";
  $result = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($linha = mysqli_fetch_assoc($result)) {
      $d8 = $linha["nome"];
      $j = $linha["valor"];
	    echo "<div class='nome'>$d8</div>";
    }
  }
}

?>
