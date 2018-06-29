<?php

$operacao = $_GET['operacao'];

echo "<script>console.log('Operação: ' + " . $operacao . ");</script>";


$entretenimento_id = null;
$cd_nome = null;
$cd_email = null;
$cd_musica = null;


switch ($operacao) {
 	case 1: //Novo registro

 	break;

 	case 2: //Editar registro
 	require_once("conexao.php");
 	if (!$conn->connect_error){

 		$id = $_GET['id'];
 		echo "<script>console.log('Id: ' + " . $id . ");</script>";
 		
 		$sql = "SELECT entretenimento_id, nome, email, musica FROM entretenimento WHERE entretenimento_id = " . $id;
 		$result = mysqli_query($conn,$sql);
 		//if ($result->num_rows > 0) {
 		while($row = $result->fetch_assoc()) {
            $entretenimento_id = $row["entretenimento_id"];
            $cd_nome = $row["nome"];
 			$cd_email = $row["email"];
 			$cd_musica = $row["musica"]; 
 		}
 	}
 	break;

 } 



 ?>