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

      <?php foreach ($tableau as $index => $label):?>

      <!-- <?php if( $index === 0): ?>
        <a class="item active" href="#"><?php echo $label ?></a>
      <?php else: ?>
        <a class="item " href="#"><?php echo $label ?></a>
      <?php endif; ?> -->

      <a class="item <?php echo  ($index === 0 ? 'active' : '') ?>" href="#"><?php echo $label ?></a>

    <?php endforeach ?>
  </nav>

  </header>

  <main class="main">
