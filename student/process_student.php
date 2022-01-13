<?php 
$nme=$_POST['Fname'];
$lme=$_POST['Lname'];
$clnme=$_POST['clname'];
$course=$_POST['course'];
$cno=$_POST['Cno'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student(first_name,last_name,college_name,contact_number,course_name)values('$nme','$lme','$clnme','$cno','$course')";
mysqli_query($conn,$sql);
echo "successfully registered";
if ($nme!=' '&&$lme!=''&&$clnme!=''&& $course!=''&&$cno!=''){
  header("Location:staff_home.php?yes=1");
 }
$conn->close();
?>