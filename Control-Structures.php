
<?php

// Control Structures (if, else, switch)


// 1. If Statement -------------------------


 $name = "Ali Hossain";
 $age = 20;

 if ($age >= 18) {
     echo "$name is an adult.";
 } else {
     echo "$name is not an adult.";
 }


 //  2. if...else Statement ----------------------

    $age = 23;

    if ($age < 30) {
        echo "You are an adult.";
    } else {
        echo "You are a senior citizen."; 

    }


    //3. if...elseif...else Statement

    $age = 20;

    if ($age < 18) {
        echo "You are a minor.";
    } elseif ($age >= 18 && $age < 30) {
        echo "You are an adult.";
    } else {
        echo "You are a senior citizen."; 
    }




    // 4. Switch Statement ----------------


    $day = "Monday";

    switch ($day) {
        case "Monday":
            echo "Today is Monday.";
            break;
        case "Tuesday":
            echo "Today is Tuesday.";
            break;
        case "Wednesday":
            echo "Today is Wednesday.";
            break;
        default:
            echo "Invalid day.";
    }

?>