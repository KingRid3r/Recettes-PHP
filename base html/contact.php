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
						<li class="dropdown"><a href="index.php">Accueil</a></li>
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
						<li class="active"><a href="contact.php">Contacts</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="inscription.php"><span class="glyphicon glyphicon-modal-window"></span> Inscription</a></li>
						<li><a href="connexion.php"><span class="glyphicon glyphicon-user"></span> Connexion</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		

		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<h2 class="caption">Nous Contacter</h2>
					<img src="groupe.jpg" alt="photo de groupe">
					<br>
					<a class="btn btn-primary center-block" href="mailto:recette_etudiante@yopmail.com">GO ! </a>
				</div>
			</div>

			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<h2 class="caption">Qui sommes-nous ?</h2>
					<br />
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<img style="width: 100%; margin-left: 12px" src="luca.png" alt="mangatar luca">
						</div>
						<div class="col-sm-6 col-md-7">
							<h3>Luca BENEZIT</h3>
							<p style="color: orange">Ingénieur Web</p>
							<small>A étudié à l'IUT d'Arles</small>
						</div>
						<div class="col-sm-6 col-md-2">
							<a href="http://www.facebook.com/luca.benezit"><img style="width: 70%; margin-top: 35px; margin-right: 30px" src="logo_fb.png" alt="logo Facebook"></a>
						</div>
					</div>
					<br />
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<img style="width: 100%; margin-left: 12px" src="mathieu.png" alt="mangatar mathieu">
						</div>
						<div class="col-sm-6 col-md-7">
							<h3>Mathieu CHABRE</h3>
							<p style="color: orange">Ingénieur Web</p>
							<small>A étudié à l'IUT d'Arles</small>
						</div>
						<div class="col-sm-6 col-md-2">
							<a href="http://www.facebook.com/mathieu.chabre"><img style="width: 70%; margin-top: 35px; margin-right: 30px" src="logo_fb.png" alt="logo Facebook"></a>
						</div>
					</div>
					<br />
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