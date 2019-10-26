<div class="row">
	<div class="col">
		<?php if($message):?>
		<h3><?php echo $message->title ?></h3>
		<p><span class="badge badge-info"><?php echo $message->name ?></span> <small> <?php echo $message->created_at ?></small></p>
		<p><?php echo $message->body ?></p>
		<?php else: ?>
			<div class="alert alert-danger">
				Сообщение не найдено
			</div>
		<?php endif; ?>
		
		<p><a href="index.php">Назад</a></p>
		
	</div>
	
</div>