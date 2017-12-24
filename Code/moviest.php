<?php
  session_start();
  
  ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="external.css">
  <title>debates</title>
  <style type="text/css">
    a{font-family:Courier New;
      
    }
    div.test:hover {
    box-shadow: 10px 10px 5px grey;
}
  </style>
</head>
<!-- <body style="background-image: url('images/back2.png');
height: 100%;
background-position: center;
    background-repeat: no-repeat;
    background-size: cover;"> -->
    <body style="background-image: url('images/mainpage.png');
height: 100%;
background-position: center;
    background-repeat: repeat;">
<div class="a"><pre><p>
  <?php 
   if(!isset($_SESSION['username']))
    {
    echo ("<span style=\"color:silver;font-family:Courier;font-size:30px\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">DEBATHON</a></span>       <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\"href=\"debates.php\">DEBATES</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver\" href=\"home_page.php\">Polls</a></span>     <span style=\"color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%\"></span>   <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"login.php\">Sign In</a></span>  <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"register.php\">Sign Up</a></span></p></pre></div>");
  }
  else
  {
    echo "<span style=\"color:silver;font-family:Courier;font-size:30px\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">DEBATHON</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\"href=\"debates.php\">DEBATES</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver\" href=\"home_page.php\">Polls</a></span>     <span style=\"color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%\"></span>   <span style=\"color:silver;font-family:Courier\">Welcome ". $_SESSION['username']." </span> <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"log_out.php\">LOG OUT</a></span></p></pre></div>";
   

  }
  ?>
  </p>
  </pre>
  </div>
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
    <h1 style="font-family:Book Antiqua;color:red" align=center><i>Trending now</i></h1>
    <hr width="800px"> 
    <table>
    <tr>
    <td>
    <?php
       $con=mysql_connect("localhost","root","");
    mysql_select_db("wtproj") or die ("cannot select db");
    // $query=mysql_query("SELECT * FROM student WHERE Name='".$user."' AND USN ='".$usn."'");
   //$query=mysql_query("SELECT * FROM likes ORDER BY total DESC",$con);
   // mysql_query("INSERT into likes VALUES('asha','tennis','8','2','10')");  
     
      $sql2="SELECT * FROM likes ORDER BY total DESC";
      $result2=mysql_query($sql2);
      while($rows=mysql_fetch_array($result2))
      { if($rows['topic']=="movies")
        {
        echo "<div class=\"test\" style=\"margin-top: 0.25cm;height: 100px;border-radius: 5px;background-color: Bisque\" >";
      
        echo $rows['heading'];
        
        echo "<br><br> ";
        echo $rows['details'];
        echo "<br>";
        // echo "<button style=\"margin-top: 0.8mm ;position: absolute;margin-left: 10cm;width: 80px\" type=\"button\" onclick=\"location.href='debate.php'\">Join</button></div>";
        echo "<form style=\"margin-top: 0.8mm;position: absolute;margin-left: 10cm;width: 80px\" action=\"php5.php\"><input type=\"submit\" value=\"join\"></form></div>";
        echo "<hr>";
      }
      }

     
   
    ?>
    
    
    <hr width="800px"> 

    
    </td>
    </tr>
    </table>


  </div>
  </div>



</body>


</html>