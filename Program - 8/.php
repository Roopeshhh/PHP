<!-- Develop a PHP program to filter the elements of an array with key names. Sample Input Data: 
1st array: ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', c4 => 'Black') 2nd array: ('c2', 'c4') 
Output: 
Array 
( 
[c1] => Red 
[c3] => White 
)

 -->

 <?php 
// Sample input data 
$colorsArray = ['c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black']; $keysToFilter = ['c2', 'c4']; 
// Function to filter array elements based on key names 
function filterArrayByKeys($inputArray, $keysToFilter) { 
 // Use array_diff_key to filter elements based on keys 
 $filteredArray = array_diff_key($inputArray, array_flip($keysToFilter));   
 return $filteredArray; 
} 
print "orginal array is" ; 
print_r($colorsArray); 
echo "</br>"; 
// Filter the colors array based on the keys provided 
$filteredColors = filterArrayByKeys($colorsArray, $keysToFilter); 
// Display the filtered array 
print_r($filteredColors); 
?>

