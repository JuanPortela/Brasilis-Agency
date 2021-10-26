<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "cadastro";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		die("falha" . mysqli_connect_error());
	}else{
		//conexao realizada;
	}
?>