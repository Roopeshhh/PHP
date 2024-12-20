<!-- Demonstrating the various forms to concatenate multiple strings Develop program(s) to demonstrate concatenation of strings: 
(i) Strings represented with literals (single quote or double quote) (ii) Strings as variables 
(iii) Multiple strings represented with literals (single quote or double quote) and  variables 
(iv) Strings and string variables containing single quotes as part string contents (v) Strings containing HTML segments having elements with attributes -->


<?php 
// (i) Strings represented with literals (single quote or double quote) 
$literalString1 = 'Hello'; 
$literalString2 = " World"; 
$result1 = $literalString1 . $literalString2; 
echo "(i) Concatenated string using literals: $result1\n"; 
echo "</br>"; 


// (ii) Strings as variables 
$variableString1 = "Strings"; 
$variableString2 = " as variables"; 
$result2 = $variableString1 . $variableString2; 
echo "(ii) Concatenated string using variables: $result2\n"; 
echo "</br>"; 


// (iii) Multiple strings represented with literals and variables 
$combinedString = $literalString1 . $variableString2 . $literalString2; echo "(iii) Concatenated string using literals and variables: $combinedString\n"; echo "</br>"; 
// (iv) Strings and string variables containing single quotes as part of string contents $stringWithSingleQuote = "I'm"; 
$variableWithSingleQuote = 'you\'re'; 
$result4 = $stringWithSingleQuote . " learning, and " . $variableWithSingleQuote . "  coding."; 
echo "(iv) Concatenated string with single quotes: $result4\n";
echo "</br>"; 


// (v) Strings containing HTML segments having elements with attributes $htmlTag = "<a href='https://aitckm.edu.in/' target='_blank'>Click here</a>"; $htmlResult = "HTML: " . $htmlTag; 
echo "(v) Concatenated string with HTML: $htmlResult\n"; 
echo "</br>"; 
?>
