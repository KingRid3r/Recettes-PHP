<?php
require_once 'application/libraries/BDD.inc.php';
$cat = isset($_REQUEST['idc']);
if ($cat == true){
  $data["exist"] = true;

  try{
    $req = $db->prepare('SELECT CAT_LABEL, CAT_DESCRIPTION FROM T_CATEGORIE_CAT WHERE CAT_ID = '.$_REQUEST['idc'].'');
    $req->execute();
    $nom = $req->fetchAll();
  }catch(Exeption $e){
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit();
  }
  $data["nom"] = $nom[0][0];
  $data["description"] = $nom[0][1];

  try{
    $req = $db->prepare('SELECT UTI_LOGIN, RCT_ILLUSTRATION, RCT_TITRE, RCT_DESCRIPTION  FROM T_RECETTE_RCT R JOIN T_UTILISATEUR_UTI U ON R.UTI_ID = U.UTI_ID');
    $req->execute();
    $categorie = $req->fetchAll();
  }catch(Exeption $e){
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit();
  }
  $data["categorie"] = $categorie;

}else{

    try{
      $req = $db->prepare('SELECT CAT_LABEL, CAT_DESCRIPTION, CAT_ILLUSTRATION FROM T_CATEGORIE_CAT');
      $req->execute();
      $categories = $req->fetchAll();
    }catch(Exeption $e){
      echo 'Erreur : '.$e->getMessage().'<br />';
      echo 'N° : '.$e->getCode();
      exit();
    }
    $data["categories"] = $categories;
    $data["categorie"]["exist"] = false;
}
?>
