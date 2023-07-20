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

// Array Type in PHP

// 1 Indexed Array
// 2 Associative Array
// 3 Multidimensional Array

// Indexed Array

// 1st Method
echo "<br>";
$arr= Array("Syed","Muhammad","Zain","Sarfraz");
Print_r($arr);
echo "<br>";

// 2nd Method

$array = ["Syed","Muhammad","Zain","Sarfraz"];
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<br>";
// 3rd Method

$arra [0] = "Syed";
$arra [1] = "Muhammad";
$arra [2] = "Zain";
$arra [3] = "Sarfraz";

// for loop in PHP 

for ($x = 0; $x <= 3; $x++) {
    echo "The number is: $arra[$x] <br>";
  };

  foreach($arra as $value){
    echo "$value <br>";
  };

  echo "<pre>";
print_r($arra);
echo "</pre>";

echo "<br>";

// Associative Array

$Marks = [
    "Physics" => "70",
    "Maths" => "80",
    "Cs" => "90",
    "Urdu" => "80"
];
echo "<pre>";
print_r($Marks);
echo "</pre>";

// Foreach loop in PHP
foreach($Marks as $key => $value){
    echo "$key = $value <br>";
};


// while loop in PHP

$j = 0;
while($j < count($arra)){
    echo "$arra[$j]";
    $j++;
};
echo "<br>";

// do while loop in PHP

$zain = 0;

do{
    echo "$arr[$zain] <br>";
    $zain++;
}
while($zain < count($arr));

// multi dimensional array

// indexed array

$result = [
    ["syed","muhammad","zain","sarfraz"],
    ["syed","muhammad","sohaib","sarfraz"]
];

foreach($result as $value){
    foreach($value as $var)
    echo $var[0];
}
?>