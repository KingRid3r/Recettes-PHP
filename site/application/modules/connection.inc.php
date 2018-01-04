<?php
require_once 'application/libraries/BDD.inc.php';
$login = $_POST['login'];
$mdp = $_POST['mdp'];
if (isset($_REQUEST['login']) AND isset($_REQUEST['mdp'])) {
  try{
    $req = $db->prepare('SELECT UTI_ID, UTI_LOGIN FROM T_UTILISATEUR_UTI U WHERE UTI_LOGIN = '.$login.'');
    $req->execute();
    $test = $req->fetchAll();
  }catch(Exeption $e){
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit();
  }
  $exist = $test[0][0];
  if ($exist){
    $data["reponse"] = "Login déja utilisé par un autre utilisateur !";
    exit;
  }
}
?>
