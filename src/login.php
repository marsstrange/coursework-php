<?php
	session_start();
	setcookie('username', $_POST['username'], time()+60*60*24);
	$password = $_POST['password'];
	$username = $_POST['username'];

	header("Location: http://{$username}:{$password}@localhost/app/view/news.php");
	exit();
