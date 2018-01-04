<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="puces.png">
	<title>Recette Etudiante</title>
	<meta name="author" content="Luca BENEZIT, Mathieu CHABRE" />
	<meta name="description" content="Projet PHP, Recette Etudiante" />
	<meta name="keywords" content="recette etudiante, projet PHP, IUT, Arles" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>

	<img id="top" class="center-block img-responsive" style="width:80%" src="logo_site.png" alt="logo site" />

	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Accueil</a></li>
						<li class="dropdown">
							<a href="top_recettes.php">Top Recettes</a>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Recettes<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="recettes.php">Entrée</a></li>
								<li><a href="recettes.php%20#plat">Plat</a></li>
								<li><a href="recettes.php%20#collapse3">Dessert</a></li>
							</ul>
						</li>
						<li><a href="contact.php">Contacts</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="inscription.php"><span class="glyphicon glyphicon-modal-window"></span> Inscription</a></li>
						<li><a href="connexion.php"><span class="glyphicon glyphicon-user"></span> Connexion</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		
			
		<div class="row">
			<div class="col-sm-6 col-md-12">
				<div class="panel-group" id="accordion_3">
					<div class="panel panel-default">
      					<div class="panel-heading" style="background-color: black">
          					<h2 style="text-align: center; color: white">TARTIFLETTE</h2>
      					</div>
						<p> Le 69/69/1969, par User</p>
        				<div class="panel-body">
							<div class="col-sm-6 col-md-4">
								<img class="caption" src="entre1.jpg" alt="image entré" style="height: 215px">
							</div>
							<div class="col-sm-6 col-md-8">
								<h4><u><strong> Difficultée :</strong></u> X</h4>
								<h4><u><strong> Cout :</strong></u> XX € environ </h4>
								<h4><u><strong> Temps de Préparation :</strong></u> XX environ </h4>
								<h4><u><strong> Temps de Cuisson :</strong></u> XX </h4>
								<h4><u><strong> Temps de Repos :</strong></u> XX </h4>
							</div>
							<div class="col-sm-6 col-md-12">
								<br/>
								<h4><u><strong> Description : </strong></u></h4>
								<p>
									Adolescebat autem obstinatum propositum erga haec et similia multa scrutanda,
									stimulos admovente regina, quae abrupte mariti fortunas trudebat in exitium praeceps,
									cum eum potius lenitate feminea ad veritatis humanitatisque viam reducere utilia suadendo deberet,
									ut in Gordianorum actibus factitasse Maximini truculenti illius imperatoris rettulimus coniugem.
								</p>
							</div>
							<div class="col-sm-6 col-md-12">
								<br/>
								<h4><u><strong> Liste des ingrédiants : </strong></u></h4>
								<li> ingredian 1 </li>
								<li> ingredian 1 </li>
								<li> ingredian 1 </li>
								<li> ingredian 1 </li>
							</div>
							<div class="col-sm-6 col-md-12">
								<br/>
								<h4><u><strong> Recette : </strong></u></h4>
								<p>
									Adolescebat autem obstinatum propositum erga haec et similia multa scrutanda,
									stimulos admovente regina, quae abrupte mariti fortunas trudebat in exitium praeceps,
									cum eum potius lenitate feminea ad veritatis humanitatisque viam reducere utilia suadendo deberet,
									ut in Gordianorum actibus factitasse Maximini truculenti illius imperatoris rettulimus coniugem.
								</p>
							</div>
						</div>
    				</div>
  				</div> 
			</div>
		</div>
		
		
		
		
		<div class="row">
			<div class="col-sm-6 col-md-12">
				<div class="panel-group" id="accordion_3">
					<div class="panel panel-default">
      					<div class="panel-heading" style="background-color: black">
          					<h2 style="text-align: center; color: white">Espace Commentaire</h2>
      					</div>
						<div>
							<br/>
							<h1 style="text-align: center"> ICI C'EST LES COMMENTAIRES !!! </h1>
							<br/>
						</div>
    				</div>
  				</div> 
			</div>
		</div>

		
		
		<a href="#top" class="bouton btn btn-primary" role="button"><span class="glyphicon glyphicon-arrow-up"></span></a>
		<footer class="row">
 			<p class="text-center">&copy; Copyright 2017 Luca BENEZIT, Mathieu CHABRE - Tous droits réservés</p>
 		</footer>
	</div>

</body>
</html>