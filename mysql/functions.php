<?php 
	
	include "database.php";// it is necessary to bring all the data in the data base

	function showAllData(){

		global $connection; // also we have to make $connection a global variable because this variable is in the database file

		$query = "SELECT * FROM users";


		$result = mysqli_query($connection, $query);

			if(!$result) {
		
				die('query failed ' . mysqli_error());
			}

		while ($row = mysqli_fetch_assoc($result)) {

			$id = $row['id'];
								
			echo "<option value='$id'>$id</option>";
		}
	}

	function updateData(){

		global $connection;

		if(isset($_POST['submit'])){

			$name = $_POST['name'];

			$password = $_POST['password'];

			$id = $_POST['select_id'];

			$query = "UPDATE users SET ";
			$query .= "name = '$name', ";
			$query .= "password = '$password' ";
			$query .= "WHERE id = $id ";

			$result = mysqli_query($connection, $query);

			if(!$result){

				die("An error occurred while update data" . mysqli_error($connection));
			}
		}
	}

	function showUsersTable(){

		global $connection;

		$query = "SELECT * FROM users ";

		$result = mysqli_query($connection, $query);

		if(!$result){

			die('Somenthing went wrong while show the users table!');

		}

		while ($row = mysqli_fetch_assoc($result)) {
			
			$id = $row['id'];

			$name = $row['name'];

			$html =  "<tr>";
			$html .= "<td>$id</td>";
			$html .= "<td>$name</td>";
			$html .= "<td>";
			$html .= "<form action='login_delete.php' method='post'>";
			$html .= "<input class='btn btn-primary' type='submit' name='submit' value='Delete'>";
			$html .= "<input type='hidden' name='id' value='$id'/>";
			$html .= "</form>";
			$html .= "</td>";
			$html .= "</tr>";

			echo $html;
		}
	}

	function deleteUsers(){

		global $connection;

		if(isset($_POST['submit'])){

			$id = $_POST['id'];

			$query = "DELETE FROM users ";

			$query .= "WHERE id = $id";

			$result = mysqli_query($connection, $query);

			if(!$result){

				die("Somenthing went wrong while delete an user!");
			}
		}
	}

	function createUser() {

		global $connection;

		if(isset($_POST['submit'])){

		$name = $_POST['name'];

		$password = $_POST['password'];

		$name = mysqli_real_escape_string($connection, $name);
		$password = mysqli_real_escape_string($connection, $password);

		$hashFormat = "$2y$10$";

		$salt = "iusesomecrazystrings22";

		$hashF_salt = $hashFormat . $salt;

		$password = crypt($password, $hashF_salt);

		$query = "INSERT INTO users(name, password)";

		$query .= "VALUES ('$name', '$password')";

		$result = mysqli_query($connection, $query);

		if(!$result) {

			die('query failed while create a new user! ' . mysqli_error());
		}
	}
	}

 ?>