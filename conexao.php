<?php

	$nomedb = "bdsite";
	$usuario = "root";
	$senha = "";
	$local = "localhost";
	
	$conexao = mysqli_connect($local, $usuario, $senha, $nomedb)
	or die("Erro ao tentar conectar com o banco de dados - ".mysqli_error());

?>