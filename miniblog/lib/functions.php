<?php

$mysqli = false;
function connectDB(){
	global $mysqli;
	$mysqli = new mysqli("127.0.0.1", "root", "", "videokurs_local_db");
	$mysqli->query("SET NAMES 'utf-8'");
}

function get($table){
	global $mysqli;
	connectDB();
	$result_set = $mysqli->query("SELECT * FROM `$table`");
	closeDB();
	return resultSetToArray($result_set);
}

function getAllArticles(){
	return get("articles");
}

function getAllGuestBookComments(){
	return get("guestbook");
}

function addGuestBookComment($comment){
	global $mysqli;
	connectDB();
	$name = $_SESSION["email"];
	$success = $mysqli->query("INSERT INTO `guestbook` (`name`, `comment`) VALUES 
		('$name', '$comment')");
	closeDB();
	return $success;
}

function addUser($email, $password){
	global $mysqli;
	connectDB();
	$success = $mysqli->query("INSERT INTO `users` (`email`, `password`) VALUES 
		('$email', '$password')");
	closeDB();
	return $success;
}

function checkUser($email, $password){
	global $mysqli;
	connectDB();
	$result_set = $mysqli->query("SELECT * FROM `users` 
		WHERE `email` = '$email' AND `password` = '$password'");
	closeDB();
	if ($result_set->fetch_assoc()) return true;
	else return false;
}

function getArticle($id){
	global $mysqli;
	connectDB();
	$result_set = $mysqli->query("SELECT * FROM `articles` WHERE `id`='$id'");
	closeDB();
	return $result_set->fetch_assoc();	
}

function resultSetToArray($result_set){
	$array = array();
	while (($row = $result_set->fetch_assoc()) != false) {
		$array[] = $row;
	}
	return $array;

}

function closeDB(){
	global $mysqli;
	$mysqli->close();
}

?>