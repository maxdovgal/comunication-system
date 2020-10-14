<?php 

	require_once('./config.php');

	$login = htmlspecialchars($_POST['login']);
	$password = htmlspecialchars($_POST['password']);

	$sql = "INSERT INTO users (login, password) 
					VALUES (:login, :password)";

	$stmt = $db->prepare($sql);

	$stmt->bindValue(':login', $login);
	$stmt->bindValue(':password', $password);

	$stmt->execute();

	header('Location: index.php');

?>