<?php
session_start();
// Die if connection was not successful
// Connecting to the Database
$servername = "localhost";
$db_username = "root";
$db_password = "root";
$database = "address_book";

// Create a connection
$conn = mysqli_connect($servername, $db_username, $db_password, $database);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
     echo "Connection was successful<br>";
}
?>

<html>
<body>

<h1>Address Book</h1>

<form action="address_book.php" method="POST">

<label>First Name</label>
<input name="firstname" type="text"><br>
<label>Last Name</label>
<input name="lastname" type="input"></label><br>
<label>Mobile no.</label>
<input name="mobileno"type="number" ><br>
<label>Address</label>
<input name="address" type="text"><br>
<label>Office</label>
<input name="office" type="text"><br>
<label>Blood Group</label>
<input name="bloodgroup" type="text">
<input type="submit" name="submit">

</form>

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
		$mobileno = $_POST['mobileno'];
		$address = $_POST['address'];
		$office = $_POST['office'];
		$bloodgroup = $_POST['bloodgroup'];


$sql = "INSERT INTO `address_book_details`(`firstname`, `lastname`, `mobile`, `address`, `office`, `bloodgroup`) VALUES ('$firstname', '$lastname', '$mobileno', '$address', '$office', '$bloodgroup')";
$result = mysqli_query($conn, $sql);
}
else {
	echo "No Data is not insert in database";
}

?>
