<?php
session_start();

include_once("conexao1.php");
if((isset($_POST['email'])) && (isset($_POST['senha']))) {	
	$usuario =mysql_real_escape_string($conn, $_POST['email']);
	$senha =mysql_real_escape_string($conn, $_POST['senha']);
    

    $sql = "SELECT * FROM clientes WHERE email= '$usuario' && senha = '$senha' LIMIT 1";
    $result = mysqli_query($conn, $sql);
	$resultado = mysqli_fetch_assoc($result);
	
	
if(empty($resultado)){
	$_SESSION['loginErro'] ="Usuário ou senha Inválido";
	header("Location: entrar1.html");
}elseif(isset($resultado)){
	 header("Location: index.html");
}else{	
	$_SESSION['loginErro'] ="Usuário ou senha Inválido";
	header("Location: entrar1.html");
}
}else{
	$_SESSION['loginErro'] ="Usuário ou senha Inválido";
	header("Location: entrar1.html");
}

?>