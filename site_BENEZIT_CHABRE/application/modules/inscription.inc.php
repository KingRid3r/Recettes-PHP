<?php
require_once 'application/libraries/BDD.inc.php';
if (isset($_POST['login']) AND isset($_POST['mdp'])) {
  $login = $_POST['login'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $mdp = sha1($_POST['mdp']);
  $mdp2 = sha1($_POST['mdp2']);
  try{
    $req = $db->prepare('SELECT UTI_ID, UTI_LOGIN FROM T_UTILISATEUR_UTI U WHERE UTI_LOGIN = "'.$login.'"');
    $req->execute();
    $test = $req->fetchAll();
  }catch(Exeption $e){
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit();
  }
  $exist = isset($test[0][0]);
  if ($exist){
    $data["reponse"] = "Login déja utilisé par un autre utilisateur !";
  }else if(!($mdp == $mdp2)){
    $data["reponse"] = "Les mots de passe ne sont pas identiques !";
  }else if(($mdp == $mdp2)){
    $dossier = 'media/'.$login.'/';
    $fichier = basename($_FILES['avatar']['name']);
    $taille_maxi = 1000000000000;
    $taille = filesize($_FILES['avatar']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
    $extension = strrchr($_FILES['avatar']['name'], '.');
    //Début des vérifications de sécurité...
    if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
    {
         $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
    }
    if($taille>$taille_maxi)
    {
         $erreur = 'Le fichier est trop gros...';
    }
    if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
    {
         //On formate le nom du fichier ici...
         $fichier = strtr($fichier,
              'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
              'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
         $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
         if(!(is_dir($dossier))){
           mkdir($dossier);
         }
         if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
         {
           try{
             $req = $db->prepare('INSERT INTO T_UTILISATEUR_UTI (UTI_NOM, UTI_PRENOM, UTI_MAIL, UTI_LOGIN, UTI_PASS, UTI_AVATAR) VALUES ("'.$nom.'","'.$prenom.'","'.$email.'","'.$login.'","'.$mdp.'", "'.$fichier.'")');
             $req->execute();
           }catch(Exeption $e){
             echo 'Erreur : '.$e->getMessage().'<br />';
             echo 'N° : '.$e->getCode();
             exit();
           }
              $data["reponse"] = 'ok';
         }
         else //Sinon (la fonction renvoie FALSE).
         {
              $data["reponse"] = 'Echec de l\'upload !';
         }
    }
    else
    {
         $data["reponse"] = $erreur;
    }
  }
}else{
  $data["reponse"] = false;
}

?>
