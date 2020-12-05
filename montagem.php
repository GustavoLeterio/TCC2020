
<?php
include "conexao.php";
include "funcao.php";
?>
<html>

<head>
  <meta charset="utf-8">
  <title>Purple Wolf</title>
  <link rel="stylesheet" href="/css/master.css">
  <link rel="icon" type="image/png" href="logos/Logo do Titulo.png" />
  <link rel="stylesheet" href="cssmontagem.css">
</head>
<script  type="text/javascript">
window.addEventListener("scroll", function() {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
});
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}
async function killAlert(){
  await sleep(500);
  document.getElementById("alert").style.display = "none";
}

function verifica(){
  if(placamaeUpdate() == 0){
    document.getElementById("alert").style.display = "inline";
    document.querySelector('#alert .alertText').innerHTML = 'Você esqueceu de selecionar sua Placa Mãe.<br><a class="erroHREF" href="#frase" onclick="killAlert()">Clique aqui e volte para "Placas Mãe"!</a>';
  }else if(processadorUpdate() == 0){
    document.getElementById("alert").style.display = "inline";
    document.querySelector('#alert .alertText').innerHTML = 'Você esqueceu de selecionar seu Processador.<br><a class="erroHREF" onclick="killAlert()" href="#selectPlacamae">Clique aqui e volte para "Processadores"!</a>';
  }else if(memoriaramUpdate() == 0){
    document.getElementById("alert").style.display = "inline";
    document.querySelector('#alert .alertText').innerHTML = 'Você esqueceu de selecionar sua(s) Memória Ram.<br><a class="erroHREF" onclick="killAlert()" href="#selectProcessador">Clique aqui e volte para "Memórias Ram"!</a>';
  }else if(hdUpdate() == 0 && ssdUpdate() == 0){
    document.getElementById("alert").style.display = "inline";
    document.querySelector('#alert .alertText').innerHTML = 'Você esqueceu de selecionar um HD ou SSD.<br><a class="erroHREF" onclick="killAlert()" href="#selectMemoriaRam">Clique aqui e volte para "HD/SSD"!</a>';
  }else if(fonteUpdate() == 0){
    document.getElementById("alert").style.display = "inline";
    document.querySelector('#alert .alertText').innerHTML = 'Você esqueceu de selecionar uma Fonte.<br><a class="erroHREF" onclick="killAlert()" href="#selectPlacadevideo">Clique aqui e volte para "Fontes"!</a>';
  }else{
    document.getElementById("envia").click();
  }
}

function placamaeUpdate() {
  var select = document.getElementById('placamae');
  var option = select.options[select.selectedIndex];
  switch (option.value) {
    case '0':
    return 0;
    break;
    case '1':
    document.getElementById('imagemPlacamae').src = "Fotos dos Componentes/PlacaMae/1.png";
    document.getElementById("caracteristicasPlacamae").innerHTML = "<?php placamaeAtualiza($id = 1); ?>";
    break;
    case '2':
    document.getElementById('imagemPlacamae').src = "Fotos dos Componentes/PlacaMae/2.png";
    document.getElementById("caracteristicasPlacamae").innerHTML = "<?php placamaeAtualiza($id = 2); ?>";
    break;
    case '3':
    document.getElementById('imagemPlacamae').src = "Fotos dos Componentes/PlacaMae/3.png";
    document.getElementById("caracteristicasPlacamae").innerHTML = "<?php placamaeAtualiza($id = 3); ?>";
    break;
    case '4':
    document.getElementById('imagemPlacamae').src = "Fotos dos Componentes/PlacaMae/4.png";
    document.getElementById("caracteristicasPlacamae").innerHTML = "<?php placamaeAtualiza($id = 4); ?>";
    break;
    case '5':
    document.getElementById('imagemPlacamae').src = "Fotos dos Componentes/PlacaMae/5.png";
    document.getElementById("caracteristicasPlacamae").innerHTML = "<?php placamaeAtualiza($id = 5); ?>";
    break;
  }
}

