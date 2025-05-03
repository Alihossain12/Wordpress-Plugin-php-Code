
<?php

// Indexed Array (Numerical Keys) --------------------------------

$indexedArray = ["Ali", "Naim", "Sakib", "Riyad", "Farhan", 'Rakib'];
echo $indexedArray[0] . "<br>";
echo $indexedArray[1] . "<br>";
echo $indexedArray[2] . "<br>";
echo $indexedArray[3] . "<br>";
echo $indexedArray[4] . "<br>";
echo $indexedArray[5] . "<br>";


$indexedArray = [ "100","90","80","70","60"];
echo $indexedArray[0] . "<br>";
echo $indexedArray[1] . "<br>";
echo $indexedArray[2] . "<br>";
echo $indexedArray[3] . "<br>";
echo $indexedArray[4] . "<br>";






// Associative Array (Named Keys) ---------------------------------

$associativeArray = [
    "name" => "Ali Hossain",
    "age" => 20,
    "city" => "Dhaka",
    "country" => "Bangladesh",
    "email" => "ali@.com",
    "phone" => "01700000000",
    "postcode" => "1212",
];

  echo $associativeArray["name"] . "<br>";
  echo $associativeArray["age"] . "<br>";
  echo $associativeArray["city"] . "<br>";
  echo $associativeArray["country"] . "<br>";
  echo $associativeArray["email"] . "<br>";
  echo $associativeArray["phone"] . "<br>";
  echo $associativeArray["postcode"] . "<br>";
  echo "<hr>";










// Multidimensional Array (Arrays within Arrays) ------------------


 $students = array(
    'name' => ['Ali Hossain', 'Farhan', 'Naim'],
    'roll' => [21, 22, 23],
    'age' => [20, 21, 22],
    'city' => ['Dhaka', 'Chittagong', 'Khulna'],
    'country' => ['Bangladesh', 'Bangladesh', 'Bangladesh'],
    'id' => [1, 2, 3],
    'email' => ['ali@.com', 'farhan@.com', 'naim@.com'],
    'phone' => ['01700000000', '01800000000', '01900000000'],
    'postcode' => ['1212', '1213', '1214'],
);
 
 ?>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Country</th>
            <th>ID</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Postcode</th>
        </tr>
    </thead>
    <tbody>

    <?php if( is_array( $students ) ) : ?>
        <?php foreach ($students['name'] as $index => $name) : ?>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $students['age'][$index]; ?></td>
                <td><?php echo $students['city'][$index]; ?></td>
                <td><?php echo $students['country'][$index]; ?></td>
                <td><?php echo $students['id'][$index]; ?></td>
                <td><?php echo $students['email'][$index]; ?></td>
                <td><?php echo $students['phone'][$index]; ?></td>
                <td><?php echo $students['postcode'][$index]; ?></td>
            </tr>
        <?php endforeach; ?>

        <?php endif ?>
    </tbody>
</table>


<br>
<br>
<br>




<?php 



$students = array(
    'name' => ['Ali Hossain', 'Farhan', 'Naim'],
    'roll' => [21, 22, 23],
    'age' => [20, 21, 22],
    'city' => ['Dhaka', 'Chittagong', 'Khulna'],
    'country' => ['Bangladesh', 'Bangladesh', 'Bangladesh'],
    'id' => [1, 2, 3],
    'email' => ['ali@.com', 'farhan@.com', 'naim@.com'],
    'phone' => ['01700000000', '01800000000', '01900000000'],
    'postcode' => ['1212', '1213', '1214'],
); 



