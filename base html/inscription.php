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
						<li><a href="contact.php">Contacts</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="inscription.php"><span class="glyphicon glyphicon-modal-window"></span> Inscription</a></li>
						<li><a href="connexion.php"><span class="glyphicon glyphicon-user"></span> Connexion</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		

		<div class="container">
			<h2 style="text-align: center;">Inscription</h2>
			<br />
			<p class="center-block" style="text-align: justify; width: 75%">Inscrivez-vous ! Dès maintenant et en quelques clics, inscrivez-vous gratuitement pour pouvoir ajouter et commenter des recettes. Pour s'inscrire c'est très simple : il vous suffit de remplir le formulaire ci-dessous et de vous laisser guider. </p>
			<br />
			<form class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2" for="nom">Nom :</label>
      				<div class="col-sm-4">          
        				<input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
    				</div>
    			</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="prenom">Prénom :</label>
      				<div class="col-sm-4">          
        				<input type="text" class="form-control" id="prenom" placeholder="Entrez votre prenom">
    				</div>
    			</div>
				<div class="form-group">
    				<label class="control-label col-sm-2" for="nom">Email :</label>
    				<div class="col-sm-4">
    					<input type="email" class="form-control" id="email" placeholder="Entrez votre email">
    				</div>
    			</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="login">Login :</label>
      				<div class="col-sm-4">          
        				<input type="text" class="form-control" id="login" placeholder="Entrez votre login">
    				</div>
    			</div>
				<div class="form-group">
      				<label class="control-label col-sm-2" for="mdp">Mot de passe :</label>
    				<div class="col-sm-4">
    					<input type="password" class="form-control" id="mdp" placeholder="Entrez votre mot de passe">
    	  			</div>
    			</div>
				<div class="form-group">
      				<label class="control-label col-sm-2" for="mdp2">Confirmer votre mot de passe :</label>
    				<div class="col-sm-4">
    					<input type="password" class="form-control" id="mdp2" placeholder="Confirmez votre mot de passe">
    	  			</div>
    			</div>
    			<div class="form-group">
    				<label class="control-label col-sm-2" for="avatar">Avatar :</label>
    				<div class="col-sm-4">
    					<input type="file" accept="image/*" class="form-control" id="avatar">
    				</div>
    			</div>
    			<div class="form-group">        
      				<div class="col-sm-offset-2 col-sm-10">
        				<button type="submit" class="btn btn-primary">Envoyer</button>
      				</div>
    			</div>
  			</form>
		</div>

		

		<a href="#top" class="bouton btn btn-primary" role="button"><span class="glyphicon glyphicon-arrow-up"></span></a>
		<footer class="row">
 			<p class="text-center">&copy; Copyright 2017 Luca BENEZIT, Mathieu CHABRE - Tous droits réservés</p>
 		</footer>
	</div>
</body>
</html>