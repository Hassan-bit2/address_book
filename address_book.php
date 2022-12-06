<?php
session_start();
include ("config.php"); //To include config.php file in this file
?>

<html>
<body>

<h1>Address Book</h1>

<form method="POST">
<label for="username">Contact Name</label>
<input type='text' name="username" required /><br>
<label for="password">Contact Number</label>
<input type='text' name='password' required /><br>
<input type='submit' value='submit to directory' name='submit'><br><br>		

</form>

<?php

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
		
		header("Location: display.php");

// Connecting to the Database
	  
	  // Create a connection 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `login_details` (`username`, `password`, `is_admin`) VALUES ('$username', '$password', 0)";
        $result = mysqli_query($conn, $sql);
		echo 'done';
		
	
	}
	
	
?>



		

</body>
</html>