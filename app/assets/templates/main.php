
<ul class="tasks">
  <?php foreach ($tasks as $task): ?>

  <li class="tasks_<?=$task['category']?> <?=($task['done'] ? 'done' : '') ?>">
    <span class="item-labels"> <?php echo $task['title']; ?> </span>
    <form class="item_form" action="" method="">
      <input class="item_form_text" type="text" name="" value="">
      <input type="submit" name="" value="OK">
      <input type="button" name="" value="Annuler">
    </form>
    <div class="item-actions filters">
      <a href="#" class="item fa fa-check-square"></a>
      <a href="#" class="item fa fa-tags"></a>
      <a href="#" class="item fa fa-pencil-square-o item_edit"></a>
      <a href="#" class="item fa fa-trash" ></a>
    </div>
  </li>
<?php endforeach; ?>
</ul>
