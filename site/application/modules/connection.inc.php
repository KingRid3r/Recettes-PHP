<?php
require_once 'application/libraries/BDD.inc.php';
if (isset($_REQUEST['login']) AND isset($_REQUEST['mdp'])){
  $login = $_POST['login'];
  $mdp = sha1($_POST['mdp']);
  try{
    $req = $db->prepare('SELECT UTI_ID, UTI_LOGIN, UTI_PASS, UTI_ADMIN FROM T_UTILISATEUR_UTI U WHERE UTI_LOGIN = "'.$login.'"');
    $req->execute();
    $user = $req->fetchAll();
  }catch(Exeption $e){
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit();
  }
  if (($user[0][1] == $login) AND ($user[0][2] == $mdp)){
    $data["reponse"] = "Connection réussite ! ";
    $data["etat"] = "ok";
    $_SESSION['MonLogin'] = $user[0][1];
    $_SESSION['MonID'] = $user[0][0];
    $_SESSION['ADMIN'] = $user[0][3];
    header('Location: index.php?page=acc');

  }else{
    $data["reponse"] = "Mot de passe ou nom d'utilisateur invalide !";
    $data["etat"] = "no";
  }
}else{
  $data["reponse"] = "Connection non effectué !";
  $data["etat"] = "EnCour";
}
?>
