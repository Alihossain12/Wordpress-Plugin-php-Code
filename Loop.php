<?php

//Loop-----------------

// 1. for Loop


// for ($i = 1; $i <= 5; $i++) {
//     echo "Iteration: $i";
//     echo "<br>";
// }


//  2. while Loop-------------------

// $i = 1;

// while ($i <= 50) {
//     echo "Iteration: $i";
//     echo "<br>";
//     $i++;
// }

//  3. do...while Loop-------------------


// $i = 1;

// do {
//     echo "Iteration: $i";
//     echo "<br>";
//     $i++;
// } while ($i <= 5);


// 4. foreach Loop-------------------

//  $foreachArray = ["Ali", "Hossain", "Sakib", "Riyad", "Shakib"];

//  foreach ($foreachArray as $value) {
//      echo "Value: $value";
//      echo "<br>";
//  }


 //Example 1 (Indexed):-------------------

// $indexedArray = ["Ali", "Hossain", "Sakib", "Riyad", "Shakib"];

// foreach ($indexedArray as $value) {
//     echo "Value: $value";
//     echo "<br>";
// }


// Example 2 (Associative):-------------------
$associativeArray = [
    "name" => "Ali Hossain",
    "age" => 20,
    "city" => "Dhaka"
];

foreach ($associativeArray as $key => $value) {
    echo "$key: $value";
    echo "<br>";
}


?>