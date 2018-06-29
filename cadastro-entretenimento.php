<?php
require_once('verificasessao.php');
$title = 'Cadastrar Entretenimento';
$currentPage = 'cadastro-entretenimento';
include('carrega-entretenimento.php');
?>

<?php include 'head.php'; ?>

    <div class="page-header" align="center">
        <img src="img/logo-musica.png" align="center">
        <h1>Entretenimento<small></small></h1>
    </div>

<?php include 'nav.php'; ?>


<div class="jumbotron">
<div class="container">

<form method="post" action="cad-entretenimento.php">
<input input type="hidden" name="txtentretenimento_id" <?php echo "value=". $entretenimento_id . "" ?>>
    <!-- Adiciona -->
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="txtnome" required
  <?php if (!$cd_nome == null) { echo "value='". $cd_nome ."'";}; ?>>

</div>

<div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-envelope" id="basic-addon1"></span>
  <input type="email" class="form-control" placeholder="E-mail" aria-describedby="basic-addon1" name="txtemail" required
  <?php if (!$cd_email == null) { echo "value='". $cd_email ."'";}; ?>>
</div>

<div class="input-group">
  <span class="input-group-addon  glyphicon glyphicon-play" id="basic-addon1"></span>
  <input type="text" class="form-control" placeholder="Digite sua musica favorita" aria-describedby="basic-addon1" name="txtmusica" required
  <?php if (!$cd_musica == null) { echo "value='". $cd_musica ."'";}; ?>>
</div>

<br></br>

<div class="form-group" align="center">
	<button type="submit" class="btn btn-lg btn-success"> 
		<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
			Enviar dados
		</button>

	<a href="entretenimento.php"> Cancelar</a>
</div>

</div>
</div>
</form>

<?php include 'footer.php'; ?>