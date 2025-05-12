<?php

echo "<pre>";
//  print_r ($_GET);
//  print_r ($_POST);

echo "</pre>";


// if (empty($_POST["name"]), empty($_GET["email"]), empty($_GET["phone"]), empty($_GET["date"])) {
//     echo "Please fill out all fields";
// } exit;

// $name = !empty($_POST["name"]) ? $_POST["name"] :"";
// $phone = !empty($_POST["phone"]) ? $_POST["phone"] :"";
// $email = !empty($_POST["email"]) ? $_POST["email"] :"";
// $date = !empty($_POST["date"]) ? $_POST["date"] :"";
// $time = !empty($_POST["time"]) ? $_POST["time"] :"";
// $area = !empty($_POST["area"]) ? $_POST["area"] :"";
// $city = !empty($_POST["city"]) ? $_POST["city"] :"";
// $state = !empty($_POST["state"]) ? $_POST["state"] :"";
// $post_code = !empty($_POST["post-code"]) ? $_POST[  "post-code"] :"";



// if (empty($name) ){
//     echo "input your name";
// }
// if (empty($phone) ){
//     echo "input your phone";
// }
// if (empty($email) ){
//     echo "input your email";
// }
// if (empty($date) ){
//     echo "input your date";
// }
// if (empty($time) ){
//     echo "input your time";
// }
// if (empty($area) ){
//     echo "input your area";
// }
// if (empty($city) ){
//     echo "input your city";
// }
// if (empty($state) ){
//     echo "input your state";
// }
// if (empty($post_code) ){
//     echo "input your post code";
// }

// $required_fields = [
//     'name' => 'input your name',
//     'phone' => 'input your phone',
//     'email' => 'input your email',
//     'date' => 'input your date',
//     'time' => 'input your time',
//     'area' => 'input your area',
//     'city' => 'input your city',
//     'state' => 'input your state',
//     'post_code' => 'input your post code',
// ];

// foreach ($required_fields as $field => $error_message) {
//     if (empty($_POST[$field])) {
//         echo $error_message . '<br>';
//     }
// }



// echo "Name: $name <br>";
// echo "Phone: $phone <br>";
// echo "Email: $email <br>";
// echo "Date: $date <br>";
// echo "Time: $time <br>";
// echo "Area: $area <br>";
// echo "City: $city <br>";
// echo "State: $state <br>";
// echo "Post Code: $post_code <br>";



$name = !empty($_POST["name"]) ? $_POST["name"] : "";
$phone = !empty($_POST["phone"]) ? $_POST["phone"] : "";
$email = !empty($_POST["email"]) ? $_POST["email"] : "";
$date = !empty($_POST["date"]) ? $_POST["date"] : "";
$time = !empty($_POST["time"]) ? $_POST["time"] : "";
$area = !empty($_POST["area"]) ? $_POST["area"] : "";
$city = !empty($_POST["city"]) ? $_POST["city"] : "";
$state = !empty($_POST["state"]) ? $_POST["state"] : "";


$required_fields = [
    'name' => 'input your name',
    'phone' => 'input your phone',
    'email' => 'input your email',
    'date' => 'input your date',
    'time' => 'input your time',
    'area' => 'input your area',
    'city' => 'input your city',
    'state' => 'input your state',
    
];

$has_error = false;

foreach ($required_fields as $field => $error_message) {
    if (empty($_POST[$field])) {
        echo $error_message . '<br>';
        $has_error = true;
    }
}

if (!$has_error) {
    echo "Name: $name <br>";
    echo "Phone: $phone <br>";
    echo "Email: $email <br>";
    echo "Date: $date <br>";
    echo "Time: $time <br>";
    echo "Area: $area <br>";
    echo "City: $city <br>";
    echo "State: $state <br>";
  
}









?>