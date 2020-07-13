<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php else : ?>
	<center><p>Поздравляем, вы успешно сдали тест!</p></center>
<?php  endif ?>