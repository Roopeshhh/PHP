<!-- b.Develop a PHP application that reads scores between 0 and 100 (possibly including  both 0 and 100) and creates a histogram array whose elements contain the number  of scores between 0 and 9, 10 and 19, etc. The last “box” in the histogram should  include scores between 90 and 100. Use a function to generate the histogram. -->

<?php 
// Function to generate histogram from an array of scores 
function generateHistogram($scores) { 
 // Initialize an array to store the histogram 
 $histogram = array_fill(0, 11, 0); // 11 elements for ranges 0-9, 10-19, ..., 90-100 
 // Iterate through the scores and update the histogram 
 foreach ($scores as $score) { 
 $range = floor($score / 10); // Determine the range for the score  $histogram[$range]++; 
 } 
 return $histogram; 
} 
// Example usage 
// You can replace this array with scores inputted by the user or read from a file/database. $scoresArray = [85, 92, 78, 45, 60, 93, 17, 30, 89, 95, 72, 100, 0]; 
// Generate the histogram 
$histogramArray = generateHistogram($scoresArray); 
// Display the histogram 
echo "Histogram:\n"; 
echo "</br></br>"; 
for ($i = 0; $i < count($histogramArray); $i++) { 
 $rangeStart = $i * 10; 
 $rangeEnd = ($i == 10) ? 100 : ($i + 1) * 10 - 1; 
 echo "$rangeStart-$rangeEnd: {$histogramArray[$i]}\n";
echo "</br></br>"; 
} 
?>
