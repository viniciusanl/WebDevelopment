<?php
require_once("conexao.php");


$cd_nome = $_POST['txtnome'];
$cd_email = $_POST['txtemail'];
$cd_senha = $_POST['txtsenha'];

$cd_usuario = null;
$cd_usuario = $_POST['txtcd_usuario'];


echo "<script>console.log('cd_usuario = $cd_usuario');</script>";


if($cd_usuario == null){
    $sql = "INSERT INTO tb_usuario (`nm_usuario`, `ds_usuario`, `ds_senha`) VALUES 
    ('$cd_nome','$cd_email','$cd_senha')";
	$operacao = 'Cadastrado';
}
else{
}

$query = mysqli_query($conn,$sql);

if ($query){
    echo "<script type='text/javascript'>alert('$operacao com sucesso!');window.location.href = 'logar.php';</script>";
    
    }
    else{
        echo "<script type='text/javascript'>alert('Erro ao cadastrar...');window.location.href = 'cadastro.php';</script>";
    }


?>