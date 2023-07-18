<?php

// print any thing by using echo

 echo "Today Starting PHP <br>" , "Echo use for Multi statement <br>";

 echo "Syed" . " Zain" . " Sarfraz" ."<br>";

//  phpinfo();

// Make Variable

$string =" syed" . " zain" . " sarfraz";
$i =21;
$b = true;
$F = 5.5;

// Make Array

$Arr = array("Zain" , 21 , True , 5.5);

// Check Data Type

"<br>" . var_dump($string) ."<br>";
var_dump($i) ."<br>";
var_dump($b) ."<br>";
var_dump($F) ."<br>";
var_dump($Arr) . "<br>";

// Printing Variable

echo "$string". "<br>";
echo "$i". "<br>";
echo "$b". "<br>";
echo "$F" . "<br>" . "<br>";

//PHP String Function

echo strlen($string) . "<br>";
echo str_word_count($string) . "<br>";
echo strrev($string) . "<br>" ;
echo strpos($string ,"sarfraz") . "<br>" ;
echo str_replace($b , $i , "Zain"). "<br>" ;
echo ucwords($string) . "<br>" ;

// Check Array Max & Min

$TZ = array(22 , 21 ,43 ,44);

// MAX

echo max($TZ) . "<br>";

// MIN

echo min($TZ);
?>