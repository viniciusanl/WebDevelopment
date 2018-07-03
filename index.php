<?php
$currentPage ='index'; 
include 'head.php';
?>

    <div class="page-header" align="center">
        <img src="img/logo-musica.png" align="center" class="img-responsive" alt="Responsive image">
        <h1>Music Life<small></small></h1>
    </div>

<?php include 'nav.php'; ?>

<div class="jumbotron">
    <div class="container" align="center">
        <h1>Música Clássica</h1>
            <p align="justify">Música clássica, música de concerto ou música erudita é o nome dado à principal variedade de música produzida ou enraizada nas tradições da música secular e litúrgica ocidental. Abrange um período amplo que vai aproximadamente do século IX até o presente
            e segue cânones preestabelecidos no decorrer da história da música. Apesar do nome que remete a algo do 'passado' ou 'antigo', esta variedade de música é escrita também nos dias de hoje, através de compositores do século XXI que criam
            obras inéditas, originais e atuais.</p>

            <!-- Carrossel de fotos -->

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>


                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/musica-classica.jpg" alt="img/Background-composers.jpg" class="img-responsive" alt="Responsive image">
                            <div class="carousel-caption">
                            ...
                            </div>
                        </div>
                <div class="item">
                    <img src="img/Background-composers.jpg" alt="..." class="img-responsive" alt="Responsive image">
                    <div class="carousel-caption">
                    ...
                </div>
            </div>
                ...
            </div>

                <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>

                <!-- Fim Carrossel de fotos -->
                <p><a class="btn btn-primary btn-lg" href="https://pt.wikipedia.org/wiki/M%C3%BAsica_cl%C3%A1ssica" role="button">Learn more</a></p>
        </div>
</div>


    
    
    <!-- <nav id="menu">
            <h1>Menu Principal</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="bach.php">Bach</a></li>
                <li><a href="mozart.php">Mozart</a></li>
                <li><a href="beethoven.php">Beethoven</a></li>
                <li><a href="chopin.php">Chopin</a></li>
                <li><a href="fale-conosco.php">Contato</a></li>
            </ul>
        </nav>

        <h1> Musica Clássica</h1> -->

        <!-- <h2> Descrição </h2> -->

       <!-- <h3>
            <p>
                Música clássica, música de concerto ou música erudita é o nome dado à principal variedade de música produzida ou enraizada nas tradições da música secular e litúrgica ocidental. Abrange um período amplo que vai aproximadamente do século IX até o presente
                e segue cânones preestabelecidos no decorrer da história da música. Apesar do nome que remete a algo do 'passado' ou 'antigo', esta variedade de música é escrita também nos dias de hoje, através de compositores do século XXI que criam
                obras inéditas, originais e atuais.
        </h3>
        </p>

        <!--<section class="slide padding-80 text-center color-white">
		
		<h1 class="titulo-slide">Melhores compositores da musica clássica</h1>
		<p class="descricao-slide">Aprenda a programar de maneira profissional em até xx dias. </p>
		<a class="btn-saiba-mais">Saíba Mais</a>
        </section> -->

<?php include 'footer.php'; ?>