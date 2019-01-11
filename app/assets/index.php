<?php
// Durée de conservation du cookie

ini_set('session.cookie_lifetime', 60*60*24*365);

session_start();

  $filters = [
    'ALL',
    'Completed',
    'Todo'
  ];


  //On ajoute les données de notre application
 require('data.php');

 require('templates/header.php');
 require('templates/main.php');
 require('templates/footer.php');

?>
