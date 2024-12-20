<!-- b). Develop a PHP program to calculate Compound Interest. -->

<!-- PHP Program: -->
 <!DOCTYPE html> 
<html> 
 <body> 
 <h1><center><u>COMPOUND INTEREST</u></center></h1> 
 <form method="POST"> 
 Enter the principle amount: 
 <input type="number" name="p"/><br> 
 Enter rate of interest: 
 <input type="number" name="r"/><br> 
 Enter time: 
 <input type="number" name="t"/><br> 
 Enter number of time interest is compounded: 
 <input type="SUBMIT" value="ci" name='SUBMIT'/><br>  <?php 
 if(isset($_POST['SUBMIT'])) 
 { 
 $p=$_POST['p']; 
 $r=$_POST['r']; 
 $t=$_POST['t']; 
 $ci=$p*(pow((1+($r/100)),$t)); 
 echo "THE COMPOUND INTEREST IS = ".$ci; 
 } 
 ?> 
 </form> 
 </body> 
</html>
