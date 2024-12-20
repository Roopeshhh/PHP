<!-- Develop a PHP program to accept the file and perform the following 
 (i) Print the first N lines of a file 
(ii) Update/Add the content of a file.
 -->

 <?php 
// Function to print the first N lines of a file 
function printFirstNLines($filename, $n) { 
 $file = fopen($filename, 'r'); 
 if ($file) { 
 for ($i = 0; $i < $n && !feof($file); $i++) { 
 echo fgets($file); 
 echo "</br></br>"; 
 }  
 fclose($file); 
 }  
 else { 
 echo "Error opening the file."; 
 } 
} 
// Function to update/add content to a file 
function updateFileContent($filename, $newContent) { 
 $file = fopen($filename, 'a'); // 'a' mode opens the file for writing only; places the  pointer at the end of the file 
 if ($file) { 
 fwrite($file, $newContent); 
 fclose($file); 
 echo "File updated successfully."; 
 } else { 
 echo "Error opening the file for updating."; 
 } 
}



// Example usage 
$filename = "example.txt"; 
$linesToPrint = 5; 
// (i) Print the first N lines of a file 
echo "Printing the first $linesToPrint lines of $filename:\n"; 
echo "</br></br>"; 
printFirstNLines($filename, $linesToPrint); 
// (ii) Update/Add content to a file 
$newContent = "This is new content added to the file."; 
echo "</br></br>"; 
updateFileContent($filename, $newContent); 
?>

