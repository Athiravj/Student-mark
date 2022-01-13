<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Staff Home page</title>
</head>
<body background="logo.jpg">
    <h1 style="color: darkgreen;">Welcome</h1>
    <?php
      if (isset($_SESSION['status'])) {
        echo $_SESSION['unm'];
      }
      ?>
      <br><br><button><a href="login.php"style="color: darkblue; text-decoration: none;">Log Out</a></button>
	  <div style="border: 5px darkblue; position: absolute;top: 50%; left:50%;transform: translate(-50%,-50%);width: 500px;">

	  <form  method="post" style="text-align: center; position: absolute;top: 50%; left:50%;transform: translate(-50%,-50%);">
	  	<h1 style="color:blue;">STAFF HOME</h1><br>
      <button><a href="student_registration.php" style="text-decoration:none">Student Registration</a></button>
      <br><br>	
      <button><a href="addmark.php" style="text-decoration:none">Add_Mark</a></button>
      </form>
      </div>
      
</body>
</html>