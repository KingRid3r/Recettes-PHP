<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="asset/css/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="asset/css/style.css">
		<link rel="shortcut icon" href="asset/images/puces.png">
		<title>{block "title"}Recette étudiante{/block}</title>
		<meta name="author" content="Luca BENEZIT, Mathieu CHABRE" />
		<meta name="description" content="Projet PHP, Recette Etudiante" />
		<meta name="keywords" content="recette etudiante, projet PHP, IUT, Arles" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>

	<body>
		<header>
			{include file='application/views/layout/layout_entete.inc.tpl'}
		</header>
		<div class="container">
			{if isset($smarty.session.MonID)}
				{include file='application/views/nav/nav_membre.inc.tpl'}
			{else}
				{include file='application/views/nav/nav.inc.tpl'}
			{/if}
			{block "content"}Erreur{/block}
		</div>
		<footer>
			{include file='application/views/layout/layout_pied.inc.tpl'}
		</footer>
	</body>


</html>
