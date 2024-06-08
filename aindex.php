<?php
$string = "Hello, World!"; // String
$integer = 20; // Integer
$float = 20.5; // Float
$boolean = true; // Boolean
$array = array("PHP", "Python", "JavaScript"); // Array
$null = null; // Null

echo $string . "<br>";
echo $integer . "<br>";
echo $float . "<br>";
echo ($boolean ? 'true' : 'false') . "<br>";
echo implode(", ", $array) . "<br>";
echo $null . "<br>";
?>