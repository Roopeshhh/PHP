<!-- b.Develop a PHP program to generate Floyd’s triangle. -->

<?php 
//function for floyd triangle 
function FloydTriangle($n) 
{ 
 $value = 1; 
 for($i = 1; $i <= $n; $i++) 
 { 
 for($j = 1; $j <= $i; $j++)  
 { 
 echo "$value ";  
 $value++; 
 } 
 echo "<br/>";  
 } 
} 
FloydTriangle(5); 
?>

