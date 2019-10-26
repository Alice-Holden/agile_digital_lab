<div class="row">
	<div class="col-12 col-md-6">
		<?php if(!empty($errors)): ?>
			<div class="alert alert-danger">
				<ul>
					<?php foreach($errors AS $error): ?>
						<li><?php echo $error ?></li>
					<?php endforeach; ?>
				</ul>
				
			</div>
		<?php endif; ?>
			<h3 class="mb-4">Новое сообщение</h3>
			<form  action="message.php?action=create" method="post" accept-charset="utf-8">
				<div class="form-group">
					<label for="name">Имя <small class="text-danger">*</small></label>
					<input id="name" type="text" name="name" value="<?php echo $name ?? null ?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="title">Заголовок</label>
					<input id="title" type="text" name="title" value="<?php echo $title ?? null ?>" class="form-control">
				</div>
					<div class="form-group">
					<label for="body">Сообщение <small class="text-danger">*</small></label>
					<textarea id="body" type="text" name="body" value="" class="form-control"><?php echo $body ?? null ?></textarea>
				</div>
			
				<div class="row">
					<div class="col-10">
							<p class="form-text text-muted small">Поля отмеченные звездочкой обязательны для заполнения</p>
					</div>
					<div class="col-2">
							<button type="submit" class="btn btn-success float-right">Добавить</button>
					</div>
				</div>
				
			</form>
	</div>

	
</div>