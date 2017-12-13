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
					<li><a href="compte.php">Informations personnelles</a></li>
					<li class="active"><a href="gerer_recettes.php">Gerer vos recettes</a></li>
					<li><a href="suppression.php">Supprimer le compte</a></li>
				</ul>
			</nav>
		</div>
	</div>
	
	
	
	<div class="container" style="width: 60%">
		<h2 style="text-align: center">Gérer vos recettes</h2>
		<br />
		<p class="center-block" style="text-align: justify; width: 90%">Bienvenue sur l'éditeur de recettes. <br/> Vous pouvez créer, modifier et supprimer vos recettes juste en dessous. </p>
		<br/>
		<h3><li> Vous desirez ajouter une recette ?</li></h3>
		<a href="ajouter.php" id="btn_ajt" class="btn btn-primary" style="width: 25%"><h4>Ajouter</h4></a>
		<br/>
		<h3><li> Vous desirez modifier ou supprimer une recette ?</h3>
		<table id="tbl_mod" class="table table-bordered ; table-responsive">
			<thead>
				<tr>
					<th>Liste de vos recettes</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Recette 1</td>
					<td><a href="modifier.php">Modifier</a></td>
					<td>Supprimer</td>
				</tr>
				<tr>
					<td>Pattes à la carbonara avec supplement champignons</td>
					<td><a href="modifier.php">Modifier</a></td>
					<td>Supprimer</td>
				</tr>
				<tr>
					<td>Recette 3</td>
					<td><a href="modifier.php">Modifier</a></td>
					<td>Supprimer</td>
				</tr>
			</tbody>
		</table>
	</div>

		

	<a href="#top" class="bouton btn btn-primary" role="button"><span class="glyphicon glyphicon-arrow-up"></span></a>
	<footer>
 		<p class="text-center">&copy; Copyright 2017 Luca BENEZIT, Mathieu CHABRE - Tous droits réservés</p>
 	</footer>
</body>
</html>