function processadorUpdate() {
  var select = document.getElementById('processador');
  var option = select.options[select.selectedIndex];
  switch (option.value) {
    case '0':
    return 0;
    break;
    case '1':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen3-3200g.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 1); ?>";
    break;
    case '2':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen3-3300x.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 2); ?>";
    break;
    case '3':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen5-2600x.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 3); ?>";
    break;
    case '4':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen5-3400g.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 4); ?>";
    break;
    case '5':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen5-3500x.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 5); ?>";
    break;
    case '6':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen7-3700x.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 6); ?>";
    break;
    case '7':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/ryzen9-3900x.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 7); ?>";
    break;
    case '8':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I3-9100f.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 8); ?>";
    break;
    case '9':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I3-10100.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 9); ?>";
    break;
    case '10':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I5-9400F.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 10); ?>";
    break;
    case '11':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I5-10400.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 11); ?>";
    break;
    case '12':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I7-9700K.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 12); ?>";
    break;
    case '13':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I7-10700.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 13); ?>";
    break;
    case '14':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/I9-9900K.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 14); ?>";
    break;
    case '15':
    document.getElementById('imagemProcessador').src = "Fotos dos Componentes/Processadores/i9-10900K.png";
    document.getElementById("caracteristicasProcessador").innerHTML = "<?php processadorAtualiza($id = 15); ?>";
    break;
  }
}

function memoriaramUpdate() {
  var select = document.getElementById('memoriaram');
  var option = select.options[select.selectedIndex];
  switch (option.value) {
    case '0':
    return 0;
    break;
    case '1':
    document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes/MemoriaRam/1-5.png";
    document.getElementById("caracteristicasMemoriaram").innerHTML = "<?php memoriaramAtualiza($id = 1); ?>";
    break;
    case '2':
    document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes/MemoriaRam/1-5.png";
    document.getElementById("caracteristicasMemoriaram").innerHTML = "<?php memoriaramAtualiza($id = 2); ?>";
    break;
    case '3':
    document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes/MemoriaRam/1-5.png";
    document.getElementById("caracteristicasMemoriaram").innerHTML = "<?php memoriaramAtualiza($id = 3); ?>";
    break;
    case '4':
    document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes/MemoriaRam/1-5.png";
    document.getElementById("caracteristicasMemoriaram").innerHTML = "<?php memoriaramAtualiza($id = 4); ?>";
    break;
    case '5':
    document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes/MemoriaRam/1-5.png";
    document.getElementById("caracteristicasMemoriaram").innerHTML = "<?php memoriaramAtualiza($id = 5); ?>";
    break;
    case '6':
    document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes/MemoriaRam/6.png";
    document.getElementById("caracteristicasMemoriaram").innerHTML = "<?php memoriaramAtualiza($id = 6); ?>";
    break;
    case '7':
    document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes/MemoriaRam/7.png";
    document.getElementById("caracteristicasMemoriaram").innerHTML = "<?php memoriaramAtualiza($id = 7); ?>";
    break;
    case '8':
    document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes/MemoriaRam/8.png";
    document.getElementById("caracteristicasMemoriaram").innerHTML = "<?php memoriaramAtualiza($id = 8); ?>";
    break;
    case '9':
    document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes/MemoriaRam/9.png";
    document.getElementById("caracteristicasMemoriaram").innerHTML = "<?php memoriaramAtualiza($id = 9); ?>";
    break;
    case '10':
    document.getElementById('imagemMemoriaram').src = "Fotos dos Componentes/MemoriaRam/10.png";
    document.getElementById("caracteristicasMemoriaram").innerHTML = "<?php memoriaramAtualiza($id = 10); ?>";
    break;
  }

}

