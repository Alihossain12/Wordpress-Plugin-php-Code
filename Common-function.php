
<?php

// 1. String Functions-----------

function stringFunctions() {
    $str = "Hello, World!";
    echo "Original String: " . $str . "<br>";
    echo "Length: " . strlen($str) . "<br>"; // Length of the string
    echo "Uppercase: " . strtoupper($str) . "<br>"; // Convert to uppercase
    echo "Lowercase: " . strtolower($str) . "<br>"; // Convert to lowercase
    echo "Substring: " . substr($str, 0, 5) . "<br>"; // Substring (first 5 characters)
    echo "Reversed: " . strrev($str) . "<br>"; // Reverse the string
}
stringFunctions();


// strlen()----------

   $string = "Hello, World!";
   $length = strlen($string);
   echo $length; // Output: 13


   //strtoupper() / strtolower()-----------

   $string = "Hello, World!";
   $uppercase = strtoupper($string);
   $lowercase = strtolower($string);
   $ucase = ucwords($string); // Capitalize first letter of each word
   echo $uppercase . "<br>"; // Output: "HELLO, WORLD!"
   echo $lowercase. "<br>"; // Output: "hello, world!"
   echo $ucase . "<br>"; // Output: "Hello, World!"



   //substr()------------

   $string = "Hello, World!";
   $substring = substr($string, 0, 5);
   echo $substring; // Output: "Hello"



//strpos()---------------

 $string = "Hello, World!";
 $position = strpos($string, "World");
 echo $position; // Output: 7

 $string = "Hello, World!";
if (strpos($string, "World") !== FALSE) {
    echo "The string contains 'World'";
} else {
    echo "The string does not contain 'World'";
}



//str_replace()------------
   
$string = "Hello, World!";
$new_string = str_replace("World", "Universe", $string);
echo $new_string; // Output: "Hello, Universe!"



//trim()------------

$string = "   Hello, World!   ";
$trimmed_string = trim($string);
echo $trimmed_string; // Output: "Hello, World!"







//2. Number Functions-----------


 echo abs(-5); // Output: 5


 //is_numeric()-----------

$value = "123.45";
if (is_numeric($value)) {
    echo "The value is numeric.";
} else {
    echo "The value is not numeric.";
}


//abs()-----------

$number = -10;
$absolute_value = abs($number);
echo $absolute_value; // Output: 10


//round()-----------

$number = 3.14159;
$rounded_number = round($number);
echo $rounded_number; // Output: 3








//rand() or mt_rand()-----------

$random_number = rand(1, 100); // Random number between 1 and 100
echo $random_number; // Output: Random number between 1 and 100



//min() / max()-----------



$numbers = [1, 2, 3, 4, 5];
$min_number = min($numbers);
$max_number = max($numbers);
echo $min_number; // Output: 1
echo $max_number; // Output: 5



//3. Constant with define()-----------

define("PI", 3.14159);
echo PI; // Output: 3.14159
echo "The value of PI is: " . PI . "<br>"; // Output: The value of PI is: 3.14159
echo "The value of PI is: " . constant("PI") . "<br>"; // Output: The value of PI is: 3.14159


//Usage:

// define("PI", 3.14159);
// echo "The value of PI is: " . PI . "<br>";
// echo "The value of PI is: " . constant("PI") . "<br>";
?>