<?php
  // Connexion ID, should be in env variables
  $servname = '127.0.0.1';
  $dbname = 'marvel';
  $user = 'marvel';
  $pass = 'marvel@0503';

  // Try to connect
  try{
      $dbconnect = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
  }
  
  // Catch exceptions and send the message if error
  catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
  }
?>