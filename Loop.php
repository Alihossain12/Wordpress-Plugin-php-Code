<?php

//Loop-----------------

// 1. for Loop


// for ($i = 1; $i <= 5; $i++) {
//     echo "Iteration: $i";
//     echo "<br>";
// }


 // 2. while Loop-------------------

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
// $associativeArray = [
//     "name" => "Ali Hossain",
//     "age" => 20,
//     "city" => "Dhaka"
// ];

// foreach ($associativeArray as $key => $value) {
//     echo "$key: $value";
//     echo "<br>";
// }

//  $foreachArray = ["Ali", "Hossain", "Sakib", "Riyad", "Shakib"];
//  foreach ($foreachArray as $key => $value) {
//      echo "Key: $key, Value: $value";
//      echo "<br>";
//  }



$students = array(
  'name' => ['Ali Hossain', 'farhan', 'Naim'],
  'roll' => [21, 22, 23],
  'age' => [20, 21, 22],
  'city' => ['Dhaka', 'Chittagong', 'Khulna'],
  'country' => ['Bangladesh', 'India', 'Pakistan'],
);

foreach ($students['name'] as $index => $name) {
  echo "Student $index: ";
  echo "<br>";
  echo "Name: $name";
  echo "<br>";
  echo "Roll: " . $students['roll'][$index];
  echo "<br>";
  echo "Age: " . $students['age'][$index];
  echo "<br>";
  echo "City: " . $students['city'][$index];
  echo "<br>";
  echo "Country: " . $students['country'][$index];
  echo "<br>";
  echo "<hr>";
}



?>