<?php
session_start();
//On récupère l'id de la tache a modifier
$id = $_GET['id'];
// var_dump($id);

// On retrouvre la tache qui possede cet id
// La liste de mes taches se trouve dans $_SESSION['tasks']

foreach ($_SESSION['tasks'] as $key => $task) {
  // on regarde si l'id de la tache est identique à celui qu'on récupere dans l'URL
  if ($task['id'] == $id){
    // On a trouvé la bonne taches
    // On modifie le champ "done"
    // pour le passer à "true"
    $_SESSION['tasks'][$key]['done'] = true;
  }
}

// var_dump($_SESSION['tasks']);

// On a fait le traitement
// On redirige l'user sur la home

header('Location: index.php');
