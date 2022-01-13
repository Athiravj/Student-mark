<?php 
 require('config.php');
 if(!empty($_POST['rno'])&&!empty($_POST['m1'])&&!empty($_POST['m2'])&&!empty($_POST['m3'])&&!empty($_POST['m4'])&&!empty($_POST['m5']))
 {
$regno=$_POST['rno'];
$mark1=$_POST['m1'];
$mark2=$_POST['m2'];
$mark3=$_POST['m3'];
$mark4=$_POST['m4'];
$mark5=$_POST['m5'];

$total=$mark1+$mark2+$mark3+$mark4+$mark5;
  if($total>=90){
    $grade='A';
  }
  elseif ($total>=80) {
    $grade='B';
  }
  elseif ($total>=70) {
    $grade='C';
  }
  elseif ($total>=60) {
    $grade='D';
  }
  elseif ($total>=50) {
    $grade='E';
  }
  elseif ($total>=40) {
    $grade='P';
  }
  else{
    $grade='Fail';
  }



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

$sql = "INSERT INTO marklist(reg_no,m1,m2,m3,m4,m5,total,grade)values('$regno','$mark1','$mark2','$mark3','$mark4','$mark5','$total','$grade')";
mysqli_query($conn,$sql);
echo "successfully registered";
}
// if ($regno!='' && $mark1!=' '&&$mark2!=''&&$mark3!=''&& $mark4!=''&&$mark5!=''){
//   header("Location:staff_home.php?yes=1");
//  }
$conn->close();
?>