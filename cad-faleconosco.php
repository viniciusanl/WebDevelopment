<?php
require_once("conexao.php");


$cd_nome = $_POST['txtnome'];
$cd_email = $_POST['txtemail'];
$cd_descricao = $_POST['txtdescricao'];

$id_faleconosco = null;


echo "<script>console.log('id_faleconosco = $id_faleconosco');</script>";


if($id_faleconosco == null){
    $sql = "INSERT INTO faleconosco (`nome`, `email`, `descricao`) VALUES 
    ('$cd_nome','$cd_email','$cd_descricao')";
	$operacao = 'Enviado';
}
else{
}

$query = mysqli_query($conn,$sql);

if ($query){
    echo "<script type='text/javascript'>alert('$operacao com sucesso!');window.location.href = 'entretenimento.php';</script>";
    
    }
    else{
        echo "<script type='text/javascript'>alert('Erro ao cadastrar...');window.location.href = 'entretenimento.php';</script>";
    }


?>