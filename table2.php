<?php
include ('connection.php');

$fetch = "SELECT * FROM `new`";

$data = mysqli_query($conn , $fetch);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <title>Table</title>
</head>
<body>
    <table class="table table-border test-center">
        <thead class="table table-dark">
            <th>First-Name</th>
            <th>Last-Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Age</th>
            <th>Gender</th>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($data)){
                ?>
                <tr>
                    <td><?php echo $row ['FirstName']. "<br>" ?> </td>
                    <td><?php echo $row ['LastName']. "<br>" ?></td>
                    <td><?php echo $row ['Email']. "<br>" ?></td>
                    <td><?php echo $row ['Password']. "<br>" ?></td>
                    <td><?php echo $row ['Age']. "<br>" ?></td>
                    <td><?php echo $row ['Gender']. "<br>" ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>