<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="results1.php" method="GET">

Enter the topic name to confirm : <input type="text" name="t1"><br/>
Enter your opinion to confirm: <input type="radio" name="opinion" value="Yes">YES<br/>
<input type="radio" name="opinion" value="No">No<br/>
<input type="submit" value="submit">

</form>
</body>
</html>