<?php 
$nme=$_POST['Fname'];
$lme=$_POST['Lname'];
$clnme=$_POST['clname'];
$des=$_POST['Desig'];
$cno=$_POST['cno'];
$usnm=$_POST['username'];
$pswd=$_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
  {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO staff(f_name,l_name,clg_name,designation,contact_no,user_name,password)values('$nme','$lme','$clnme','$des','$cno','$usnm','$pswd')";
mysqli_query($conn,$sql);
if ($nme!=' '&&$lme!=''&&$clnme!=''&& $des!=''&&$cno!='' && $usnm!='' && $pswd!=''){
  header("Location:login.php?yes=1");
}
$conn->close();
?>