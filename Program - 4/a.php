<!-- a.Develop a PHP program to find the square root of a number by using the newton’s  algorithm. -->

<?php 
// Function to find the square root using Newton's method 
function sqrtNewton($number, $epsilon = 1e-10) { 
 // Initial guess 
 $guess = $number / 2; 
 // Iterate until the guess is close enough 
 while (abs($guess * $guess - $number) > $epsilon) { 
 // Update the guess using the Newton's method formula 
 $guess = 0.5 * ($guess + $number / $guess); 
 } 
 return $guess; 
} 
// Example usage 
$number = 25; // Replace with the number for which you want to find the square root $result = sqrtNewton($number); 
echo "Square root of $number is approximately: $result"; 
?>
