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
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="dropdown"><a href="index.php">Accueil</a></li>
						<li class="active">
							<a href="top_recettes.php">Top Recettes</a>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Recettes<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="recettes.php">Entrée</a></li>
								<li><a href="recettes.php%20#plat">Plat</a></li>
								<li><a href="recettes.php%20#collapse3">Dessert</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="contact.php">Contacts</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="inscription.php"><span class="glyphicon glyphicon-modal-window"></span> Inscription</a></li>
						<li><a href="connexion.php"><span class="glyphicon glyphicon-user"></span> Connexion</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		
		<div>
			<h2 style="text-align: center; color: black"><u><strong> Top 5 des meilleures recettes </strong></u></h2>
		</div>
		<br/>
		<div>
			<h4 style="color: black"> Voici le top 5 des meilleures recettes par catégorie selectionné par les administrateurs.</h4>
		<br/>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom entrée</h3>
					<img class="caption" src="entre1.jpg" alt="image entré" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom plat</h3>
					<img class="caption" src="plat1.jpg" alt="image plat" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom dessert</h3>
					<img class="caption" src="dessert1.jpg" alt="image dessert" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom entrée</h3>
					<img class="caption" src="entre1.jpg" alt="image entré" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom plat</h3>
					<img class="caption" src="plat1.jpg" alt="image plat" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom dessert</h3>
					<img class="caption" src="dessert1.jpg" alt="image dessert" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom entrée</h3>
					<img class="caption" src="entre1.jpg" alt="image entré" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom plat</h3>
					<img class="caption" src="plat1.jpg" alt="image plat" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom dessert</h3>
					<img class="caption" src="dessert1.jpg" alt="image dessert" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom entrée</h3>
					<img class="caption" src="entre1.jpg" alt="image entré" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom plat</h3>
					<img class="caption" src="plat1.jpg" alt="image plat" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom dessert</h3>
					<img class="caption" src="dessert1.jpg" alt="image dessert" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom entrée</h3>
					<img class="caption" src="entre1.jpg" alt="image entré" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom plat</h3>
					<img class="caption" src="plat1.jpg" alt="image plat" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h3 class="text-center">Nom dessert</h3>
					<img class="caption" src="dessert1.jpg" alt="image dessert" style="height: 215px">
					<a class="btn btn-primary center-block" href="">GO !</a>
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