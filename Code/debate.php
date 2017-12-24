<?php 
  session_start();
$_SESSION['headflaglikes']=0;
?>
<?php 
    
   ?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="external.css">
	<title>debates</title>
	<style type="text/css">
		a{font-family:Courier New;}
	</style>
    
       
</head>
<body style="background-image: url('images/mainpage.png');
height: 100%;
background-position: center;
    background-repeat: repeat;">
   /* background-size: cover;*/">
<?php
if($_SESSION['home']==1)
{
  extract($_POST);
  $debatehead=$heading;
  $_SESSION['heading']=$debatehead;
  $_SESSION['home']=0;
}
 if($_SESSION['debflag']==0 )
{
extract($_POST);
$_SESSION['topic']=$topic;
$debatehead=$heading;
$_SESSION['details']=$details;
// $_SESSION['details']=$details;
 $_SESSION['heading']=$debatehead;
}
else{
 $debba= $_SESSION['heading'];
}
// $username=$name;
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="wtproj"; // Database name 
$tbl_name="pros"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name";
// OREDER BY id DESC is order result by descending


$result=mysql_query($sql);
// $sqll="UPDATE cons SET column_a='$debatehead' WHERE username='$username'";
//     mysql_query($sqll);

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
        $_SESSION['debflag1']=1;
      }
     
    }
?>
<div class="main"><pre><p>
		<?php 
    if(!isset($_SESSION['username']))
    {
    echo ("<span style=\"color:silver;font-family:Courier;font-size:30px\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">DEBATHON</a></span>       <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\"href=\"debates.php\">DEBATES</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver\" href=\"poll1.php\">Polls</a></span>     <span style=\"color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%\"></span>   <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"login.php\">Sign In</a></span>  <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"register.php\">Sign Up</a></span></p></pre></div>");
  }
  else
  {
    echo "<span style=\"color:silver;font-family:Courier;font-size:30px\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">DEBATHON</a></span>             <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\"href=\"debates.php\">DEBATES</a></span>            <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver\" href=\"poll1.php\">Polls</a></span>           <span style=\"color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%\"></span>   <span style=\"color:silver;font-family:Courier\">Welcome ". $_SESSION['username']." </span> <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"log_out.php\">LOG OUT</a></span></p></pre></div>";
    

  }
  ?>