// Ali Hossain details ------------------------

 echo "My name is: " . $students['name'][0] . "<br>" . "<hr>";
 echo "Roll: " . $students['roll'][0] . "<br>" . "<hr>";
 echo "City: " . $students['city'][0] . "<br>" . "<hr>";
 echo "Country: " . $students['country'][0] . "<br>" . "<hr>";
 echo "ID: " . $students['id'][0] . "<br>" . "<hr>";
 echo "Email: " . $students['email'][0] . "<br>" . "<hr>";
 echo "Phone: " . $students['phone'][0] . "<br>" . "<hr>";
 echo "Postcode: " . $students['postcode'][0] . "<br>" . "<hr>";






// Farhan details ------------------------

echo "My name is: " . $students['name'][1] . "<br>" . "<hr>";
echo "Roll: " . $students['roll'][1] . "<br>" . "<hr>";
echo "City: " . $students['city'][1] . "<br>" . "<hr>";
echo "Country: " . $students['country'][1] . "<br>" . "<hr>";
echo "ID: " . $students['id'][1] . "<br>" . "<hr>";
echo "Email: " . $students['email'][1] . "<br>" . "<hr>";
echo "Phone: " . $students['phone'][1] . "<br>" . "<hr>";
echo "Postcode: " . $students['postcode'][1] . "<br>" . "<hr>";


// Naim details ------------------------

echo "My name is: " . $students['name'][2] . "<br>" . "<hr>";
echo "Roll: " . $students['roll'][2] . "<br>" . "<hr>";
echo "City: " . $students['city'][2] . "<br>" . "<hr>";
echo "Country: " . $students['country'][2] . "<br>" . "<hr>";
echo "ID: " . $students['id'][2] . "<br>" . "<hr>";
echo "Email: " . $students['email'][2] . "<br>" . "<hr>";
echo "Phone: " . $students['phone'][2] . "<br>" . "<hr>";
echo "Postcode: " . $students['postcode'][2] . "<br>" . "<hr>";



 



// 2nd example of Multidimensional Array ------------------

$students = array(
    'name' => ['Ali Hossain', 'farhan', 'Naim'],
    'roll' => [21, 22, 23],
    'age' => [20, 21, 22],
    'city' => ['Dhaka', 'Chittagong', 'Khulna'],
    'country' => ['Bangladesh', 'India', 'Pakistan'],
    'id' => [1, 2, 3],
    'email' => ['ali@.com', 'farhan@.com', 'naim@.com'],
    'phone' => ['01700000000', '01800000000', '01900000000'],
    'postcode' => ['1212', '1213', '1214'],
  );
  
  foreach ($students as $key => $value) {
   echo $key  .  "\n";
   if (is_array($value)) {
        foreach ($value as $index => $item) {
            echo "Index: $index, Value: $item\n";
        }
    } else {
        echo "Value: $value\n";
    }
    echo "<br>";
    echo "<hr>";
  };


 

// 3rd example of Multidimensional Array ------------------

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
    


// 4th example of Multidimensional Array ------------------

$students = array(
  'name' => ['Ali Hossain', 'farhan', 'Naim'],
  'roll' => [21, 22, 23],
  'age' => [20, 21, 22],
  'city' => ['Dhaka', 'Chittagong', 'Khulna'],
  'country' => ['Bangladesh', 'India', 'Pakistan'],
  'id' => [1, 2, 3],
  'email' => ['ali@.com', 'farhan@.com', 'naim@.com'],
  'phone' => ['01700000000', '01800000000', '01900000000'],
  'postcode' => ['1212', '1213', '1214'],
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
  echo "ID: " . $students['id'][$index];
  echo "<br>";
  echo "Email: " . $students['email'][$index];
  echo "<br>";
  echo "Phone: " . $students['phone'][$index];
  echo "<br>";
  echo "Postcode: " . $students['postcode'][$index];
  echo "<br>";
  echo "<hr>";
}







// Creating Arrays ----------------------------------------

 //Using array() function:---------------

 $usingarray = array("Ali", "Naim", "Sakib", "Riyad", "Farhan", 'Rakib');

 echo $usingarray[0] . "<br>";






 // Using short syntax []:--------------------

 $fruits = ["Ali", "Naim", "Sakib", "Riyad", "Farhan", 'Rakib'];

 echo $fruits[0] . "<br>";



