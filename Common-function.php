
<?php

echo "Hello, World!" . "<br>";
function divide(float $a, float $b): float {
    if ($b == 0) {
        throw new InvalidArgumentException("Division by zero is not allowed.");
    }
    return $a / $b;
} 

?>