<?php 

// 1. Defining and Calling a Function----------
function greet() {
    echo "Hello, World!" . "<br>";
}
greet(); // Output: Hello, World!


// 2 Example:
  
   function add($a, $b) {
       return $a + $b;
   }
   $result = add(5, 10); // Output: 15
   echo $result . "<br>"; // Output: 15





// 2. Function with Parameters--------

function greetUser($name) {
    echo "Hello, $name!";
}
greetUser("John"); // Output: Hello, John!




// Example:

function addNumbers($num1, $num2) {
    return $num1 + $num2;
}
$sum = addNumbers(5, 10); // Output: 15
echo $sum . "<br>"; // Output: 15


//3. Returning Values----------
function addValues($a, $b) {
    return $a + $b;
}
$result = addValues(5, 10);
echo $result . "<br>"; // Output: 15




//4. Function with Type Declarations (PHP 7+)----------

function multiply(int $a, int $b): int {
    return $a * $b;
}
  

 // Example with type declaration

    function divide(float $a, float $b): float {
        if ($b == 0) {
            throw new InvalidArgumentException("Division by zero is not allowed.");
        }
        return $a / $b;
    }
    $result = divide(10.0, 2.0); // Output: 5.0
    echo $result . "<br>"; // Output: 5.0


// Global Scope

$a = 1;
$b = 2;
function addGlobals() {
    global $a, $b;
    return $a + $b;
}
echo addGlobals() . "<br>"; // Output: 3

function counter() {
    static $count = 0;
    $count++;
    return $count;
}
echo counter(); // Output: 1

// Example with global variables

    $x = 5;
    $y = 10;
    function calculateSum() {
        global $x, $y; // Accessing global variables
        return $x + $y;
    }
    $sum = calculateSum(); // Output: 15
    echo $sum . "<br>"; // Output: 15

// $GLOBALS array:

     function add_globals() {
        return $GLOBALS['a'] + $GLOBALS['b'];
    }
    


//  Static Scope--------------


function increment_counter() {
    static $count = 0; // Static variable
    $count++;
    return $count;
}
echo increment_counter() . "<br>"; // Output: 1
echo increment_counter() . "<br>"; // Output: 2
echo increment_counter() . "<br>"; // Output: 3
echo increment_counter() . "<br>"; // Output: 4



// 6. Anonymous Functions (Closures)----------

$greet = function($name) {
    return "Hello, $name!";
};
echo $greet("Alice") . "<br>";
    
    

// Example with an anonymous function
    
   $add = function($a, $b) {
        return $a + $b;
    };
    
    $result = $add(1, 2);
    echo $result; // Output: 3





?>