<!-- a). Develop a PHP program to calculate areas of Triangle and Rectangle. -->
 
<!-- PHP Program: Triangle program Without form -->
<?php  
$base = 10;  
$height = 15;  
echo "area with base $base and height $height= " . ($base * $height) / 2;  ?> 


<!-- Python Program: Triangle program with form -->
<html>  
<body>  
<form method = "post">  
Base: <input type="number" name="base">  
<br><br>  
Height: <input type="number" name="height"><br><br>  
<input type = "submit" name = "submit" value="Calculate">  
</form>  
</body>  
</html>  
<?php  
if(isset($_POST['submit']))  
{  
$base = $_POST['base'];  
$height = $_POST['height'];  
$area = ($base*$height) / 2;  
echo "The area of a triangle with base as $base and height as $height is $area";  }  
?>


<!-- Python Program: Rectangle program without form -->
 <?php 
$length=10; 
$breadth=15; 
echo "area with length $length and breadth $breadth=".($length*$breadth); ?>


<!-- Python Program: Rectangle program with form -->
 <html> 
<body> 
<form method="post"> 
Width:<input type="number"name="width"> 
<br><br> 
Length:<input type="number"name="length"><br> 
<input type="submit"name="submit"value="Calculate"> 
</form> 
</body> 
</html> 
<?php 
if(isset($_POST['submit'])) 
{ 
 $width=$_POST['width']; 
 $length=$_POST['length']; 
 $area=$width*$length; 
 echo "The area of a rectangle with $width*$length is $area"; 
} 
?>


