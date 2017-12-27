<?php
require_once 'application/libraries/BDD.inc.php';
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
?>
