<?php
 
$servername = "localhost";
$username = "db_user";
$password = "password123";
$dbname = "regform";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
 
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$gender = $_REQUEST['gender'];
$regno = $_REQUEST['regno'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$department = $_REQUEST['department'];

$sql = "INSERT INTO $dbname VALUES ('$fname','$lname','$gender','$regno','$email',$department)";

if(mysqli_query($conn, $sql)){
	echo "<h3>data stored in a database successfully."
		. " Please browse your localhost php my admin"
		. " to view the updated data</h3>";

	echo nl2br("\n$first_name\n $last_name\n "
		. "$gender\n $address\n $email");
} else{
	echo "ERROR: Could not insert the data values $sql. "
		. mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>