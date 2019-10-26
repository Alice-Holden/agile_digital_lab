<?php 

// Get id number from request
$id = $_GET['id'] ?? null;
require_once('db_connect.php');

// Prepare query for getting message by id
$query = $mysql->prepare("SELECT * FROM `message` WHERE id = ?");
// Insert id into query 
$query->bind_param("i", $id);
// execute query to DB
$query->execute();
// Get cursor
$result = $query->get_result();

$query->close();

// Fetch from DB cursor
$message = $result->fetch_object();

require_once('views/_header.php');
require_once('views/_message_view.php');
require_once('views/_footer.php');