<div style="margin-left:5%;margin-right:5%;margin-top:2%;">
</div>
<hr>
<div  style="float: left;margin-left: 0.5cm"><h2 style="font-family: Lucida Console;color:black">Topics</h1><br>
<div ><a href="artst.php">Arts</a></div>
<div style="margin-top: 0.5cm"><a href="educationt.php">Education</a><div>
<div style="margin-top: 0.5cm"><a href="entertainmentt.php">Entertainment </a><div>
<div style="margin-top: 0.5cm"><a href="sportst.php">Sports</a><div>
<div style="margin-top: 0.5cm"><a href="healtht.php">Health</a><div>
<div style="margin-top: 0.5cm"><a href="peoplet.php">People</a><div>
<div style="margin-top: 0.5cm"><a href="politicst.php">Politics</a><div>
<div style="margin-top: 0.5cm"><a href="moviest.php">Movies</a><div>
<div style="margin-top: 0.5cm"><a href="newst.php">News</a><div>
<div style="margin-top: 0.5cm"><a href="philosophyt.php">Philosophy</a><div>
<div style="margin-top: 0.5cm"><a href="miscelleneoust.php">Miscelleneous</a></div>
</div>
<div class="vl" style="float: left"></div>
<div style="position: absolute;left:20%;
    top:18%;">
    <h1 style="font-family:Book Antiqua;color:DarkGrey" align=center><i><?php echo $_SESSION['heading'] ?></i></h1>
    <hr width="800px"> 
    <?php
    $con=mysql_connect("localhost","root","");
    mysql_select_db("wtproj") or die ("cannot select db");
    // $query=mysql_query("SELECT * FROM student WHERE Name='".$user."' AND USN ='".$usn."'");
    $query=mysql_query("SELECT * FROM pros",$con);
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
        $_SESSION['headflagpros']=1;
      }

    }
    ?>
       <?php
    $con=mysql_connect("localhost","root","");
    mysql_select_db("wtproj") or die ("cannot select db");
    // $query=mysql_query("SELECT * FROM student WHERE Name='".$user."' AND USN ='".$usn."'");
    $query=mysql_query("SELECT * FROM cons",$con);
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
        $_SESSION['headflagcons']=1;
      }
      
    }
    ?>
  
    <table width="1000" rules="cols" >
    <tr>
    <th style="font-size: 20pt; font-family: Book Antiqua;color:red">Pros</th>
    <th style="font-size: 20pt;font-family: Book Antiqua;color: red">Cons</th>
    </tr>
    <tr>
    <td id=bbb align="center" width=50%><div id="post1">POST ARGUEMENT<br>
           <form action="php1.php" method=post onsubmit="foo1()">
           <input type=submit name="submit" value="submit">
           <?php $_SESSION['debflag']=1?>
           </form>
        </div></td>
    <td id=ddd align="center"><div id="post2">POST ARGUEMENT<br>
           <form action="php2.php" method=post onsubmit="foo1()">
           
           <input type=submit name="submit" value="submit">
           </form>
        </div>
        </td>
    </tr>
    <tr>
    <td>
    <?php
      if($_SESSION['headflagpros']==1){
    $con=mysql_connect("localhost","root","");
    mysql_select_db("wtproj") or die ("cannot select db");
    // $query=mysql_query("SELECT * FROM student WHERE Name='".$user."' AND USN ='".$usn."'");
    $query=mysql_query("SELECT * FROM pros",$con);

    //mysql_query("INSERT into student VALUES('SUMEDHhhh','01FB16ECS403','100','100')");  
     
     
    $numrows=mysql_num_rows($query);
    
    for($i=0;$i<$numrows;$i++)
    {
      $rows=mysql_fetch_assoc($query);
      //$username=$rows['username'];
      $arguement=$rows['pross'];
      $head=$rows['heading'];
      if($_SESSION['heading']==$head)
     // echo " ".$username." ";

      { echo "<b><i>".$rows['username']."</i></b>";
        echo "<br>";
        echo "$arguement <br>";
    }
  }
    }
    else
    {
      $_SESSION['headflagpros']=0;
    }

?>
    </td>
 
  
    <td>
       <?php
      if($_SESSION['headflagcons']==1){
    $con=mysql_connect("localhost","root","");
    mysql_select_db("wtproj") or die ("cannot select db");
    // $query=mysql_query("SELECT * FROM student WHERE Name='".$user."' AND USN ='".$usn."'");
    $query=mysql_query("SELECT * FROM cons",$con);

    //mysql_query("INSERT into student VALUES('SUMEDHhhh','01FB16ECS403','100','100')");  
     
     
    $numrows=mysql_num_rows($query);
    
    for($i=0;$i<$numrows;$i++)
    {
      $rows=mysql_fetch_assoc($query);
      //$username=$rows['username'];
      $arguement=$rows['conss'];
      $head=$rows['heading'];
      if($_SESSION['heading']==$head)
     // echo " ".$username." ";
      { echo "<b><i>".$rows['username']."</i></b>";
        echo "<br>";
        echo "$arguement <br>";
    }
  }
    }
    else
    {
      $_SESSION['headflagcons']=0;
    }

?>
    </td>
    </tr>
    <tr>
    <td>
    <form action="php3.php">
 <input type=submit name=like value="likes <?php 
      if($_SESSION['debflag1']==1)
      {
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
      if($_SESSION['heading']==$rows['heading'])
      {
      $numlike=$rows['pros'];
      echo " ".$numlike." ";
     }
      
    }
  }
  
 
    ?>">
</form>
</td>

<td>
  <form action="php4.php">
 <input type=submit name=like value="likes <?php 
      
      
         
      
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
      if($_SESSION['heading']==$rows['heading'])
      {
      $numlike=$rows['cons'];
      echo " ".$numlike." ";
     }
      
    }
  
  
 
    ?>">
</form>
</td>
</tr>
    
    </table>
   
    
     


<div>

</div>


</body>
</html>