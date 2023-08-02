<?php
$conn = mysqli_connect("localhost","root","","zain");
if(!$conn){
    die("queryfailed");
}
else{
    echo "Connected";
}

?>