<?php
require_once 'application/libraries/BDD.inc.php';
if(!isset($_SESSION['MonID'])){
  header('Location: index.php?page=acc');
}
try{
  $req = $db->prepare('SELECT UTI_NOM, UTI_PRENOM, UTI_MAIL, UTI_LOGIN, UTI_AVATAR FROM T_UTILISATEUR_UTI WHERE UTI_ID = '.$_SESSION['MonID'].'');
  $req->execute();
  $user = $req->fetchAll();
}catch(Exeption $e){
  echo 'Erreur : '.$e->getMessage().'<br />';
  echo 'N° : '.$e->getCode();
  exit();
}
$user = $user[0];
$data['user'] = $user;
if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['mdp']) AND isset($_POST['mdp2'])){
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $mdp = sha1($_POST['mdp']);
  $mdp2 = sha1($_POST['mdp2']);
  if($nom != $user[0] AND isset($_POST['nom'])){
    try{
      $req = $db->prepare('UPDATE T_UTILISATEUR_UTI SET UTI_NOM = "'.$nom.'" WHERE UTI_ID = '.$_SESSION["MonID"].'');
      $req->execute();
    }catch(Exeption $e){
      echo 'Erreur : '.$e->getMessage().'<br />';
      echo 'N° : '.$e->getCode();
      exit();
    }
    $modif = true;
  }
  if($prenom != $user[1] AND isset($_POST['prenom'])){
    try{
      $req = $db->prepare('UPDATE T_UTILISATEUR_UTI SET UTI_PRENOM = "'.$prenom.'" WHERE UTI_ID = '.$_SESSION["MonID"].'');
      $req->execute();
    }catch(Exeption $e){
      echo 'Erreur : '.$e->getMessage().'<br />';
      echo 'N° : '.$e->getCode();
      exit();
    }
  }
  if($email != $user[2] AND isset($_POST['email'])){
    try{
      $req = $db->prepare('UPDATE T_UTILISATEUR_UTI SET UTI_MAIL = "'.$email.'" WHERE UTI_ID = '.$_SESSION["MonID"].'');
      $req->execute();
    }catch(Exeption $e){
      echo 'Erreur : '.$e->getMessage().'<br />';
      echo 'N° : '.$e->getCode();
      exit();
    }
    $modif = true;
  }
  if(isset($_POST['mdp']) AND isset($_POST['mdp2']) AND $mdp == $mdp2){
    try{
      $req = $db->prepare('UPDATE T_UTILISATEUR_UTI SET UTI_PASS = "'.$mdp.'" WHERE UTI_ID = '.$_SESSION["MonID"].'');
      $req->execute();
    }catch(Exeption $e){
      echo 'Erreur : '.$e->getMessage().'<br />';
      echo 'N° : '.$e->getCode();
      exit();
    }
    $modif = true;
  }else{
    $data['reponse'] = "Mot de passe invalide ";
  }
  $data['ok'] = $modif;
}
try{
  $req = $db->prepare('SELECT UTI_NOM, UTI_PRENOM, UTI_MAIL, UTI_LOGIN, UTI_AVATAR FROM T_UTILISATEUR_UTI WHERE UTI_ID = '.$_SESSION['MonID'].'');
  $req->execute();
  $user = $req->fetchAll();
}catch(Exeption $e){
  echo 'Erreur : '.$e->getMessage().'<br />';
  echo 'N° : '.$e->getCode();
  exit();
}
$user = $user[0];
$data['user'] = $user;
?>
