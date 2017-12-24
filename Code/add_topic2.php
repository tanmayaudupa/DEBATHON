<?php
session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="wtproj"; // Database name 
$tbl_name="cons"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get data that sent from form 

//$detail=$_POST['detail'];
$name=$_SESSION['username'];
$arguement=$_POST['cons'];
$header=$_SESSION['heading'];
$topic=$_SESSION['topic'];
// $datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(username, conss,heading,topic)VALUES('$name', '$arguement','$header','$topic')";
$result=mysql_query($sql);

if($result){
echo "Successful<BR>";
echo "<a href=debate.php>View your topic</a>";
}
else {
echo "ERROR";
}
mysql_close();
 header('Location: debate.php');
?>
