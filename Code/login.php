<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="external.css">

</head>
<body>
<div class="a"><pre><p>
		<span style="color:silver;font-family:Courier;font-size:30px"><a style="text-decoration:none;color:silver;" href="home_page.php">DEBATHON</a></span>				<span style="color:silver;font-family:Courier"><a style="text-decoration:none;color:silver;"href="debates.html">DEBATES</a></span>				<span style="color:silver;font-family:Courier"><a style="text-decoration:none;color:silver" href="home_page.php">Polls</a></span>			<span style="color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%"></span>		<span style="color:silver;font-family:Courier"><a style="text-decoration:none;color:silver;" href="login.php">Sign In</a></span>	<span style="color:silver;font-family:Courier"><a style="text-decoration:none;color:silver;" href="register.php">Sign Up</a></span></p></pre></div>
<div class="b">
			</div>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>