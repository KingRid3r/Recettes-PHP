<?php
require_once 'application/libraries/BDD.inc.php';
$exist = isset($_REQUEST['idr']);
if (!$exist){
  header('Location: index.php?page=404');
  exit;
}
try{
  $req = $db->prepare('SELECT RCT_ID, RCT_TITRE, RCT_DATE, RCT_DESCRIPTION, RCT_TEMPS_PREPARATION, RCT_TEMPS_CUISSON, RCT_TEMPS_REPOS, RCT_DIFFICULTE, RCT_COUT, RCT_ILLUSTRATION, UTI_LOGIN, RCT_RECETTE FROM T_RECETTE_RCT R JOIN T_UTILISATEUR_UTI U ON R.UTI_ID = U.UTI_ID WHERE RCT_ID = '.$_REQUEST['idr'].'');
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

try{
  $req = $db->prepare('SELECT COM_TEXTE, COM_DATE, UTI_LOGIN, UTI_AVATAR  FROM T_COMMENTAIRE_COM C JOIN T_UTILISATEUR_UTI U ON C.UTI_ID = U.UTI_ID WHERE RCT_ID='.$_REQUEST['idr'].'');
  $req->execute();
  $coms = $req->fetchAll();
}catch(Exeption $e){
  echo 'Erreur : '.$e->getMessage().'<br />';
  echo 'N° : '.$e->getCode();
  exit();
}
$data["coms"] = $coms;

if(isset($_POST["commentaire"])){
  try{
    $req = $db->prepare('INSERT INTO `T_COMMENTAIRE_COM`(`COM_TEXTE`, `UTI_ID`, `RCT_ID`) VALUES ("'.$_POST["commentaire"].'",'.$_SESSION['MonID'].','.$_REQUEST['idr'].')');
    $req->execute();
  }catch(Exeption $e){
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit();
  }
  try{
    $req = $db->prepare('SELECT RCT_NOTE FROM T_RECETTE_RCT WHERE RCT_ID = '.$_REQUEST['idr'].'');
    $req->execute();
    $note = $req->fetchAll();
  }catch(Exeption $e){
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit();
  }
  $note = $note[0][0];
  $note = ($note + $_POST["note"])/2;
  try{
    $req = $db->prepare('UPDATE T_RECETTE_RCT SET RCT_NOTE = "'.$note.'" WHERE RCT_ID = '.$_REQUEST['idr'].'');
    $req->execute();
  }catch(Exeption $e){
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit();
  }

}
try{
  $req = $db->prepare('SELECT RCT_NOTE FROM T_RECETTE_RCT WHERE RCT_ID = '.$_REQUEST['idr'].'');
  $req->execute();
  $note = $req->fetchAll();
}catch(Exeption $e){
  echo 'Erreur : '.$e->getMessage().'<br />';
  echo 'N° : '.$e->getCode();
  exit();
}
  $note = $note[0][0];
  if ((0 < $note) AND ($note <= 1)) {
    $data["note"] = 1;
  }elseif ((1 < $note) AND ($note <= 2)) {
    $data["note"] = 2;
  }elseif ((2 < $note) AND ($note <= 3)) {
    $data["note"] = 3;
  }elseif ((3 < $note) AND ($note <= 4)) {
    $data["note"] = 4;
  }elseif ((4 < $note) AND ($note <= 5)) {
    $data["note"] = 5;
  }elseif ($note == 0) {
    $data["note"] = 0;
  }else{
    $data["note"] = 0;
  }
?>
