<html>

<body>
    Welcome <?php echo $_POST["fname"]; ?><br>
    Your email address is:<?php echo $_POST["email"]; ?><br>
    <?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $servername = "localhost";
    $username = "it";
    $password = "smit#1234";
    $dbname = "it_202000096";
    //Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $age= $_POST['age'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
    $sql = "INSERT INTO student (fname, lname, age, gender,email) VALUES ('$fname','$lname','$age','$gender','$email')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>