function hdUpdate() {
  var select = document.getElementById('hd');
  var option = select.options[select.selectedIndex];
  switch (option.value) {
    case '1000':
    document.getElementById('imagemHd').src = "Fotos dos Componentes/X.png";
    document.getElementById("caracteristicasHd").innerHTML = "<div class='descrição' style='font-family:CaviarDreams;'>Você não selecionou nada.</div>";
    return 0;
    return 0;
    break;
    case '1':
    document.getElementById('imagemHd').src = "Fotos dos Componentes/Hds/1.png";
    document.getElementById("caracteristicasHd").innerHTML = "<?php hdAtualiza($id = 1); ?>";
    break;
    case '2':
    document.getElementById('imagemHd').src = "Fotos dos Componentes/Hds/2.png";
    document.getElementById("caracteristicasHd").innerHTML = "<?php hdAtualiza($id = 2); ?>";
    break;
    case '3':
    document.getElementById('imagemHd').src = "Fotos dos Componentes/Hds/3.png";
    document.getElementById("caracteristicasHd").innerHTML = "<?php hdAtualiza($id = 3); ?>";
    break;
    case '4':
    document.getElementById('imagemHd').src = "Fotos dos Componentes/Hds/4.png";
    document.getElementById("caracteristicasHd").innerHTML = "<?php hdAtualiza($id = 4); ?>";
    break;
  }
}

function ssdUpdate() {
  var select = document.getElementById('ssd');
  var option = select.options[select.selectedIndex];
  switch (option.value) {
    case '1000':
    document.getElementById('imagemSsd').src = "Fotos dos Componentes/X.png";
    document.getElementById("caracteristicasSsd").innerHTML = "<div class='descrição' style='font-family:CaviarDreams;'>Você não selecionou nada.</div>";
    return 0;
    return 0;
    break;
    case '5':
    document.getElementById('imagemSsd').src = "Fotos dos Componentes/SSDs/Kingston.png";
    document.getElementById("caracteristicasSsd").innerHTML = "<?php ssdAtualiza($id = 5); ?>";
    break;
    case '6':
    document.getElementById('imagemSsd').src = "Fotos dos Componentes/SSDs/Gibabyte.png";
    document.getElementById("caracteristicasSsd").innerHTML = "<?php ssdAtualiza($id = 6); ?>";
    break;
    case '7':
    document.getElementById('imagemSsd').src = "Fotos dos Componentes/SSDs/Kingston.png";
    document.getElementById("caracteristicasSsd").innerHTML = "<?php ssdAtualiza($id = 7); ?>";
    break;
    case '8':
    document.getElementById('imagemSsd').src = "Fotos dos Componentes/SSDs/crucialBX.png";
    document.getElementById("caracteristicasSsd").innerHTML = "<?php ssdAtualiza($id = 8); ?>";
    break;
    case '9':
    document.getElementById('imagemSsd').src = "Fotos dos Componentes/SSDs/sandisk.png";
    document.getElementById("caracteristicasSsd").innerHTML = "<?php ssdAtualiza($id = 9); ?>";
    break;
    case '10':
    document.getElementById('imagemSsd').src = "Fotos dos Componentes/SSDs/HP.png";
    document.getElementById("caracteristicasSsd").innerHTML = "<?php ssdAtualiza($id = 10); ?>";
    break;
    case '11':
    document.getElementById('imagemSsd').src = "Fotos dos Componentes/SSDs/crucialBX.png";
    document.getElementById("caracteristicasSsd").innerHTML = "<?php ssdAtualiza($id = 11); ?>";
    break;
    case '12':
    document.getElementById('imagemSsd').src = "Fotos dos Componentes/SSDs/WDGREEN.png";
    document.getElementById("caracteristicasSsd").innerHTML = "<?php ssdAtualiza($id = 12); ?>";
    break;
  }
}

