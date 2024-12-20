<!-- Develop a PHP Program(s) to check given number is: 
(i) Odd or even 
(ii) Divisible by a given number (N) 
(iii) Square of a another number
 -->

 <?php 
// Function to check if a number is odd or even 
function checkOddEven($number) { 
 if ($number % 2 == 0) { 
 return "Even"; 
 } else { 
 return "Odd"; 
 } 
} 
// Function to check if a number is divisible by another number (N) 
function checkDivisibility($number, $divisor) { 
 if ($number % $divisor == 0) { 
 return "Divisible by $divisor"; 
 } else { 
 return "Not divisible by $divisor"; 
 } 
} 
// Function to check if a number is the square of another number 
function checkSquare($number) { 
 $sqrt = sqrt($number); 
 if ($sqrt == floor($sqrt)) { 
 return "Square of $sqrt"; 
 } else { 
 return "Not a square of any number"; 
 }
} 
// Example usage 
$givenNumber = 16; 
$divisor = 5; 
// (i) Check if the number is odd or even 
$result1 = checkOddEven($givenNumber); 
echo "Given number is $result1\n"; 
echo "</br></br>"; 
// (ii) Check if the number is divisible by another number (N) 
$result2 = checkDivisibility($givenNumber, $divisor); 
echo "Given number is $result2\n"; 
echo "</br></br>"; 
// (iii) Check if the number is the square of another number 
$result3 = checkSquare($givenNumber); 
echo "Given number is $result3\n"; 
echo "</br></br>"; 
?>
