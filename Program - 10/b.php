<!-- b. Develop a PHP program to find the occurrences of a given pattern and replace them  with a text. -->

<?php 
function replacePattern($inputString, $pattern, $replacementText) {  // Use preg_replace to find occurrences of the pattern and replace with the specified  text 
 $resultString = preg_replace($pattern, $replacementText, $inputString); 
 // Output the original and modified strings 
 echo "Original String: $inputString\n"; 
 echo "</br>"; 
 echo "Modified String: $resultString\n"; 
} 
// Example usage 
$inputString = "The quick brown fox jumps over the lazy dog."; 
$pattern = "/quick brown fox/i"; // Case-insensitive pattern to match "quick brown fox" $replacementText = "swift and agile cat"; 
replacePattern($inputString, $pattern, $replacementText); 
?>
