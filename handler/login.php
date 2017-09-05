<?php
	/*
	Created by: Akira F. Fukushima
	Github: akiraff2015
	Date: 6 Sept 2017
	File: ./handler/login.php
	*/
	session_start();

	$filepath = realpath(dirname(__FILE__));
	include_once($filepath . '/../models/User.php');

	// Instatiating database
	$db = Database::get_instance();
	$user = new User($db, $db->get_connection());

	// When user clicks the submit login button
	if (isset($_POST['form_login'])) {
		//TODO SQL INJECTION PREVENTION
		$username = $_POST['_username'];
		$password = $_POST['_password'];
		
		if ($user->login($username, $password)) {
			//Will allow to access to welcome.php page
			$_SESSION['login'] = true;
			$_SESSION['username'] = $username;
			header('Location: /dashboard/welcome.php');
			exit;
		}
		// Wrong password, will not allow to head any further.
		else {
			/* Note: don't set $_SESSION['login] == false, since welcome.php
			   depends on isset().
			*/
			header('Location: /index.php');
			exit;
		}
	}
?>
