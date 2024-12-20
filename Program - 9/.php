<!-- Develop a PHP program that illustrates the concept of classes and objects by reading  and printing employee data, including Emp_Name, 
 Emp_ID, Emp_Dept,  Emp_Salary, and Emp_DOJ. -->


 <?php 
// Define the Employee class 
class Employee { 
 // Properties 
 public $empName; 
 public $empID; 
 public $empDept; 
 public $empSalary; 
 public $empDOJ; 
 // Constructor 
 public function __construct($name, $id, $dept, $salary, $doj) { 
 $this->empName = $name; 
 $this->empID = $id; 
 $this->empDept = $dept; 
 $this->empSalary = $salary; 
 $this->empDOJ = $doj; 
 } 
 // Method to display employee data 
 public function displayEmployeeData() { 
 echo "Employee Name: " . $this->empName . "\n"; 
 echo "</br>"; 
 echo "Employee ID: " . $this->empID . "\n"; 
 echo "</br>";
 echo "Employee Department: " . $this->empDept . "\n"; 
 echo "</br>"; 
 echo "Employee Salary: $" . $this->empSalary . "\n"; 
 echo "</br>"; 
 echo "Employee Date of Joining: " . $this->empDOJ . "\n"; 
 echo "</br>"; 
 echo "--------------------------\n"; 
 } 
} 
// Example usage 
// Create employee objects 
$employee1 = new Employee("John Doe", "E001", "IT", 60000, "2022-01-15"); $employee2 = new Employee("Jane Smith", "E002", "HR", 55000, "2022-02-01"); 
// Display employee data 
echo "Employee Information:\n"; 
echo "</br>"; 
echo "--------------------------\n"; 
echo "</br>"; 
$employee1->displayEmployeeData(); 
echo "</br>"; 
$employee2->displayEmployeeData(); 
?>


