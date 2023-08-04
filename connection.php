<?php
$conn = mysqli_connect("localhost","root","","zain2");
if(!$conn){
    die("queryfailed");
}
else{
    echo "Connected";
}

?>