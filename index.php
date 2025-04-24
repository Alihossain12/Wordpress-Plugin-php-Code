<?php 

// $name = "Ali hossain";
// $age = 23;
// echo "My name is $name and I am $age years old.";



// $int = 50;
// $float = 50.50;
// $bool = true;
// $null = null;
// echo "Integer: $int, Float: $float, Boolean: $bool, Null: $null\n";



// $array = array ('apple', 'banana', 'orange');
// // $array = array('apple', 'banana', 'orange');
// print_r($array);


// define( 'PT', '3.14');
// const DB_NAME = 'test';


// $name = "Ali Hossain";
// $age = 23;
// $float = 30.3;
// $bool = true;
// $null = null;
// $array = ['apple', 'banana', 12];


// var_dump($name);
// var_dump($age);
// var_dump($float);
// var_dump($bool);
// var_dump($null);
// var_dump($array);


// $name = "Ali Hossain";
// $age = 23;

// printf("My name is %s and I am %d years old.", $name, $age);
// // printf("My name is %s and I am %d years old.", $name, $age);


// --------------------------------

// $students = ["Ali", "Rahim", "Karim", "Sakib", "Rafiq"];
// var_dump($students);

// class student {
//     public $name = 'Ali Hossain';

// }

// $student = new student();
// echo $student->name;





// logical opearetor-----------------------


//AND
//OR
//NOT
//XOR

//AND oparetor---------------

// $num1 = 100;
// $num2 = 20;
// $num3 = 30;

// $condition = $num1 > $num2;
// $condition2 = $num1 > $num3;



// var_dump($condition1 && $condition2);


//OR---------------

/*
$num1 = 100;
$num2 = 20;
$num3 = 30;

$condition = $num1 > $num2;
$condition2 = $num1 > $num3;



var_dump($condition1 || $condition2);  */

// NOT oparetor----------------

// var_dump(!true);


// XOR oparetor---------------

/*
$num1 = 100;
$num2 = 200;
$num3 = 300;

$condition = $num1 > $num2;
$condition2 = $num1 > $num3;



var_dump($condition1 xor $condition2);  */


// Tarnary oparetor------------------

// echo $status == 1  ? "Active" : "Deactive";



/*
------------------------------
$status = 1;

$number = 1;
switch ($status) {
    case 0:
        echo"Pending";
        break; 
        case1:
            echo "Accepted";
            break;
        case 2:
            echo "Rejected";
            break;
        default:
            echo "Unknown status";
        } 


 
*/



// $password = '12345678';

// if (preg_match ('/[a-zA-Z0-9]/', $password) && preg_match ('/[0-9]/', $password) )  {
//     if (preg_match ('/[@$#%*]/', $password)) {
//         echo' strong password';
//     } else {
//         echo 'medium password'; 
// }
// } else{
//     echo 'week password';
// }

//   //Loops-----------------------

//   for ($i = 0; $i < 10; $i--) {
    
// }



// logic bult korar jonne--------------------



    // $for = 6;
    // $fact_result = 1;
    // for ($i = 1; $i <= $for; $i++) {
    //     $fact_result *= $i;
    // }
    // echo $fact_result; 





   // for loop------------------

    // $row = 4;
    // for ($i = 1; $i <= $row; $i++) {
    //     for ($j = 1; $j <= $i; $j++) {
    //         echo "*";
    //     }
    //     echo "\n";
    // }



    // Array-----------------------

    // $array = [1,2,3,4,5];
    // $array = array(1,2,3,4,5);


    //Index array------------------
    // $array = array(1,2,3,4,5);

    // foreach ($array as $key => $value) {
    //     echo "Key: $key, Value: $value\n";
    // }

    // //Associative array------------------
    // $array = array(
    //     'name' => 'Ali Hossain',
    //     'age' => 23,
    //     'address' => 'Dhaka, Bangladesh'
    // );


    // //Multidimensional array------------------
    //   $array = array( 
    //     array(1,2,3),
    //     array(4,5,6),
    //     array(7,8,9)
    //     );

//------------------------------------------------------------------------
    // foreach ($array as $key => $value) {
    //     echo "Key: $key, Value: $value\n";
    $students = [
        ['name' => 'Ali', 'age' => 23],
        ['name' => 'Rahim', 'age' => 25],
        ['name' => 'Karim', 'age' => 22]
    ];
    foreach ($students as $student) {
        echo "Name: " . $student['name'] . ", Age: " . $student['age'] . "\n";
    }
    


?>
