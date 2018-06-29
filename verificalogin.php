<?php
//verificalogin.php
require_once("conexao.php");
$usuario = $_POST['txtusuario'];
$senha = $_POST['txtsenha'];

$sql = "SELECT * FROM tb_usuario WHERE ds_usuario = '$usuario' AND ds_Senha = '$senha'";

$result = mysqli_query($conn,$sql);

if ($result){
	$dados = mysqli_fetch_array($result);

	$nomeusu = $dados["nm_usuario"];
	session_start();

	$_SESSION['nomeusu'] = $nomeusu;
	$_SESSION['logado'] = true;
	$result->close();
	header('Location:entretenimento.php');
}else{
	header('Location:logar.php');
	echo "<script type='text/javascript'>alert('Usuário e/ou senha incorretos...');window.location.href = 'index.php';</script>";
}

?>