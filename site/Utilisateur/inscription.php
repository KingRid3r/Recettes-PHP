 
<?php
	include '../BDD/configBDD.inc.php';
	if (isset($_POST['post'])){
		if($_POST['mdp'] == $_POST['mdp2']){
			try{
				$req=$PDO_SQL->prepare('INSERT INTO T_UTILISATEUR_UTI (UTI_LOGIN, UTI_PWD, UTI_MAIL, UTI_NOM, UTI_PRENOM)
										VALUES (?, ?, ?, ?, ?, ?);');
				$req->execute(array($_POST['login'], SHA1($_POST['mdp']), $_POST['mail'], $_POST['nom'], $_POST['prenom']));
				header("location: http://luca-benezit.alwaysdata.net/ProjetPHP/Utilisateur/authent.php");
			}catch(Exception $e) {
				die ('Erreur : '.$e->getMessage().'<br \>');
			}
		}else{
			echo '<p style="color:red;">Les mots de passe ne sons pas identiques</p>';
		}
	}
?>

<!doctypehtml>
<html lang="fr">
	<head>
		<metacharset="utf-8"/>
		<title>OGRecettes - Inscription</title>
	</head>
	<body>
		<h1>Inscription</h1>
		<form action="" method="post">
			<label for="form-login">*Login : </label>
			<input name="login" id="form-login" type="text" value="" size="25" required/><br/>

			<label for="form-nom">*Nom : </label>
			<input name="nom" id="form-nom" type="text" value="" size="25" required/><br/>

			<label for="form-prenom">*Prenom : </label>
			<input name="prenom" id="form-prenom" type="text" value="" size="25" required/><br/>

			<label for="form-mail">*Mail : </label>
			<input name="mail" id="form-mail" type="email" value="" size="25" required/><br/>

			<label for="form-mdp">*Entrez votre mot de passe :</label>
			<input name="mdp" id="form-mdp" type="password" value="" size="25" required/><br/>

			<label for="form-mdp2">*Comfirmer :</label>
			<input name="mdp2" id="form-mdp2" type="password" value="" size="25" required/><br/>

			<input type="submit" name="post" value="Envoyer"/>
			<label for="form-nom"><i>* champs obligatoire</i></label>
		</form>
	</body>
</html>