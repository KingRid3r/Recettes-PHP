<?php
require_once 'application/libraries/BDD.inc.php';
$exist = isset($_REQUEST['idr']);
if (!$exist){
  header('Location: index.php?page=404');
  exit;
}
try{
  $req = $db->prepare('SELECT RCT_ID, RCT_TITRE, RCT_DATE, RCT_DESCRIPTION, RCT_TEMPS_PREPARATION, RCT_TEMPS_CUISSON, RCT_TEMPS_REPOS, RCT_DIFFICULTE, RCT_COUT, RCT_ILLUSTRATION, UTI_LOGIN FROM T_RECETTE_RCT R JOIN T_UTILISATEUR_UTI U ON R.UTI_ID = U.UTI_ID WHERE RCT_ID = '.$_REQUEST['idr'].'');
  $req->execute();
  $recette = $req->fetchAll();
}catch(Exeption $e){
  echo 'Erreur : '.$e->getMessage().'<br />';
  echo 'N° : '.$e->getCode();
  exit();
}
$exist = $recette[0][0];
if (!$exist){
  header('Location: index.php?page=404');
  exit;
}
$data["recette"] = $recette[0];
?>
