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

      <?php foreach ($filters as $index => $label):?>

      <?php if(!isset($_SESSION['filter']) && $index === 0): ?>
            <a class="item active" href="index.php?filter=<?=$label?>"><?php echo $label ?></a>

      <?php elseif(isset($_SESSION['filter']) && $_SESSION['filter'] === $label): ?>
        <a class="item active" href="index.php?filter=<?=$label?>"><?php echo $label ?></a>
      <?php else: ?>
        <a class="item " href="index.php?filter=<?=$label?>"><?php echo $label ?></a>
      <?php endif; ?>

      <!-- <a class="item <?php echo  ($index === 0 ? 'active' : '') ?>" href="index.php?filter=<?=$label?>"><?php echo $label ?></a> -->

    <?php endforeach ?>
  </nav>

  <nav class="filters">
    <?php if (isset($_SESSION['category'])): ?>

      <a class="item  <?= $_SESSION['category'] === 'all' ? 'active' : '' ?>" href="index.php?category=all">All</a>

      <a class="item tasks_work <?= $_SESSION['category'] === 'work' ? 'active' : '' ?>" href="index.php?category=work">Travail</a>

      <a class="item tasks_perso <?= $_SESSION['category'] === 'perso' ? 'active' : '' ?>" href="index.php?category=perso">Perso</a>

      <a class="item tasks_cart <?= $_SESSION['category'] === 'cart' ? 'active' : '' ?>" href="index.php?category=cart">Liste de courses</a>
    <?php else: ?>
      <a class="item active" href="index.php?category=all">All</a>

      <a class="item tasks_work" href="index.php?category=work">Travail</a>

      <a class="item tasks_perso" href="index.php?category=perso">Perso</a>

      <a class="item tasks_cart" href="index.php?category=cart">Liste de courses</a>
  <?php endif ?>

  </nav>

  </header>

  <main class="main">