$students = [
    'name' => ['Ali Hossain', 'Farhan', 'Naim'],
    'roll' => [21, 22, 23],
    'age' => [20, 21, 22],
    'city' => ['Dhaka', 'Chittagong', 'Khulna'],
    'country' => ['Bangladesh', 'India', 'Pakistan'],
    'id' => [1, 2, 3],
    'email' => ['ali@.com', 'farhan@.com', 'naim@.com'],
    'phone' => ['01700000000', '01800000000', '01900000000'],
    'postcode' => ['1212', '1213', '1214'],
];

echo "My name is {$students['name'][0]}<br><hr>";
echo "{$students['roll'][0]}<br><hr>";
echo "{$students['city'][0]}<br><hr>";
echo "{$students['country'][0]}<br><hr>";
echo "{$students['id'][0]}<br><hr>";
echo "{$students['email'][0]}<br><hr>";
echo "{$students['phone'][0]}<br><hr>";
echo "{$students['postcode'][0]}<br><hr>";






//Accessing Elements---------------------------------------

// echo $students['name'][0] . "<br>"; // outputs "Ali Hossain"
// echo $students['roll'][1] . "<br>"; // outputs "22"
// echo $students['city'][2] . "<br>"; // outputs "Khulna"



// if (isset($students['name'][3])) {
//     echo $students['name'][3];
// } else {
//     echo "Index does not exist";
// }





// Modifying Elements--------------------------------

// $students['name'][0] = 'John Doe';
// echo $students['name'][0]; // outputs "John Doe"

// $students['roll'][1] = 25;
// echo $students['roll'][1]; // outputs "25"

// $students['city'][2] = 'New York';
// echo $students['city'][2]; // outputs "New York"





// Adding Elements----------------------------------

// $students['name'][] = 'Jane Doe';
// echo $students['name'][3]; // outputs "Jane Doe"

// $students['roll'][] = 26;
// echo $students['roll'][3]; // outputs "26"

// $students['city'][] = 'Los Angeles';
// echo $students['city'][3]; // outputs "Los Angeles"




// Removing Elements----------------------------------

// unset($students['name'][0]);
// echo $students['name'][0]; // outputs nothing

// unset($students['roll'][1]);
// echo $students['roll'][1]; // outputs nothing




// Useful Array Functions------------------

//  $count = count($students['name']);
//   echo "Total number of students: $count<br>" . "<hr>";
//   $count = count($students['roll']); 



  // array_values($array)----------

//   $arrayValues = array_values($students['name']);
//   echo "Array Values: ";
//   print_r($arrayValues);
//   echo "<br>" . "<hr>";


  // array_keys($array)----------

    // $arrayKeys = array_keys($students['name']);
    // echo "Array Keys: ";
    // print_r($arrayKeys);
    // echo "<br>" . "<hr>";


    // in_array($needle, $array)----------

    // print_r($fruits);
    // echo "<br>" . "<hr>";
    // echo in_array("Naim", $fruits); // outputs 1
    // echo "<br>" . "<hr>";
    // echo in_array("Naim", $usingarray); // outputs 1



    // array_key_exists($key, $array)----------

        // $keyExists = array_key_exists('name', $students);
        // echo "Key Exists: ";


// Looping through Arrays-------------------


// $foreachArray = ["Ali", "Hossain", "Sakib", "Riyad", "Shakib"];
//     foreach ($foreachArray as $key => $value) {
//         echo "Key: $key, Value: $value";
//         echo "<br>";
//     }
//     foreach ($foreachArray as $value) {
//         echo "Value: $value";
//         echo "<br>";
//     }
//     foreach ($foreachArray as $key => $value) {
//         echo "Key: $key, Value: $value";
//         echo "<br>";
//     }

?>