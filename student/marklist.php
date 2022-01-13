<!DOCTYPE html>
<html>
<head>
<title>view marklist</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body background="logo.jpg">
<div style="text-align: center;">
<h1 style="margin-top: 40px;">Mark List</h1>
<table class="table table-striped table-info ">

<th>Reg no</th>
<th>mark1</th>
<th>mark2</th>
<th>mark3</th>
<th>mark4</th>
<th>mark5</th>
<th>total</th>
<th>grade</th>
<button><a href="login.php"style="color: darkgreen; text-decoration: none;">Sign Out</a></button>
<?php


require("config.php");
$r=$_POST['rno'];
$q="select * from marklist where reg_no='$r'";
$res=mysqli_query($conn,$q)or die("wrong query");
$row=$row=mysqli_fetch_assoc($res);
if(!empty($row))
{
?>
  <tr>
    <td><?php echo $row['reg_no']; ?></td>
    <td><?php echo $row['m1']; ?></td>
    <td><?php echo $row['m2']; ?></td>
    <td><?php echo $row['m3']; ?></td>
    <td><?php echo $row['m4']; ?></td>
    <td><?php echo $row['m5']; ?></td>
    <td><?php echo $row['total']; ?></td>
    <td><?php echo $row['grade']; ?></td>
  </tr>
<?php
}
?>
</table>
</div>
</body>
</html>