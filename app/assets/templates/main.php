
<ul class="tasks">
  <?php foreach ($tasks as $index => $task): ?>

  <li class="tasks_<?=$task['category']?> <?=($task['done'] ? 'done' : '') ?>">
    <span class="item-labels"> <?php echo $task['title']; ?> </span>

    <form class="item_form" action="update.php" method="post">
      <input type="hidden" name="id" value=" <?php echo $task['id'] ?> ">
      <input class="item_form_text" type="text" name="title" value="">
      <input type="submit" value="OK">
      <input class="item-form-cancel" type="button" value="Annuler">
    </form>

    <div class="item-actions filters">
      <a href="done.php?id=<?=$task['id']?>" class="item fa fa-check-square"></a>
      <a href="#" class="item fa fa-tags"></a>
      <a href="#" class="item fa fa-pencil-square-o item_edit"></a>
      <a href="delete.php?id=<?=$task['id']?>" class="item fa fa-trash" ></a>
    </div>
  </li>
<?php endforeach; ?>
</ul>
