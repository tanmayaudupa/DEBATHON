<?php
$username="root";
$password="";
$server="localhost";
$conn=mysqli_connect($server,$username,$password,"polls");
extract($_POST);
$query = "INSERT INTO details (Category, Topic, Description,Yes,No,Sum) 
					  VALUES('$category', '$topic', '$description',0,0,0)";
mysqli_query($conn,$query);
mysqli_close($conn);

if($category=="Arts")
	header('location: arts.php');
elseif ($category=="Education") 
	header('location: education.php');
elseif ($category=="Entertainment") 
	header('location: entertainment.php');
elseif ($category=="Fashion") 
	header('location: fashion.php');
elseif ($category=="Health") 
	header('location: health.php');
elseif ($category=="People") 
	header('location: people.php');
elseif ($category=="Politics") 
	header('location: politics.php');
elseif ($category=="Movies") 
	header('location: movies.php');
elseif ($category=="News") 
	header('location: news.php');
elseif ($category=="Philosophy") 
	header('location: philosophy.php');
elseif ($category=="Miscelleneous") 
	header('location: miscelleneous.php');
?>
