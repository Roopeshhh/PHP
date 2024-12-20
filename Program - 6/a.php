<!-- a.Develop PHP program to demonstrate the date() with different parameter options. -->

<?php 
// Display the current date in default format (Y-m-d H:i:s) 
echo "Default Format: " . date('Y-m-d H:i:s') . "\n"; 
echo "</br></br>"; 
// Display the current date with a custom format 
echo "Custom Format: " . date('F j, Y, g:i a') . "\n"; 
echo "</br></br>"; 
// Display the current day of the week 
echo "Day of the Week: " . date('l') . "\n"; 
echo "</br></br>"; 
// Display the current month 
echo "Current Month: " . date('F') . "\n"; 
echo "</br></br>"; 
// Display the current year 
echo "Current Year: " . date('Y') . "\n"; 
echo "</br></br>"; 
// Display the current time in 24-hour format 
echo "24-Hour Format: " . date('H:i:s') . "\n"; 
echo "</br></br>"; 
// Display the current time with milliseconds 
echo "Milliseconds: " . date('H:i:s.v') . "\n";
echo "</br></br>"; 
?>
