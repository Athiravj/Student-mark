<!DOCTYPE html>
<html>
<head>
		
	<!-- <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ecms</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css"> -->
</head>
<body background="logo.jpg">
		
		
		<div style="height: 400px;border: 5px solid darkgrey;position: absolute;top: 50%; left:50%;transform: translate(-50%,-50%);width: 700px;background: lightskyblue; ">

		<form 	action="process_login.php" method="post" style="text-align: center; position: absolute;top: 50%; left:50%;transform: translate(-50%,-50%);">
			<label>Username:</label>
			<input type="text" placeholder="Username" name="username" id="user" required><br><br>
			<label>Password:</label>
			<input type="password" placeholder="Password" name="password" id="pass" required><br><br>

			<button class="btn1">Sign In</button><br><br>
			 or<br>
			<button><a href="staff_registration.php"style="text-decoration: none;">Sign UP</a></button><br><br>
			<a href="regno.php">ViewMarklist</a>

			</form>
	        </div>
		     <?php
              if(isset($_GET['ok']))
              {
                echo '<font style="color:red;">incorrect password</font>';
                echo'<br><br>';

              }

             if(isset($_GET['y']))
             {
             echo "<font>invalid user</font>";
             echo '<br><br>';
             }
             ?>
		


		

</body>
</html>