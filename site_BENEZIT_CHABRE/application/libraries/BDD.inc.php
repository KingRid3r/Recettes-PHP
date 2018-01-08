<?php
    $dbhost = "mysql-luca-benezit.alwaysdata.net";
    $dbname = "luca-benezit_projet";
    $dbusername = "144258";
    $dbpassword = "@Lekilleur981998";

    try{
      $db = new PDO("mysql:host=".$dbhost.";dbname=".$dbname, $dbusername, $dbpassword);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $utf8 = $db->prepare('SET NAMES utf8');
      $utf8->execute();
    }catch(Exeption $e){
      echo 'Erreur : '.$e->getMessage().'<br />';
      echo 'N° : '.$e->getCode();
      exit();
    }
?>
