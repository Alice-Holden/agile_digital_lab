<?php
    
$mysql = new mysqli("127.0.0.1", "root", "1q2w3e4r", "digital_lab");

// If connection error happen
if($mysql->connect_error) {
	exit('Error connecting to database'); 
}

// Set the right connection charset
$mysql->set_charset("utf8");