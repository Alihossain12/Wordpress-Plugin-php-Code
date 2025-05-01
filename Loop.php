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



// $students = array(
//   'name' => ['Ali Hossain', 'farhan', 'Naim'],
//   'roll' => [21, 22, 23],
//   'age' => [20, 21, 22],
//   'city' => ['Dhaka', 'Chittagong', 'Khulna'],
//   'country' => ['Bangladesh', 'India', 'Pakistan'],
//   'id' => [1, 2, 3],
//   'email' => ['ali@.com', 'farhan@.com', 'naim@.com'],
//   'phone' => ['01700000000', '01800000000', '01900000000'],
//   'postcode' => ['1212', '1213', '1214'],
// );

// foreach ($students['name'] as $index => $name) {
//   echo "Student $index: ";
//   echo "<br>";
//   echo "Name: $name";
//   echo "<br>";
//   echo "Roll: " . $students['roll'][$index];
//   echo "<br>";
//   echo "Age: " . $students['age'][$index];
//   echo "<br>";
//   echo "City: " . $students['city'][$index];
//   echo "<br>";
//   echo "Country: " . $students['country'][$index];
//   echo "<br>";
//   echo "ID: " . $students['id'][$index];
//   echo "<br>";
//   echo "Email: " . $students['email'][$index];
//   echo "<br>";
//   echo "Phone: " . $students['phone'][$index];
//   echo "<br>";
//   echo "Postcode: " . $students['postcode'][$index];
//   echo "<br>";
//   echo "<hr>";
// }



$products = array(
    'name' => ['Product 1', 'Product 2', 'Product 3'],
    'price' => [100, 200, 300],
    'quantity' => [10, 20, 30],
    'category' => ['Electronics', 'Clothing', 'Books'],
    'brand' => ['Brand A', 'Brand B', 'Brand C'],
    'id' => [1, 2, 3],
    'description' => ['Description of Product 1', 'Description of Product 2', 'Description of Product 3'],
);
foreach ($products['name'] as $index => $name) {
    echo "Product $index: ";
    echo "<br>";
    echo "Name: $name";
    echo "<br>";
    echo "Price: " . $products['price'][$index];
    echo "<br>";
    echo "Quantity: " . $products['quantity'][$index];
    echo "<br>";
    echo "Category: " . $products['category'][$index];
    echo "<br>";
    echo "Brand: " . $products['brand'][$index];
    echo "<br>";
    echo "ID: " . $products['id'][$index];
    echo "<br>";
    echo "Description: " . $products['description'][$index];
    echo "<br>";
    echo "<hr>";
}

?>