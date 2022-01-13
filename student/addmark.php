<!DOCTYPE html>
<html>
<head>
<title>add mark</title>
</head>
<body background="logo.jpg" >
<div style="height: 400px;border: 5px solid darkgrey;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);width: 300px;background-color: lightskyblue;">
<form action="process_mark.php"method="post" style="text-align: center;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);">
<h2>Add Mark</h2><br><br>
<label style="color: black">Registration No. </label>
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

<input type="text" name="m1" placeholder="Mark1" required><br><br>
<input type="text" name="m2" placeholder="Mark2" required><br><br>
<input type="text" name="m3" placeholder="Mark3" required><br><br>
<input type="text" name="m4" placeholder="Mark4" required><br><br>
<input type="text" name="m5" placeholder="Mark5" required><br><br>
<input type="submit" name="submit">
<button><a href="marklist.php" style="text-decoration:none">Marklist</a></button>

</form>
</div>
</div>
</body>
</html>