<?php
require_once 'application/libraries/BDD.inc.php';
if (isset($_POST['login']) AND isset($_POST['mdp'])) {
  $login = $_POST['login'];
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

  }
}else{
  $data["reponse"] = false;
}

?>
