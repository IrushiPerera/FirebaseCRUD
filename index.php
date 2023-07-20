<html>

<?php

include("config.php");


?>

<head>
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <h1>Student Details</h1>
    <div>
        <form action="code.php" method="POST">
            <input type="text" name="ID" placeholder="Student ID"><br><br>
            <input type="text" name="fname" placeholder="First Name"><br><br>
            <input type="text" name="lname" placeholder="Last Name"><br><br>
            <input type="text" name="email" placeholder="Email "><br><br>
            <input type="text" name="contactNum" placeholder="Contact Number"><br><br>
            <button type="submit" name="submit">Save</button> <br>


        </form>
    </div>

</body>

</html>