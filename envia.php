<?php
include "conexao.php";
include "funcao.php";

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

if ($hd ==1000 and $ssd ==1000){
	header ("location:montagem.php");
}

echo "As peças selecionadas foram:";
echo "<br>";
echo "<br>";
placamaeCalcula($id=$placamae);
echo "<br>";

processadorCalcula($id=$processadores);
echo "<br>";
memoriaramCalcula($id=$memoriaram);
echo "<br>";


if ($hd ==1000){
echo "Máquina sem HD";
echo "<br>";
echo "<br>";
}
else{
hdCalcula($id=$hd);
echo "<br>";
}
if ($ssd ==1000){
echo "Maquina sem SSD";
echo "<br>";
echo "<br>";
}
else{
ssdCalcula($id=$ssd);
echo "<br>";
}


if ($placadevideo ==1000){
	echo "Máquina sem Placa de Video";
	echo "<br>";
	echo "<br>";
}
else {
placadevideoCalcula($id=$placadevideo);
echo "<br>";
}


fonteCalcula($id=$fonte);
echo "<br>";

if ($gabinete ==1000){
	echo "Máquina sem Gabinete";
	echo "<br>";
}
else {
	gabineteCalcula($id=$gabinete);
		echo "<br>";
}
echo "<br>";


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
	
echo "O valor dessas peças será uma média de R$$final reais";

?>
