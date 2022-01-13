<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Registration</title>
</head>
<body background="logo.jpg">
      <div style="height: 500px;border: 2px solid;position: absolute;top: 50%; left:50%;transform: translate(-50%,-50%);width: 700px;background: lightskyblue; ">

		<form action="process_student.php" method="post" style="text-align: center; position: absolute;top: 50%; left:50%;transform: translate(-50%,-50%);">
			<h1>Register Here</h1>
            <input type="text" placeholder="FirstName" name="Fname" id="fnme" required><br><br>
            <input type="text" placeholder="LastName" name="Lname" id="lnme" required><br><br>
	      <input type="text" placeholder="ClgName" name="clname" id="clnme" required><br><br>
		<input type="text" placeholder="CourseName" name="course" id="cnme" required><br><br>
		<input type="text" placeholder="ContactNo" name="Cno" id="cno" required><br><br>
			
            <button >Submit</button><br><br>
			 
			
		


		</form>
</body>
</html>