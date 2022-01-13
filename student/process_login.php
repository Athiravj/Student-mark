<?php
session_start();
require('config.php');
if(!empty($_POST)){
$unm=$_POST["username"];
$q="select * from staff where user_name='$unm'";
$res=mysqli_query($conn,$q)or die("wrong query");
$row=mysqli_fetch_assoc($res);
if(!empty($row))
{
if($_POST['password']==$row['password']){
$_SESSION=array();
$_SESSION['unm']=$row['user_name'];
$_SESSION['status']=true;
header("Location:staff_home.php?a=1");
}
else
{
header("Location:login.php?ok=1");
}
}
else{
header("Location:login.php?y=1");
}
}
?>
