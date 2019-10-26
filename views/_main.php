<div class="row">
	<div class="col">
		<?php if(isset($_GET['action']) && $_GET['action'] == 'success'):?>
			<div class="alert alert-success">Ваше сообщение добавлено</div>
		<?php endif;?>
		<a href="message.php?action=add" class="btn btn-primary mb-3">Добавить новый пост</a>
		<?php if($messages->num_rows>0):?>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
			
						<th>Автор</th>
						<th>Тема</th>
						<th>Дата создания</th>
	
					</tr>
				</thead>

				<tbody>
				 <?php while($message = $messages->fetch_object()): ?>
						<tr>
							<td><?php echo $message->name ?></td>
							<td><a href="view.php?id=<?php echo $message->id ?>"><?php echo $message->title ?></a></td>
							<td><?php echo $message->created_at ?></td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
			<?php else:?>
				<div class="alert alert-info mt-3">Сообщений нет</div>
			<?php endif;?>

	</div>
</div>
