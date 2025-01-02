// Write a PHP program that demonstrates the basic usage of try-catch blocks to handle exceptions.

<?php
try {
    // Code that may throw an exception
    $numerator = 100;
    $denominator = 0;
    
    if ($denominator === 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    
    $result = $numerator / $denominator;
    echo "Result: " . $result;
   } catch (Exception $e) 
   {
    // Exception handling code
    echo "An error occurred: " . $e->getMessage();
  }
?>