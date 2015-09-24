<!DOCTYPE HTML>
<html>
  <head>
	<title>Whatsapp Web</title>
	<link rel="icon" type="image/png" href="icon.png" />
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
  </head>
  <body>
    <div class="back">
		<div id="khushal">
			<div>
				<form id="login_form" action="process.php">
					<div id="username">
						Mobile number: <input type="text" />
					</div>
					<div id="password">
						Password: <input style="margin-left: 2.9em" type="password" />
					</div>
					<input  id="login_button" type="submit" value="Login"/>
				</form>
			</div>
			<div id="sign-up">
				<div id="new_user">
					<p id="size"><strong>Sign Up</strong></p>
				</div>
				<div id="signup_form">
					<div id="form">
						<form action='mysql.php' method='POST'>
							<div class="form1">
								<input class="fill" type="text" placeholder="Full Name" name='fullname' />
							</div>
							<div class="form1">
								<input class="fill" type="text" placeholder="Mobile Number" name='mobilenumber'/>
							</div>
							<div class="form1">
								<input class="fill" type="text" placeholder="Re-enter mobile number" name='Mobilenumber'/>
							</div>
							<div class="form1">
								<input class="fill" type="password" placeholder="Password" name='password'/>
							</div>
							<div class="form1">
								<input class="fill" type="password" placeholder="Re-enter Password" name='Password'/>
							</div>
							<input class="create_account" type="submit" value="Create account" name='submit' />
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
  </body>
</html>