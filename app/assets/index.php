<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Brunch</title>
  <link rel="stylesheet" href="css/vendor.css">
  <link rel="stylesheet" href="css/app.css">
</head>
<body>

  <header class="header">
    <h1>Todolist Spiral_Dev 13</h1>
    <nav class="filters">
      <a class="active" href="#">All</a>
      <a href="#">Completed</a>
      <a href="#">Todo</a>
    </nav>
  </header>

  <main class="main">
    <ul class="tasks">
      <li class="tasks_red">
        <span class="item-labels">Le texte de la tache</span>
        <div class="item-actions filters">
          <a href="#">Check</a>
          <a href="#">Cat</a>
          <a href="#">Edit</a>
          <a href="#">Del</a>
        </div>
      </li>
      <li>
        <span class="item-labels">Le texte de la tache</span>
        <div class="item-actions">
          <a href="#">Check</a>
          <a href="#">Cat</a>
          <a href="#">Edit</a>
          <a href="#">Del</a>
        </div>
      </li>
    </ul>
  </main>

  <footer class="footer">
    <!-- Formulaire d'ajout d'une tâche -->
  </footer>

  <script src="js/vendor.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
