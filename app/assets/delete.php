<?php

// Suppression des taches
session_start();

// On recupere l'id de la tache à supprimer

$id = $_GET['id'];

// On recherche la tache qui possede un id
// Pour ça, on va parcourir notre liste de tache qui se trouve dans $_SESSION['tasks']

foreach ($_SESSION['tasks'] as $position => $task) {

if ($task['id'] == $id){
  unset($_SESSION['tasks'][$position]);
}

}


header('location: index.php');
