<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
        $servername = "db";
        $username = "example";
        $password = "example";
        $dbname = "regformdata";
        $tablename = "regtable";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn === false) {
    die("Connection failed: "
        . mysqli_connect_error());
}

$first_name = $_REQUEST['fname'];
$last_name = $_REQUEST['lname'];
$gender = $_REQUEST['gender'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$city = $_REQUEST['city'];
$department = $_REQUEST['department'];

$sql2 = "INSERT INTO regform VALUES (first_name, last_name, gender, phone, email, city, department)";
if(mysqli_query($conn, $sql)){
    echo "<h3>Data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$first_name\n $last_name\n "
        . "$gender\n $phone \n $email \n $city\n $department");

} else{
	echo "ERROR: Could not insert the data values $sql. "
		. mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
    </center>
</body>
 
</html>