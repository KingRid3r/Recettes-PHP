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
						<li class="active">
							<a class="dropdown-toggle" data-toggle="dropdown">Recettes<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="recettes.php">Entrée</a></li>
								<li><a href="recettes.php%20#plat">Plat</a></li>
								<li><a href="recettes.php%20#dessert">Dessert</a></li>
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
          					<h2 style="text-align: center; color: white">Recettes</h2>
      					</div>
        				<div id="collapse0" class="panel-collapse collapse in">
        					<div class="panel-body">
								<div class="col-sm-6 col-md-12">
									<div class="panel-group" id="accordion">

					    				<div class="panel panel-default">
					      					<div class="panel-heading" style="background-color: #76B900">
					        					<a class="non_souligne" data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-align: center; color: white"><h3>Entrée</h3></a>
					        				</div>
					      					<div id="collapse1" class="panel-collapse collapse in">
					        					<div class="panel-body">
					        					Le processeur graphique est un circuit intégré se trouvant majoritairement sur une carte. Il permet de gérer tout le côté graphique (interface, rendu 3D, etc) mais également d'accélérer certaines applications en étant utilisé en parallèle du CPU.</div>
					      					</div>
					    				</div>

					    				<div class="panel panel-default">
					      					<div class="panel-heading" style="background-color: #D71920">
					        					<a class="non_souligne" data-toggle="collapse" data-parent="#accordion" href="#collapse2"><h3 style="text-align: center; color: white">Plats</h3></a>
					        				</div>
					      					<div id="collapse2" class="panel-collapse collapse in">
												<div class="panel-body">
												<p id="plat"> Un GPU sert principalement à afficher les informations graphiques à l'écran en optimisant les images, en évitant de calculer des informations inutiles. Ainsi, le processeur graphique coordonne puis envoie l'image à la VRAM avant d'être affiché à l'écran.</p></div>
					        				</div>
					    				</div>

										<div class="panel panel-default">
					      					<div class="panel-heading" style="background-color: #76B900">
					        					<a class="non_souligne" data-toggle="collapse" data-parent="#accordion" href="#collapse3"><h3 id="dessert" style="text-align: center; color: white">Dessert</h3></a>
					        				</div>
					      					<div id="collapse3" class="panel-collapse collapse in">
					        					<div class="panel-body">
					        					Le processeur graphique est un circuit intégré se trouvant majoritairement sur une carte. Il permet de gérer tout le côté graphique (interface, rendu 3D, etc) mais également d'accélérer certaines applications en étant utilisé en parallèle du CPU.</div>
					      					</div>
					    				</div>
					   				</div>
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
