<?php
session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="wtproj"; // Database name 
$tbl_name="pros"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get data that sent from form 

//$detail=$_POST['detail'];
$name=$_SESSION['username'];
$arguement=$_POST['arguement'];
$header=$_SESSION['heading'];
$topic=$_SESSION['topic'];
// $datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(username, pross, heading,topic)VALUES('$name', '$arguement','$header','$topic')";
$result=mysql_query($sql);

if($result){
echo "Successful<BR>";
echo "<a href=debate.php>View your topic</a>";
echo $_SESSION['debflag'];
echo $_SESSION['headflagpros'];
}
else {
echo "ERROR";
}
mysql_close();
?>

<?php 
    $con=mysql_connect("localhost","root","");
    mysql_select_db("wtproj") or die ("cannot select db");
    // $query=mysql_query("SELECT * FROM student WHERE Name='".$user."' AND USN ='".$usn."'");
    $query=mysql_query("SELECT * FROM likes",$con);
    //mysql_query("INSERT into student VALUES('SUMEDHhhh','01FB16ECS403','100','100')");  
     
     
    $numrows=mysql_num_rows($query);
    
    for($i=0;$i<$numrows;$i++)
    {
      $rows=mysql_fetch_assoc($query);
      //$username=$rows['username'];
      $arguement=$rows['heading'];
     // echo " ".$username." ";
      if($_SESSION['heading']==$arguement)
      {
        $_SESSION['headflaglikes']=1;
      }
      // echo "done";
    }
   ?>
<?php
if($_SESSION['headflaglikes']==0){
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="wtproj"; // Database name 
$tbl_name="likes"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get data that sent from form 

//$detail=$_POST['detail'];
$name=$_SESSION['username'];
//$arguement=$_POST['arguement'];
$header=$_SESSION['heading'];
// $datetime=date("d/m/y h:i:s"); //create date time
$detail=$_SESSION['details'];
$sql="INSERT INTO $tbl_name(username,heading,details)VALUES('$name','$header','$detail')";
$result=mysql_query($sql);

if($result){
echo "Successful<BR>";

}
else {
echo "ERROR";
}
mysql_close();
}


header('Location: debate.php');
?>