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
	
	
	
	<div class="container" id="infos_persos">
		<h2 style="text-align: center;">Mofifier votre recette</h2>
		<br/>
		<p class="center-block" style="text-align: justify; width: 65%">Vous pouvez modifier votre recette en modifiant les champs suivant. </p>
		<br/>
		<br/>
		<form class="form-horizontal" style="text-align: justify; width: 100%">
			<div class="form-group">
				<label class="control-label col-sm-2" for="titre">Titre :</label>
      			<div class="col-sm-4">          
        			<input type="text" class="form-control" id="titre" placeholder="Entrez le titre de votre recette">
    			</div>
    		</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Type :</label>
      			<div class="col-sm-4">
					<select name="type" class="form-control">
						<option value="entree">Entrée</option>
						<option value="plat">Plat</option>
						<option value="dessert">Dessert</option>
					</select>
    			</div>
    		</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Difficulté :</label>
      			<div class="col-sm-4">
					<select name="difficulte" class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
    			</div>
    		</div>
			<div class="form-group">
    			<label class="control-label col-sm-2" for="cout">Cout :</label>
    			<div class="col-sm-4">
    				<input type="number" class="form-control" id="cout" placeholder="Entrez le cout estimé">
    			</div>
    		</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="tps_prepa">Temps de préparation :</label>
      			<div class="col-sm-4">          
        			<input type="time" class="form-control" id="tps_prepa">
    			</div>
    		</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="tps_cuis">Temps de cuisson :</label>
      			<div class="col-sm-4">          
        			<input type="time" class="form-control" id="tps_cuis">
    			</div>
    		</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="tps_repos">Temps de repos :</label>
      			<div class="col-sm-4">          
        			<input type="time" class="form-control" id="tps_repos">
    			</div>
    		</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Ingrédiants :</label>
      			<div class="col-sm-4">
					<select size="4" multiple name="difficulte" class="form-control">
						<option disabled value="1">Afin de selectionner les ingrediants appuyer sur ctrl</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>	
    			</div>
    		</div>
			
			<div class="form-group">
      			<label class="control-label col-sm-2" for="recette">Recette</label>
    			<div class="col-sm-4">
    				<textarea spellcheck="true" class="form-control" id="recette" placeholder="Entrez la recette"></textarea>
    			</div>
    		</div>
			<div class="form-group">
      			<label class="control-label col-sm-2" for="description">Description :</label>
    			<div class="col-sm-4">
    				<textarea spellcheck="true" class="form-control" id="description" placeholder="Entrez la description"></textarea>
    			</div>
    		</div>
    		<div class="form-group">
    			<label class="control-label col-sm-2" for="photo">Photo :</label>
    			<div class="col-sm-4">
    				<input type="file" accept="image/*" class="form-control" id="photo">
    			</div>
    		</div>
    		<div class="form-group">        
      			<div class="col-sm-offset-2 col-sm-10" style="width: 10%">
        			<button type="submit" class="btn btn-primary">Modifier</button>
      			</div>
    		</div>
  		</form>
	</div>

		

	<a href="#top" class="bouton btn btn-primary" role="button"><span class="glyphicon glyphicon-arrow-up"></span></a>
	<footer>
 		<p class="text-center">&copy; Copyright 2017 Luca BENEZIT, Mathieu CHABRE - Tous droits réservés</p>
 	</footer>
	
</body>
</html>