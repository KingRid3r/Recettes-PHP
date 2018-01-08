<?php
require_once 'application/libraries/BDD.inc.php';
try{
  $req = $db->prepare('SELECT RCT_ID FROM TJ_CAT_RCT WHERE CAT_ID = 1 ORDER BY RAND()');
  $req->execute();
  $recette_id_entree = $req->fetchAll();

  $req = $db->prepare('SELECT RCT_ID FROM TJ_CAT_RCT WHERE CAT_ID = 2 ORDER BY RAND()');
  $req->execute();
  $recette_id_plat = $req->fetchAll();

  $req = $db->prepare('SELECT RCT_ID FROM TJ_CAT_RCT WHERE CAT_ID = 3 ORDER BY RAND()');
  $req->execute();
  $recette_id_dessert = $req->fetchAll();
  echo $recette_id_entree[0][0];
  $req = $db->prepare('SELECT RCT_TITRE, RCT_ILLUSTRATION, UTI_ID, RCT_ID FROM T_RECETTE_RCT WHERE RCT_ID = '.$recette_id_entree[0][0].' ORDER BY RAND()');
  $req->execute();
  $recette_entree = $req->fetchAll();

  $req = $db->prepare('SELECT RCT_TITRE, RCT_ILLUSTRATION, UTI_ID, RCT_ID FROM T_RECETTE_RCT WHERE RCT_ID = '.$recette_id_plat[0][0].' ORDER BY RAND()');
  $req->execute();
  $recette_plat = $req->fetchAll();

  $req = $db->prepare('SELECT RCT_TITRE, RCT_ILLUSTRATION, UTI_ID, RCT_ID FROM T_RECETTE_RCT WHERE RCT_ID = '.$recette_id_dessert[0][0].' ORDER BY RAND()');
  $req->execute();
  $recette_dessert = $req->fetchAll();

  $req = $db->prepare('SELECT UTI_LOGIN FROM T_UTILISATEUR_UTI WHERE UTI_ID = '.$recette_entree[0][2].' ORDER BY RAND()');
  $req->execute();
  $user = $req->fetchAll();
  $recette_entree[0][2] = $user[0][0];

  $req = $db->prepare('SELECT UTI_LOGIN FROM T_UTILISATEUR_UTI WHERE UTI_ID = '.$recette_plat[0][2].' ORDER BY RAND()');
  $req->execute();
  $user = $req->fetchAll();
  $recette_plat[0][2] = $user[0][0];

  $req = $db->prepare('SELECT UTI_LOGIN FROM T_UTILISATEUR_UTI WHERE UTI_ID = '.$recette_dessert[0][2].' ORDER BY RAND()');
  $req->execute();
  $user = $req->fetchAll();
  $recette_dessert[0][2] = $user[0][0];

  $data["entree"] = $recette_entree;
  $data["plat"] = $recette_plat;
  $data["dessert"] = $recette_dessert;
}catch(Exeption $e){
  echo 'Erreur : '.$e->getMessage().'<br />';
  echo 'N° : '.$e->getCode();
  exit();
}
?>
