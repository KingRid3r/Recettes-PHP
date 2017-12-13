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
						<li><a href=""><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
						<li class="active"><a href="compte.php"><span class="glyphicon glyphicon-user"></span> Mon Compte</a></li>
					</ul>
				</div>
			</div>
		</nav>		
	</div>
	
	
	
	<div class="col-sm-2" id="mySidebar">     
		<div class="row">
			<nav class="nav-sidebar sidebar">
				<ul class="nav">
					<li class="active"><a href="compte.php">Informations personnelles</a></li>
					<li><a href="gerer_recettes.php">Gerer les recettes</a></li>
					<li><a href="suppression.php">Supprimer le compte</a></li>
				</ul>
			</nav>
		</div>
	</div>
	
	
	
	<div class="container">
		<h2 style="text-align: center">Suppression du compte</h2>
		<br/>
		<p class="center-block" style="text-align: center">Vous pouvez supprimer votre compte en cliquant sur le bouton supprimer juste en dessous. <br/> ATTENTION ! TOUTE SUPPRESSION DE COMPTE EST DEFINITIVE ! <br/> ELLE ENTRAINERA EGALEMENT LA SUPPRESSION DE VOS RECETTES MAIS CONCERVERA VOS COMMENTAIRES. </p>
		<br/>
		<div style="text-align: center">
			<button id="btn_ajt" type="submit" class="btn btn-primary"><h4>Supprimer votre compte</h4></button>
		</div>
	</div>

	<br/>
	

	<footer class="copy">
 			<p>&copy; Copyright 2017 Luca BENEZIT, Mathieu CHABRE - Tous droits réservés</p>
 	</footer>
	
</body>
</html>