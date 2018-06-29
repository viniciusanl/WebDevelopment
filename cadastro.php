<?php include('head.php'); ?>

<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Cadastre-se</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form action="ccadastro.php" method="POST" class="form_login">
                    <input input type="hidden" name="txtcd_usuario">
                    <fieldset>
                        <div class="form-group">
			    		    <input class="form-control" placeholder="Nome" name="txtnome" type="text" required>
			    		</div>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="txtemail" type="text" required>
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="txtsenha" type="password" value="" required>
			    		</div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Cadastrar">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>