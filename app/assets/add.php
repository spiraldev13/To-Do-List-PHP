<?php

session_start();

if(empty($_POST)){
  header('Location : index.php');
  exit();
}


// On regarde les informations envoyés en $_POST.
var_dump($_POST);

$title = $_POST['title'];
$category = $_POST['category'];



// Liste des taches se trouve dans $_SESSION['tasks']
// On récupère la dernière tâche de la lsite via la méthode
// qui retourne le dernier élément d'un tableau
$lastTask = end($_SESSION['tasks']);

$newId = $lastTask['id'] +1;


$newTask = [
  'id' => $newId,
  'title' => $title,
  'category' => $category,
  'done' => false,
];

// On ajoute cette nouvelles tache à cette liste
//Pourt rappel, cette liste c'est $_SESSION['tasks']

array_push($_SESSION['tasks'], $newTask);

// $_SESSION['tasks'][] = $newTask;

// var_dump($_SESSION['tasks']);

header('Location: index.php');
