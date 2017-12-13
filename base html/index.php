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
		
		
		
		<div>
			<h2 style="color: black"><u><strong> Présentation : </strong></u></h2>
			<h4 style="color: black"> Bonjour et bienvenue sur le site de Luca et Mathieu. <br/>
				Nous avons créé ce site pour les nouveaux étudiants mais pas seulement pour les nouveaux.<br/>
				En effet, grâce à ce site communautaire, vous pourrez consulter des recettes de cuisine faites pars d'autres personnes.<br/>
				Ainsi, vous pourrais vous cuisiner des bons petits plats fait maison et surtout équilibré !<br/>
				En bref, les membres de la commmunauté pourrons ajouter leurs recettes de cuisine qui seront ainsi visible par tout les visiteurs du site qui pourront se régaler à la maison ! </h4>
		</div>
		<br/>
				
		<div class="row">
			<div class="col-sm-6 col-md-12">
				<div class="panel-group" id="accordion_3">
					<div class="panel panel-default">
      					<div class="panel-heading" style="background-color: black">
          					<h2 style="text-align: center; color: white">Repas du jour</h2>
      					</div>
        				<div class="panel-body">
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