<?php
require_once('db_connect.php');
require_once('views/_header.php');

// Get all message from DB
$messages = $mysql->query("SELECT * FROM `message`");
require_once('views/_main.php');
require_once('views/_footer.php');