function placadevideoUpdate() {
  var select = document.getElementById('placadevideo');
  var option = select.options[select.selectedIndex];
  switch (option.value) {
    case '1000':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/X.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<div class='descrição' style='font-family:CaviarDreams;'>Você não selecionou nada.</div>";
    return 0;
    return 0;
    break;
    case '1':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/rx550-2gb.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 1); ?>";
    break;
    case '2':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX550-4GB.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 2); ?>";
    break;
    case '3':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX570-4GB.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 3); ?>";
    break;
    case '4':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX570-8GB.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 4); ?>";
    break;
    case '5':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX580-8GB.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 5); ?>";
    break;
    case '6':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX5500XT-4GB.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 6); ?>";
    break;
    case '7':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX5500XT-8GB.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 7); ?>";
    break;
    case '8':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RX5700XT-8GB.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 8); ?>";
    break;
    case '9':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/gtx1050ti-4gb.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 9); ?>";
    break;
    case '10':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/gtx1650-4gb-oc.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 10); ?>";
    break;
    case '11':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/gtx1650-4gb-super OC.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 11); ?>";
    break;
    case '12':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/1660-super-6gb.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 12); ?>";
    break;
    case '13':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/GTX1660Ti-6gbfoto.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 13); ?>";
    break;
    case '14':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/RTX_2060_6GB_GDDR6.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 14); ?>";
    break;
    case '15':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/rxt2070-8gb.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 15); ?>";
    break;
    case '16':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/rtx2080-8gb super.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 16); ?>";
    break;
    case '17':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/rtx2080ti-11gb.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 17); ?>";
    break;
    case '18':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/18.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 18); ?>";
    break;
    case '19':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/19.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 19); ?>";
    break;
    case '20':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/20.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 20); ?>";
    break;
    case '21':
    document.getElementById('imagemPlacadevideo').src = "Fotos dos Componentes/PlacasdeVideo/21.png";
    document.getElementById("caracteristicasPlacadevideo").innerHTML = "<?php placadevideoAtualiza($id = 21); ?>";
    break;
  }
}

function fonteUpdate() {
  var select = document.getElementById('fonte');
  var option = select.options[select.selectedIndex];
  switch (option.value) {
    case '1000':
    return 0;
    break;
    case '1':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/1.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 1); ?>";
    break;
    case '2':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/2.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 2); ?>";
    break;
    case '3':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/3.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 3); ?>";
    break;
    case '4':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/4.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 4); ?>";
    break;
    case '5':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/5.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 5); ?>";
    break;
    case '6':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/6.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 6); ?>";
    break;
    case '7':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/7.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 7); ?>";
    break;
    case '8':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/8.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 8); ?>";
    break;
    case '9':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/9.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 9); ?>";
    break;
    case '10':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/10.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 10); ?>";
    break;
    case '11':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/11.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 11); ?>";
    break;
    case '12':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/12.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 12); ?>";
    break;
    case '13':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/13.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 13); ?>";
    break;
    case '14':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/14.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 14); ?>";
    break;
    case '15':
    document.getElementById('imagemFonte').src = "Fotos dos Componentes/Fonte/15.png";
    document.getElementById("caracteristicasFonte").innerHTML = "<?php fonteAtualiza($id = 15); ?>";
    break;

  }
}

function gabineteUpdate() {
  var select = document.getElementById('gabinete');
  var option = select.options[select.selectedIndex];
  switch (option.value) {
    case '1000':
    document.getElementById('imagemGabinete').src = "Fotos dos Componentes/X.png";
    document.getElementById("caracteristicasGabinete").innerHTML = "<div class='descrição' style='font-family:CaviarDreams;'>Você não selecionou nada.</div>";
    return 0;
    break;
    case '1':
    document.getElementById('imagemGabinete').src = "Fotos dos Componentes/gabinete/1.png";
    document.getElementById("caracteristicasGabinete").innerHTML = "<?php gabineteAtualiza($id = 1); ?>";
    break;
    case '2':
    document.getElementById('imagemGabinete').src = "Fotos dos Componentes/gabinete/2.png";
    document.getElementById("caracteristicasGabinete").innerHTML = "<?php gabineteAtualiza($id = 2); ?>";
    break;
    case '3':
    document.getElementById('imagemGabinete').src = "Fotos dos Componentes/gabinete/3.png";
    document.getElementById("caracteristicasGabinete").innerHTML = "<?php gabineteAtualiza($id = 3); ?>";
    break;
    case '4':
    document.getElementById('imagemGabinete').src = "Fotos dos Componentes/gabinete/4.png";
    document.getElementById("caracteristicasGabinete").innerHTML = "<?php gabineteAtualiza($id = 4); ?>";
    break;
    case '5':
    document.getElementById('imagemGabinete').src = "Fotos dos Componentes/gabinete/5.png";
    document.getElementById("caracteristicasGabinete").innerHTML = "<?php gabineteAtualiza($id = 5); ?>";
    break;
    case '6':
    document.getElementById('imagemGabinete').src = "Fotos dos Componentes/gabinete/6.png";
    document.getElementById("caracteristicasGabinete").innerHTML = "<?php gabineteAtualiza($id = 6); ?>";
    break;
    case '7':
    document.getElementById('imagemGabinete').src = "Fotos dos Componentes/gabinete/7.png";
    document.getElementById("caracteristicasGabinete").innerHTML = "<?php gabineteAtualiza($id = 7); ?>";
    break;
    case '8':
    document.getElementById('imagemGabinete').src = "Fotos dos Componentes/gabinete/8.png";
    document.getElementById("caracteristicasGabinete").innerHTML = "<?php gabineteAtualiza($id = 8); ?>";
    break;
    case '9':
    document.getElementById('imagemGabinete').src = "Fotos dos Componentes/gabinete/9.png";
    document.getElementById("caracteristicasGabinete").innerHTML = "<?php gabineteAtualiza($id = 9); ?>";
    break;
  }
}
</script>

