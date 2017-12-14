<?php

  session_start();

  try {
    $db = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUser, $dbPass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
  } catch (PDOexception $e) {
    die('Erreur de connexion à la base de données');
  }

 ?>
