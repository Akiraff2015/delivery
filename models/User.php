<?php
	/*
	Created by: Akira F. Fukushima
	Github: akiraff2015
	Date: 5 Sept 2017
	File: ./models/User.php
	*/
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath . '/../config/Database.php');

	class User {
		private $db;
		private $conn;
		
		// Constructor to use Database instance in User class
		public function __construct(Database $db, $conn) {
			$this->db = $db;
			$this->conn = $conn;
		}
		
		// Boolean method will return either true or false
		
		//TODO: MYSQL INJECTION PREVENTION
		public function login($username, $password) {
			// FETCH from MYSQL
			$sql = "SELECT username, password, id FROM UserTable WHERE username='$username'";
			$row = $this->conn->query($sql);
			
			//If there is a match in username table
			if ($row->num_rows === 1) {
				$row = $row->fetch_assoc();
				
				// If the password matches
				if (password_verify($password, $row['password'])) {
					return true;
				}
				
				// If the password is invalid
				else {
					return false;
				}
			
			// If no username were found in the database
    		} else {
				return false;
			}
		
			$this->conn->close();
		}
		
		//TODO: MYSQLY INJECTION PREVENTION
		public function register($username, $password) {
			//Find if user exists on the database
			$sql = "SELECT username FROM UserTable WHERE username='$username'";
			$row = $this->conn->query($sql);
			
			if ($row->num_rows >= 1) {
				return false;
			}
			
			// Register user to the database
			else {
				$password = password_hash($password, PASSWORD_DEFAULT);
				$sql = "INSERT INTO UserTable (username, password) VALUES ('$username', '$password')";
				$this->conn->query($sql);
				
				return true;
			}
		}
	}
?>
