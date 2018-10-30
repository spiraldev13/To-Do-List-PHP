<?php

// Ce fichier contient toutes les données par defaut de notre liste
if (!isset($_SESSION['tasks'])) {

$_SESSION['tasks'] =[
  ['title' => 'Acheter du lait',
   'category' => 'cart',
   'done' => false
 ],
 [
   'title' => 'Appeler Philippe',
   'category' => 'work',
   'done' => false
 ],
 [
   'title' => ' Appeler Maxime',
   'category' => 'work',
   'done' => true
 ],
 [
   'title' => 'Donner à manger au chat',
   'category' => 'perso',
   'done' => false
 ],
 [
   'title' => 'Acheter des croquettes',
   'category' => 'perso',
   'done' => true
 ]

];
}

$tasks = $_SESSION['tasks'];

function applyfilter($isdone){

  global $tasks;

  $result =[];

  foreach ($tasks as $task) {
    if ($task['done'] === $isdone){
      $result[] = $task;
    }
  }
  return $result;
}



function applyCategory($category){

global $tasks;

$res = [];

foreach ($tasks as $task) {
  // code...
  if ($task['category'] === $category) {
    $res[] = $task;
  }
}
return $res;
}

// On regarde si on doit appliquer un filtre
// Autrement dis, on regarde si on a quelque chose
// dans $_GET['filter']

if (isset($_GET['filter'])  || isset($_SESSION['filter'])) {




  $filter = null;

  if (isset($_GET['filter'])){

    $filter = $_GET['filter'];

    $_SESSION['filter'] = $_GET['filter'];
  }
  else{
    $filter = $_SESSION['filter'];
  }

  if ($filter === 'ALL') {
    // On veut afficher toutes les taches

  }
  elseif ($filter === 'Completed') {
    // $res = applyfilter(true);
    // $tasks = $res;

    $tasks = applyfilter(true);

  }
  else {
    // === Todo
    $tasks = applyfilter(false);
  }
}

///////////////////////////////////////////////////
///////////////////////////////////////////////////

if (isset($_GET['category']) || isset($_SESSION['category'])) {


    $category = null;

    if (isset($_GET['category'])) {
      $category = $_GET['category'];
      $_SESSION['category'] = $_GET['category'];
    }
    else {
      $category = $_SESSION['category'];
    }

    if ($category === 'all') {
      unset($_SESSION['category']);
    }
    else {
      $tasks = applyCategory($category);

    }

}
