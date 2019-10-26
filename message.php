<?php

$action = $_GET['action'];
require_once('db_connect.php');

	// If form was submitted
	if($action == 'create'){
		$errors = [];

		// Get post data to variables
		$name = $_POST['name'] ?? null;
		$title = $_POST['title'] ?? null;
		$body = $_POST['body'] ?? null;

		// Validate post data
		if(empty($name)){
			$errors[] = 'Имя обязательно для заполнения';
		}
		if(empty($body)){
			$errors[] = 'Сообщение обязательно для заполнения';
		}

		if(empty($errors)){
			// Isert message in table
			$query = $mysql->prepare("INSERT INTO `message` (`name`, `title`, `body`, `created_at`) VALUES (?, ?, ?, NOW())");
			$query->bind_param("sss", $name, $title, $body);
			$result = $query->execute();
			$query->close();

			// If row was not inserted
			if($result == false){
				$errors = 'Ошибка базы данных';
			}else{
				// On succes will redirect to main page
				header('location: index.php?action=success');
			}
		}
	}
	
	require_once('views/_header.php');
	require_once('views/_message_form.php');
	require_once('views/_footer.php');