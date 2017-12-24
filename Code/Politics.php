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

    <body style="background-image: url('images/mainpage.png');
height: 100%;
background-position: center;
    background-repeat: repeat;">
<div class="a"><pre><p>
  <?php 
   if(!isset($_SESSION['username']))
    {
    echo ("<span style=\"color:silver;font-family:Courier;font-size:30px\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">DEBATHON</a></span>       <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\"href=\"debates.html\">DEBATES</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver\" href=\"home_page.php\">Polls</a></span>     <span style=\"color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%\"></span>   <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"login.php\">Sign In</a></span>  <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"register.php\">Sign Up</a></span></p></pre></div>");
  }
  else
  {
    echo "<span style=\"color:silver;font-family:Courier;font-size:30px\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">DEBATHON</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\"href=\"debates.html\">DEBATES</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver\" href=\"home_page.php\">Polls</a></span>     <span style=\"color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%\"></span>   <span style=\"color:silver;font-family:Courier\">Welcome ". $_SESSION['username']." </span> <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">LOG OUT</a></span></p></pre></div>";
   

  }
  ?>
  </p>
  </pre>
  </div>
<div style="margin-left:5%;margin-right:5%;margin-top:2%;">
</div>
<hr>
<div  style="float: left;margin-left: 0.5cm"><h2 style="font-family: Lucida Console;color:black">Topics</h1><br>
<div ><a href="arts.php">Arts</a></div>
<div style="margin-top: 0.5cm"><a href="education.php">Education</a><div>
<div style="margin-top: 0.5cm"><a href="entertainment.php">Entertainment </a><div>
<div style="margin-top: 0.5cm"><a href="fashion.php">Fashion</a><div>
<div style="margin-top: 0.5cm"><a href="health.php">Health</a><div>
<div style="margin-top: 0.5cm"><a href="people.php">People</a><div>
<div style="margin-top: 0.5cm"><a href="politics.php">Politics</a><div>
<div style="margin-top: 0.5cm"><a href="movies.php">Movies</a><div>
<div style="margin-top: 0.5cm"><a href="news.php">News</a><div>
<div style="margin-top: 0.5cm"><a href="philosophy.php">Philosophy</a><div>
<div style="margin-top: 0.5cm"><a href="miscelleneous.php">Miscelleneous</a></div>
</div>
<div class="vl" style="float: left"></div>
<div style="position: absolute;left:20%;
    top:18%;">
    <h1 style="font-family:Book Antiqua;color:red" align=center><i>Politics</i></h1>
    <hr width="800px"> 
    <table>
    <tr>
    <td>
   	<?php
       $username="root";
      $password="";
      $server="localhost";
      $conn=mysqli_connect($server,$username,$password,"polls");
      $query = "SELECT Category,Topic,Description,Yes,No,Sum FROM details WHERE Category='Politics' ORDER BY Sum DESC";
      $result2=mysqli_query($conn,$query);
      while($rows=$result2->fetch_assoc())  
      { 
        echo "<div class=\"test\" style=\"margin-top: 0.25cm;height: 100px;border-radius: 5px;background-color: Bisque\" >";
        echo $rows['Category'];
        echo "<br/>";
        echo $rows['Topic'];
        echo "<br><br> ";
        echo $rows['Description'];
        echo "<br>";
        echo "<form style=\"margin-top: 0.8mm;position: absolute;margin-left: 10cm;width: 80px\" action=\"taker.php\"><input type=\"submit\" value=\"Yes\"></form></div>";
        echo "<br>";
        echo "<form style=\"margin-top: 0.8mm;position: absolute;margin-left: 10cm;width: 80px\" action=\"taker.php\"><input type=\"submit\" value=\"No\"></form></div>";

        echo "<hr>";

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