<?php

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
