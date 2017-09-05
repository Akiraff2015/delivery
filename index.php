<!DOCTYPE html>
<html lang="en">
	<head> 
    	<meta charset="utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    	<meta name="viewport" content="width=device-width, initial-scale=1" />

    	<title>Delivery</title>
	 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="public/js/script.js"></script>
	  
	</head>

	<body>
		<!--TODO: Style form-->
		<div id="form_login">
			<h3>Login Form</h3>

			<form method="POST" action="/handler/login.php">
				<label for="username">Username</label>
				<input type="text" name="_username" required> <br>
					
				<label for="password">Password</label>
				<input type="password" name="_password" required> <br>
					
				<input id="form_login-btn" type="submit" name="form_login" value="Login">
			</form>
			
			<div id="form_login-btn">Click here to register</div>
		</div>
	  
		<div id="form_register">
			<h3>Register Form</h3>
			
			<form method="POST" action="/handler/register.php">
				<div id="#error-message">
					
				</div>
				<label for="reg_username">Username</label>
				<input type="text" name="_regusername" required> <br>
				
				<label for="reg_password">Password</label>
				<input type="password" name="_regpassword" required> <br>
				
				<input id="register_submit" type="submit" name="form_register" value="Register">
			</form>

			<div id="form_register-btn"> Click Here to cancel </div>
		</div>
  </body>
</html>
