<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <!-- external GET-->
<form action="test.php" method="get">
        <label for="firstName">FirstName</label>
        <input type="text" name="firstName">
        <br><br>
        <label for="lastName">LastName</label>
        <input type="text" name="LastName">
        <br><br>
        <label for="Email">Email</label>
        <input type="Email" name="Email">
        <br><br>
        <label for="Age">Age</label>
        <input type="number" name="Age">
        <br><br>
        <label for="Gender">Gender</label>
        <input type="text" name="Gender">
        <br><br>
        <input type="submit" value="Submit" name="Submit">
    </form>

    <!-- External post-->

    <form action="test.php" method="post">
        <label for="firstName">FirstName</label>
        <input type="text" name="firstName">
        <br><br>
        <label for="lastName">LastName</label>
        <input type="text" name="LastName">
        <br><br>
        <label for="Email">Email</label>
        <input type="Email" name="Email">
        <br><br>
        <label for="Age">Age</label>
        <input type="number" name="Age">
        <br><br>
        <label for="Gender">Gender</label>
        <input type="text" name="Gender">
        <br><br>
        <input type="submit" value="Submit" name="Submit">
    </form>

    <!-- Internal -->

    <form action=<?php echo $_SERVER['PHP_SELF']?> method="post">
        <label for="firstName">FirstName</label>
        <input type="text" name="firstName">
        <br><br>
        <label for="lastName">LastName</label>
        <input type="text" name="LastName">
        <br><br>
        <label for="Email">Email</label>
        <input type="Email" name="Email">
        <br><br>
        <label for="Age">Age</label>
        <input type="number" name="Age">
        <br><br>
        <label for="Gender">Gender</label>
        <input type="text" name="Gender">
        <br><br>
        <input type="submit" value="Submit" name="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        echo $_POST["firstName"] . "<br>";
        echo $_POST["LastName"]. "<br>";
        echo $_POST["Email"]. "<br>";
        echo $_POST["Age"]. "<br>";
        echo $_POST["Gender"]. "<br>";
    }
    ?>
</body>
</html>