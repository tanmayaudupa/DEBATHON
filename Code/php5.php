<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php session_start();
		//$_SESSION['debate']=1;
		$_SESSION['home']=1;
		?>
<form action=debate.php method=post>
Enter the topic name to confirm : <input type=text name=heading>
</form>

</body>
</html>