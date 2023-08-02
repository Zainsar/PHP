<?php
include 'connection.php';

$fetch = "SELECT * FROM `userinfo`";

$data = mysqli_query($conn , $fetch);

while ($row = mysqli_fetch_assoc($data)){
    echo $row ['FirstName']. "<br>";
    echo $row ['LastName']. "<br>";
    echo $row ['Email']. "<br>";
    echo $row ['Password']. "<br>";
    echo $row ['Age']. "<br>";
    echo $row ['Gender']. "<br> <br>";
 }





?>