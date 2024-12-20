<!-- Develop a PHP Program to compute the roots of a quadratic equation by accepting  the coefficients. Print the appropriate messages. -->


<html> 
<head> 
<title> PHP Program To find the roots of the given Quadratic Equation</title> </head> 
<body>  
<form method="post"> 
<table border="0" align="center"> 
<caption><h3><center><hr>Rootsof Quadratic Equation<hr><center></h3></caption> <tr> 
<td><input type="text" name="num1" placeholder="Enter 1st value"/></td> </tr> 
<tr> 
<td><input type="text" name="num2" placeholder="Enter 2nd value"/></td> </tr> 
<tr> 
<td><input type="text" name="num3" placeholder="Enter 3rd value"/></td><br/> </tr> 
<tr> 
<td><center><input type="submit" name="submit" value="SUBMIT"/></center> </td> 
</tr> 
</table> 
</form> 
<?php 
if(isset($_POST['submit'])){ 
$a = $_POST['num1']; 
$b = $_POST['num2']; 
$c = $_POST['num3']; 
$precision = 4; 
echo "Coefficients are:<br/> a=$a <br/> b=$b <br/> c=$c <br/>"; echo "<br/>"; 
$d = $b * $b - 4 * $a * $c; // Discriminant of a quadratic equation echo "Discriminant is :$d "; 
echo "<br/><br/>"; 
if($d < 0) 
{ 
echo " ROOTS ARE COMPLEX NUMBERS. " ; 
echo "<br/><br/>"; 
echo " Roots of quadratic equation are: " ; 
echo "<br/>"; 
echo -$b/(2*$a). " + " .number_format(sqrt(-$d)/(2*$a), $precision)."i "; echo ", ". -$b/(2*$a).number_format(-sqrt(-$d)/(2*$a), $precision)."i" ; } 
else if($d == 0) 
{ 
echo "BOTH ROOTS ARE EQUAL.<br/><br/>"; 
$root1 = -$b /(2* $a); 
$root2=-$b/(2*$a); 
echo "Root of quadratic equation is: <br/>"; 
echo "Root1:".$root1."<br/>"; 
echo "Root2:".$root2."<br/>"; 
return 0; 
} 
else
{ 
echo "ROOTS ARE REAL NUMBERS.<br/>"; 
$root1 = ( -$b + sqrt($d)) / (2* $a ); 
$root2 = ( -$b - sqrt($d)) / (2* $a); 
echo "Roots of quadratic equation are:<br/>"; 
echo "Root1:".$root1."<br/>"; 
echo "Root2:".$root2."<br/>"; 
} 
return 0; 
} 
?> 
</body> 
</html>
