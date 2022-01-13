<!DOCTYPE html>
<html>
<head>
<title>add mark</title>
</head>
<body background="logo.jpg">
<div style="height: 300px;border: 5px solid darkgrey;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);width: 400px;background-color: lightskyblue;">
<form action="marklist.php" method="post" style="text-align: center;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);">
<h2>view mark!</h2><br><br>
<label style="color: white">Registration No. </label>
<select name="rno">
<?php
require("config.php");
$query="select * from student";
$res=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($res)){
echo "<option>".$row['reg_no']."</option>";
}
?>

</select><br><br>

<input type="submit" name="submit">

</form>
</div>

</body>
</html>

