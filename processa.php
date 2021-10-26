<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$RG = filter_input(INPUT_POST, 'RG', FILTER_SANITIZE_STRING);
$CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$ddd = filter_input(INPUT_POST, 'ddd', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$ender = filter_input(INPUT_POST, 'ender', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$pais= filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);



$result_usuario = "INSERT INTO clientes (nome,email,RG,CPF,sexo,ddd,cidade,telefone,endereco,estado,bairro,pais, login,senha) VALUES 
('$nome', '$email','$RG','$CPF','$sexo','$ddd','$cidade','$telefone','$ender','$estado','$bairro', '$pais', '$login', '$senha')";
//$result_usuario = "INSERT INTO clientes (nome, email,RG,CPF,sexo,ddd,telefone,endereco,cidade,estado,bairro,pais, login,senha) VALUES ('$nome', '$email','$RG','$CPF','$sexo','$ddd', '$telefone', 
// '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	
	?><script>alert("gravado");</script><?php
	
	header("Location: sign.html");
}else{
		header("Location: sign.html");
}
