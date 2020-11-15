<?php  


	/**
	 * User Managements 
	 */
	class User extends DB
	{
		
		/**
		 * Humaid vai er duayyy chole asoon
		 */
		public function humaidVaiErDua($name, $email, $cell, $uname)
		{	
			$sql = "INSERT INTO users (name, email, cell, uname) VALUES ('$name','$email','$cell','$uname')";
			$data = parent::connection() -> query($sql);

			if ( $data ) {
				return "<p class=\" alert alert-success \">Data Stable ! <button class=\" close \" data-dismiss=\"alert\">&times;</button></p>";
			}
		}




		public function humayadVaiErBorkot()
		{
			
			$sql = "SELECT * FROM users";
			$data = parent::connection() -> query($sql);

			return $data;

		}




		public function humaydVaiErOvisap($id)
		{
			$sql = "DELETE FROM users WHERE id='$id'";
			$data = parent::connection() -> query($sql);


			if ( $data ) {
				return "<p class=\" alert alert-success \">Data deleted successfull ! <button class=\" close \" data-dismiss=\"alert\">&times;</button></p>";
			}

		}



	}










?>