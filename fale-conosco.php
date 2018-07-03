<?php
$currentPage ='logar';
include 'head.php';
?>

    <div class="page-header" align="center">
        <img src="img/logo-musica.png" align="center">
        <h1>Fale conosco<small></small></h1>
    </div>

<?php include 'nav.php'; ?>


<div class="container">
    <div class="row">
		<form method="post" action="cad-faleconosco.php" role="form" class="col-md-9 go-right">

		<input input type="hidden" name="txtentretenimento_id">

			<div class="form-group">
			<input name="txtnome" type="text" class="form-control" required>
			<label for="name">Nome</label>
		</div>
		<div class="form-group">
			<input name="txtemail" type="email" class="form-control" required>
			<label for="email">E-mail</label>
		</div>
		<div class="form-group">
			<textarea name="txtdescricao" class="form-control" required></textarea>
			<label for="descricao">Descrição</label>
		</div>
        <div class="form-group" align="left">
	        <button type="submit" class="btn btn-lg btn-success"> 
		    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
			    Enviar dados
		    </button>
	        <a href="entretenimento.php"> Cancelar</a>
            </div>
		</form>
	</div>
</div>

<?php include 'footer.php'; ?>