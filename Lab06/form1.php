<html>
<head>
  <style>
    select {
      margin-bottom: 10px;
    }
    #submit {
      margin-top: 10px;
    }
  </style>
</head>
<body>
    <form action="form1_submit.php" method="post">
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br>

        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br>

        <label for="age">Age: </label><br>
        <input type="number" id="age" name="age"><br>

        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email"><br>

        <input type="submit" id="submit" value="Submit">
    </form>
</body>
</html>
