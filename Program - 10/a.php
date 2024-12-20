<!--a. Develop a PHP program to count the occurrences of Aadhaar numbers present in a  text. -->

<?php 
// Function to count occurrences of Aadhaar numbers in text 
function countAadhaarOccurrences($text) { 
 // Define the Aadhaar number pattern (12 digits) 
 $aadhaarPattern = "/\b\d{12}\b/"; 
 // Use preg_match_all to find all matches in the text 
 preg_match_all($aadhaarPattern, $text, $matches); 
 // Count the occurrences 
 $occurrencesCount = count($matches[0]); 
 return $occurrencesCount; 
} 
// Example usage 
$text = "The Aadhaar number of person A is 123456789012 and person B is  98765432101223. Person C does not have an Aadhaar number."; 
// Count the occurrences of Aadhaar numbers in the text 
$occurrencesCount = countAadhaarOccurrences($text); 
// Display the result 
echo "Occurrences of Aadhaar numbers in the text: $occurrencesCount\n"; ?>
