<?php
require_once("conexao.php");


$cd_nome = $_POST['txtnome'];
$cd_email = $_POST['txtemail'];
$cd_musica = $_POST['txtmusica'];

$entretenimento_id = null;
$entretenimento_id = $_POST['txtentretenimento_id'];

echo "<script>console.log('entretenimento_id = $entretenimento_id');</script>";


if($entretenimento_id == null){
    $sql = "INSERT INTO entretenimento (`nome`, `email`, `musica`) VALUES 
    ('$cd_nome','$cd_email','$cd_musica')";
	$operacao = 'Cadastrado';
}
else{
	$sql = "UPDATE entretenimento SET `nome`='$cd_nome',`email`='$cd_email',`musica`='$cd_musica'
    WHERE `entretenimento`.`entretenimento_id` =" . $entretenimento_id . ";";
	echo "<script>console.log('$sql');</script>";
	$operacao = 'Atualizado';
}

$query = mysqli_query($conn,$sql);

if ($query){
	echo "<script type='text/javascript'>alert('$operacao com sucesso!');window.location.href = 'entretenimento.php';</script>";
}else{
	echo "<script type='text/javascript'>alert('Erro ao cadastrar...');window.location.href = 'entretenimento.php';</script>";
}

?>