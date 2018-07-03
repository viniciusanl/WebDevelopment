<!--<style>

        label[for="bt_menu"]{
          padding: 5px;
          background-color: #222;
          color: #fff;
          font-family: "Arial";
          text-align: "center";
          font-size: 30px;
          cursor: pointer;
          width: 50px;
          height: 50px;
          }

          #bt_menu{
                  display: none;
          }
          label[for="bt_menu"]{
                  display: none;
          }


          @media (max-width: 800px){
                label[for="bt_menu"]{
                  display: block;
                }

                #bt_menu: checked ~ .menu{
                        margin-left: 0;
                }
                .menu{
                        margin-top: 5px;
                        margin-left: -100%;
                        transition: all .4s;
                }
                
          }
</style>
<input type="checkbox" id="bt_menu">
        <label for="bt_menu">&#9776;</label>
<nav class="navbar navbar-static-top">

        

        <div class="menu" align="center">
        <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="index.php">Home</a></li>
        <li role="presentation"><a href="bach.php">Johann Sebastian Bach</a></li>
        <li role="presentation"><a href="beethoven.php">Ludwig van Beethoven</a></li>
        <li role="presentation"><a href="chopin.php">Frédéric Chopin</a></li>
        <li role="presentation"><a href="mozart.php">Wolfgang Amadeus Mozart</a></li>
        <li role="presentation"><a href="logar.php">Entretenimento</a></li>
        <a class="nav-link btn btn-danger" href="index.php">Sair</a>
        </ul>
        </div>
</nav> -->
        <style>
        button{
	text-decoration: none;
	color: white;
        }

        button a{
	text-decoration: none;
	color: white;
                }
        </style>

	<nav class="navbar navbar-static-top navbar-light bg-light">
        <li role="presentation" class="active"><a href="index.php">Home</a></li>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="container" id="navbarTogglerDemo02">
			<ul class="nav nav-pills mr-auto mt-2 mt-lg-0">
                                
				<li <?php if ($currentPage == "bach"){echo "class='nav-item active'";}else{echo "class='nav-item'";}?>>
					<a class="nav-link" href="bach.php">Johann Sebastian Bach</a>
				</li>
				<li <?php if ($currentPage == "beethoven"){echo "class='nav-item active'";}else{echo "class='nav-item'";}?>>
					<a class="nav-link" href="beethoven.php">Ludwig van Beethoven</a>
				</li>
				<li <?php if ($currentPage == "chopin"){echo "class='nav-item active'";}else{echo "class='nav-item'";}?>>
					<a class="nav-link" href="chopin.php">Frédéric Chopin</a>
				</li>
				<li <?php if ($currentPage == "mozart"){echo "class='nav-item active'";}else{echo "class='nav-item'";}?>>
					<a class="nav-link" href="mozart.php">Wolfgang Amadeus Mozart</a>
				</li>
                                <li <?php if ($currentPage == "logar"){echo "class='nav-item active'";}else{echo "class='nav-item'";}?>>
					<a class="nav-link" href="logar.php">Entretenimento</a>
				</li>
                                
			</ul>

			<div class="mr-auto mt-2 mt-lg-0">
				<p><?php //echo $_SESSION['nomeusu'];?></p>
			</div>
			<a class="nav-link btn btn-danger" href="fechar.php">Sair</a>

		</div>
	</nav>