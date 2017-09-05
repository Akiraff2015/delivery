<?php
	/*
	Created by: Akira F. Fukushima
	Github: akiraff2015
	Date: 5 Sept 2017
	File: ./config/Database.php
	*/
	class Database {
		private $connection;
		private static $instance;
		
		private $host = "localhost";
		private $username = "root";
		private $password = "";
		private $db_name = "delivery";
		
		// Singleton
		public static function get_instance() {
			// If Database didnt been instantiated
			if (!self::$instance ) {
				self::$instance = new self();
			}
			return self::$instance;
		}
		
		// Constructor to initialize database connection
		private function __construct() {
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->db_name);
			
			if (mysqli_connect_error()) {
				echo "Failed connecting: " . mysqli_connect_error();
			}
		}
		
		// Get current obj connection from db class
		public function get_connection() {
			return $this->connection;
		}
	}
?>
