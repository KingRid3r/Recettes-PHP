<?php
require_once 'application/libraries/BDD.inc.php';
if (isset($_POST['titre'])) {
  $titre = $_POST['titre'];
  $type = $_POST['type'];
  $difficulte = $_POST['difficulte'];
  $cout = $_POST['cout'];
  $tps_prepa = $_POST['tps_prepa'];
  $tps_cuis = $_POST['tps_cuis'];
  $tps_repos = $_POST['tps_repos'];
  $recette = $_POST['recette'];
  $description = $_POST['description'];
    $dossier = 'media/'.$_SESSION["MonLogin"].'/';
    $fichier = basename($_FILES['photo']['name']);
    $taille_maxi = 1000000000000;
    $taille = filesize($_FILES['photo']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
    $extension = strrchr($_FILES['photo']['name'], '.');
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
         if(move_uploaded_file($_FILES['photo']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
         {
           try{
             $req = $db->prepare('INSERT INTO T_UTILISATEUR_UTI (`RCT_TITRE`, `RCT_DESCRIPTION`, `RCT_TEMPS_PREPARATION`, `RCT_TEMPS_CUISSON`, `RCT_TEMPS_REPOS`, `RCT_DIFFICULTE`, `RCT_COUT`, `RCT_ILLUSTRATION`, `UTI_ID`, `RCT_NBPERSONNE`, `RCT_RECETTE`) VALUES ("'.$titre.'","'.$description.'","'.$tps_prepa.'","'.$tps_cuis.'", "'.$tps_repos.'", "'.$difficulte.'", "'.$cout.'", "'.$fichier.'", "'.$_SESSION["MonID"].'", "'.$recette.'")');
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
}else{
  $data["reponse"] = false;
}

?>
