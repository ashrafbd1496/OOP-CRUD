<?php  


	/**
	 * Databse Managements Class
	 */
	abstract class DB
	{
		// All database details
		private $host = 'localhost';
		private $db = 'oopcrud';
		private $user = 'root';
		private $pass = '';
		
		private $conn;


		/**
		 * This is For DB Connection 
		 */
		protected function connection()
		{
			$this -> conn = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db );

			return $this -> conn;

		}




	}



?>