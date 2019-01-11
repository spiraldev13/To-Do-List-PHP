<?php
// On demarre les sessions
session_start();

//On regarde ce qu'on reçoit comme données
var_dump($_POST);

// On passe par une variable intermediaire
$id = $_POST['id'];
$title = $_POST['title'];

var_dump($title, $id);

// On va chercher la bonne tâche à modifier
// On parcours la liste des taches pour verifier
// Chaque identifiant et voir si il correspond
// à celui qui à été passé dans le formulaire
foreach ($_SESSION['tasks'] as $index => $task ) {

// on check l'id
  if ($task['id'] == $id){
    //On a trouvé la tache à modifier
    //On peux modifier le title
    // On ne veux pas modifier la copie de la tache
    // $task['title'] = $title

    // On souhaite modifier la tâche d'origine qui se trouve dans la session
    // $task['title'] = $tilte;
    $_SESSION['tasks'][ $index ]['title'] = $title;

  }
}

header('location: index.php');
