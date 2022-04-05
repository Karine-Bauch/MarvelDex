<?php
  $servname = '127.0.0.1';
  $dbname = 'marvel';
  $user = 'marvel';
  $pass = 'marvel@0503';

  //On essaie de se connecter
  try{
      $dbconnect = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
  }
  
  /*On capture les exceptions si une exception est lancée et on affiche
    *les informations relatives à celle-ci*/
  catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
  }
?>