<body>
  <header>
    <a href="index.html" class="logo"><img src="logos/Logo com Nome.png" title="Volte a Página Inicial" alt="Página Inicial" width="300vw;"></a>
    <ul>
      <li><a href="#">Montagem</a></li>
      <li><a href="sugestoes.html">Sugestões</a></li>
      <li><a href="quemsomos.html">Quem Somos</a></li>
    </ul>
  </header>
  <form id="form" action="verificar.php" method="post">
    <section class="sec">
      <div class="frase" id="frase">
        Conforme o tempo passa a tecnologia vem evoluindo muito, e muita coisa vai mudando e se tornando mais viável, melhor ou mais barata que outras,
        e em tantas mudanças é normal as pessoas tomarem escolhas erradas que vai causá-las dor de cabeça no
        futuro, por isso resolvemos criar a <br><span> PurP le WOlF</span> !
      </div>
      <div class="box-body">
        <div class="box">
          <div class="imgBx">
            <img id="imagemPlacamae" src="Fotos dos Componentes/interrogação.png">
          </div>
          <div class="content-wrapper">
            <div class="content">
              <div class="select" id="selectPlacamae">
                <select class="selectComponente" id="placamae" onChange="placamaeUpdate()" name="placamae">
                  <option value="0" disabled selected hidden><div class="select" >Placas Mães</div></option>
                  <option value="1">A320M (RYZEN AM4)</option>
                  <option value="2">B450M (RYZEN AM4)</option>
                  <option value="3">H310M (INTEL 9ª LGA 1151)</option>
                  <option value="4">B360M (INTEL 9ª LGA 1151)</option>
                  <option value="5">H410M (INTEL 10ª LGA 1200)</option>
                </select>
              </div>
              <div class="caracteristicas"  id="caracteristicasPlacamae"> Aqui está o coração do seu computador, onde todos os componentes serão conectados.
                Teremos também todas as entradas de conexão para periféricos como mouse, teclado, fone, monitor.<p class="selecioneoseu">Clique em Placas Mães e selecione a sua!</p></div>
              </div>
            </div>
          </div>
          <!-- FOTO 2-->
          <div class="box">
            <div class="imgBx">
              <img id="imagemProcessador" src="Fotos dos Componentes/interrogação.png">
            </div>
            <div class="content-wrapper">
              <div class="content">
                <div class="select" id="selectProcessador">
                  <select class="selectComponente" id="processador" onChange="processadorUpdate()" name="processador">
                    <option value="0" disabled selected hidden>Processadores</option>
                    <option disabled>Processadores Ryzen</option>
                    <option value="1">Ryzen 3 3200G</option>
                    <option value="2">Ryzen 3 3300X</option>
                    <option value="3">Ryzen 5 2600X</option>
                    <option value="4">Ryzen 5 3400G</option>
                    <option value="5">Ryzen 5 3500X</option>
                    <option value="6">Ryzen 7 3700X</option>
                    <option value="7">Ryzen 9 3900X</option>
                    <option disabled>Processadores Intel</option>
                    <option value="8">Intel I3 9100F</option>
                    <option value="9">Intel I3 10100</option>
                    <option value="10">Intel I5 9400F</option>
                    <option value="11">Intel I5 10400</option>
                    <option value="12">Intel I7 9700K</option>
                    <option value="13">Intel I7 10700</option>
                    <option value="14">Intel I9 9900K</option>
                    <option value="15">Intel I9 10900K</option>
                  </select>
                </div>
                <div class="caracteristicas" id="caracteristicasProcessador"> Aqui está a mente do seu computador, nesta pequena plaquinha será processado todo e qualquer tipo de dado. Quanto melhor o seu processador, maior a velocidade de processamento, tornando seu PC mais forte e rápido.<p class="selecioneoseu">Clique em Processadores e selecione o seu!</p></div>
              </div>
            </div>
          </div>
          <!-- FOTO 3-->
          <div class="box">
            <div class="imgBx">
              <img id="imagemMemoriaram" src="Fotos dos Componentes/interrogação.png">
            </div>
            <div class="content-wrapper">
              <div class="content">
                <div class="select" id="selectMemoriaRam">
                  <select class="selectComponente" id="memoriaram" onChange="memoriaramUpdate()" name="memoriaram">
                    <option value="0" disabled selected hidden>Memórias Ram</option>
                    <option value="1">HyperX Fury 4GB 2400MHz DDR4</option>
                    <option value="2">HyperX Fury 4GB 2666MHz DDR4</option>
                    <option value="3">HyperX Fury 8GB 2666MHz DDR4</option>
                    <option value="4">HyperX Fury 8GB 3000MHz DDR4</option>
                    <option value="5">HyperX Fury 16GB 2400MHz DDR4</option>
                    <option value="6">HyperX Fury 16GB 2666MHz DDR4</option>
                    <option value="7">Hikvision 8GB 3000MHz DDR4</option>
                    <option value="8">Crucial Ballistix 8GB DDR4</option>
                    <option value="9">Crucial Ballistix Sport Lt 16GB DDR4</option>
                    <option value="10">Patriot Viper RGB Series 16GB DDR4</option>
                  </select>
                </div>
                <div class="quantiadepeças">
                  <span id="demo"></span> Peça(s)<input type="range" min="1" max="4" value="1" class="slider" id="myRange" name="mul">
                </div>
                <div class="caracteristicas" id="caracteristicasMemoriaram">Na memória ram fica estocado pequenos dados que seu processador vai precisar pensar depois, quanto melhor esta peça, mais rapido o processador poderá lembrar o que deve pensar.
                  Algumas placas mães podem ter mais de duas peças desta.<p class="selecioneoseu">Clique em Memórias Ram e selecione a sua!</p></div>
                  <script type="text/javascript">
                    var slider = document.getElementById("myRange");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;
                    slider.oninput = function vrau() {
                      output.innerHTML = this.value;
                    }
                  </script>
                </div>
              </div>
            </div>
            <!-- FOTO 4-->
            <div class="box">
              <div class="imgBx">
                <img id="imagemHd" src="Fotos dos Componentes/interrogação.png">
              </div>
              <div class="content-wrapper">
                <div class="content">
                  <div class="select" id="selectHd">
                    <select class="selectComponente" id="hd" onChange="hdUpdate()" name="hd">
                      <option value="1000" selected hidden>HDs</option>
                      <option value="1">HD Seagate BarraCuda 1TB</option>
                      <option value="2">HD Seagate BarraCuda 2TB</option>
                      <option value="3">HD Western Digital Blue 1TB</option>
                      <option value="4">HD Western Digital Blue 2TB</option>
                      <option value="1000">Nenhum</option>
                    </select>
                  </div>
                  <div class="caracteristicas" id="caracteristicasHd"> Aqui ficará todos os arquivos que existem em seu computador assim como também programas, drivers e diversas outras coisas que necessitam de armazenamento.
                    A escolha do HD dependo muito do quanto o computador vai precisar guardar as coisas, se for muito é recomendado optar por um HD maior.<p class="selecioneoseu">Clique em HDs e selecione o seu!</p></div>
                  </div>
                </div>
              </div>
              <div class="box">
                <div class="imgBx">
                  <img id="imagemSsd" src="Fotos dos Componentes/interrogação.png">
                </div>
                <div class="content-wrapper">
                  <div class="content">
                    <div class="select" id="selectSSD">
                      <select class="selectComponente" id="ssd" name="ssd" onChange="ssdUpdate()">
                        <option value="1000" selected hidden>SSDs</option>
                        <option value="5">SSD Kingston A400 240G</option>
                        <option value="6">SSD Gibabyte 240G</option>
                        <option value="7">SD Kingston A400 480GB</option>
                        <option value="8">SSD Crucial BX500 480GB</option>
                        <option value="9">SSD SanDisk Plus 1TB</option>
                        <option value="10">SSD HP S700 1TB</option>
                        <option value="11">SSD Crucial BX500 1TB</option>
                        <option value="12">SSD WD Green 1TB</option>
                        <option value="1000">Nenhum</option>
                      </select>
                    </div>
                    <div class="caracteristicas" id="caracteristicasSsd"> O SSD é uma pequena unidade de memória como o HD, comparando os dois percebe-se que o SSD busca os arquivos mais rápído da sua unidade de memória,
                      assim tornando o carregamento de arquivos mais rápido. Pórem os SSDs são mais caros e possuem uma quantidade menor de espaço.<p class="selecioneoseu">Clique em SSDs e selecione a seu!</p></div>
                    </div>
                  </div>
                </div>
                <div class="box">
                  <div class="imgBx">
                    <img id="imagemPlacadevideo" src="Fotos dos Componentes/interrogação.png">
                  </div>
                  <div class="content-wrapper">
                    <div class="content">
                      <div class="select" id="selectPlacadevideo">
                        <select class="selectComponente" id="placadevideo" onChange="placadevideoUpdate()"name="placadevideo"id="ssd">
                          <option value="1000" selected hidden>Placas de Video</option>
                          <option disabled>Placas AMD</option>
                          <option value="1">RX 550 2GB</option>
                          <option value="2">RX 550 4GB</option>
                          <option value="3">RX 570 4GB</option>
                          <option value="4">RX 570 8GB</option>
                          <option value="5">RX 580 8GB</option>
                          <option value="6">RX 5500XT 4GB</option>
                          <option value="7">RX 5500XT 8GB</option>
                          <option value="8">RX 5700XT 8GB</option>
                          <option disabled>Placas Intel</option>
                          <option value="9">GTX 1050 Ti 4GB</option>
                          <option value="10">GTX 1650 4GB</option>
                          <option value="11">GTX 1650 4GB</option>
                          <option value="12">GTX 1660 Super 6GBB</option>
                          <option value="13">GTX 1660 Ti 6GB</option>
                          <option value="14">RTX 2060 6GB</option>
                          <option value="15">RTX 2070 Super EVO OC 8GB</option>
                          <option value="16">RTX 2080 Super KO Gaming 8GB</option>
                          <option value="17">RTX 2080 Ti 11GB</option>
                          <option disabled>NVIDIA Quadro -> Renderização</option>
                          <option value="18">PNY NVIDIA Quadro P400 2GB</option>
                          <option value="19">PNY NVIDIA Quadro P1000 4GB</option>
                          <option value="20">PNY NVIDIA Quadro P2000 5GB</option>
                          <option value="21">PNY NVIDIA Quadro RTX 4000 8GB</option>
                          <option value="1000">Nenhum</option>
                        </select>
                      </div>
                      <div class="caracteristicas" id="caracteristicasPlacadevideo"> Está peça é a favorita dos gamers e designers, ela é basicamente responsável por enviar o vídeo ao seu monitor.
                        Ela processa em tempo real tudo que esteja relacionado a vídeo, como luzes e shaders de um modelo 3D ou de um jogo. Quanto mais forte esta peça é, maior a qualidade de vídeo que você poderá solicitar.
                        <p class="selecioneoseu">Clique em Placas de Vídeo e selecione a sua!</p></div>
                      </div>
                    </div>
                  </div>
                  <!-- FOTO 6-->
                  <div class="box">
                    <div class="imgBx">
                      <img id="imagemFonte" src="Fotos dos Componentes/interrogação.png">
                    </div>
                    <div class="content-wrapper">
                      <div class="content">
                        <div class="select" id="selectFonte">
                          <select class="selectComponente"id="fonte" name="fonte" onChange="fonteUpdate()">
                            <option value="0" disabled selected hidden>Fontes</option>
                            <option disabled>450W</option>
                            <option value="1">EVGA 450W</option>
                            <option value="2">Corsair CV450 450W</option>
                            <option value="3">Corsair CX450 450W</option>
                            <option disabled>500W</option>
                            <option value="4">EVGA 500W</option>
                            <option value="5">Corsair VS500 500W</option>
                            <option value="6">Cooler Master MWE Bronze V2 500W</option>
                            <option disabled>600W</option>
                            <option value="7">EVGA 600W</option>
                            <option value="8">Cooler Master Elite V3 600W</option>
                            <option value="9">Corsair VS600 600W</option>
                            <option disabled>700W</option>
                            <option value="10">EVGA 700W</option>
                            <option value="11">Cooler Master MWE Bronze V2 700W</option>
                            <option value="12">Thermaltake 700W Smart Series</option>
                            <option disabled>750W</option>
                            <option value="13">Corsair 750W Modular HX750</option>
                            <option value="14">Gigabyte GP-P750GM 750W Full-Modular</option>
                            <option value="15">Cooler Master MWE 750 White V2 750W</option>
                          </select>
                        </div>
                        <div class="caracteristicas" id="caracteristicasFonte"> Esta grande peça será responsável por manter a energia ligada, e também proteger seu computador de uma carga muito alto ou uma queda muito rapída de energia.
                          Alguns computadores precisam de uma fonte com muitos Watts, alguns não precisam se preocupar tanto com isso.<p class="selecioneoseu">Clique em Fontes e selecione a sua!</p></div>
                        </div>
                      </div>
                    </div>
                    <div class="box">
                      <div class="imgBx">
                        <img id="imagemGabinete" src="Fotos dos Componentes/interrogação.png">
                      </div>
                      <div class="content-wrapper">
                        <div class="content">
                          <div class="select"id="selectGabinete">
                            <select class="selectComponente" id="gabinete" name="gabinete" onChange="gabineteUpdate()">
                              <option value="1000" selected hidden>Gabinetes</option>
                              <option value="1">Aerocool Cylon RGB LED</option>
                              <option value="2">Husky Avalanche</option>
                              <option value="3">Corsair Carbide SPEC-06 TG</option>
                              <option value="4">Corsair Carbide Series 175R</option>
                              <option value="5">Bluecase BG-026</option>
                              <option value="6">K-mex Dark Trooper</option>
                              <option value="7">K-mex Atlantis IV</option>
                              <option value="8">DeepCool Macube 310 WH</option>
                              <option value="9">Gamdias Talos M1B</option>
							  <option value="1000">Nenhum</option>
                            </select>
                          </div>
                          <div class="caracteristicas" id="caracteristicasGabinete"> Está é o container que manterá seu computador, nele não só estará a beleza externa do seu computador como também será responsável por manter seu pc frio,
                            a refrigeração do computador é provida por uma boa escolha de gabinete e cooler. Para jogos e programas pesados é um luxo que não pode ser dispensado.<p class="selecioneoseu">Clique em Gabinetes e selecione o seu!</p></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="alert" id="alert" style="display:none;">
                      <span class="closebtn" style="align-items: center;" onclick="this.parentElement.style.display='none';">&times;</span>
                      <div class="alertText" id="alertText">texto a ser alterado</div>
                    </div>
                    <a class="button" id="teste" onclick="verifica()">Enviar PC</a>
                    <button type="submit" id="envia" style="display:none;" value="Submit">Enviar PC</button>

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
