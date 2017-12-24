
<?php
  include('trending.php');
  session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="external.css">
	<title>Polls</title>
	<style type="text/css">
		a{font-family:Courier New;
      
    }
    div.test:hover {
    box-shadow: 10px 10px 5px grey;
}
	</style>
</head>
<!-- <body style="background-image: url('images/bac.png'); -->

    <body style="background-image: url('images/mainpage.png');
height: 100%;
background-position: center;
    background-repeat: repeat;">
    <script type="text/javascript">
     
    </script>

<div class="a"><pre><p>
  <?php 
    echo "<span style=\"color:silver;font-family:Courier;font-size:30px\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">DEBATHON</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\"href=\"debates.php\">DEBATES</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver\" href=\"poll1.php\">Polls</a></span>     <span style=\"color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%\"></span>   <span style=\"color:silver;font-family:Courier\">Welcome ". $_SESSION['username']." </span> <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"log_out.php\">LOG OUT</a></span></p></pre></div>";
  ?>
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
    <h1 style="font-family:Book Antiqua;color:red" align=center><i>Trending now</i></h1>
    
    <hr width="800px"> 
    <div class="test" style="margin-top: 0.25cm;height: 170px;border-radius: 5px;background-color: Bisque" >
   	<div style="display:inline-block; padding: 10px">
                <?php 
                echo "Category: ".$cat1."<br/><br/>";
                echo "Topic: ".$top1."<br/><br/>";
                echo "Description<br/>".$des1;
                ?>
      </br>

      
  
      
      <div id="yy1">
        <button id="but1" type="button" name="but1" value="" onclick="function1(this)">Yes</button>
      </div>
      <div id="nn1">
        <button id="but11" type="button" name="but11" value="" onclick="function11(this)">No</button>
      </div>
    </div>
    </div>
    <script>
function function1(e1)
    {
          e1.setAttribute("value","but10");
          window.location.href="poll1.php?but1=but10";

         <?php 
        if(isset($_GET['but1'])){
         $_SESSION['cat1']=$cat1; 
         $_SESSION['des1']=$des1;
         $_SESSION['topic1']=$top1; 
         $_SESSION['flag']=0;
         header("Location:results.php");
       }
         ?>


    }
    function function11(e11)
    {
          e11.setAttribute("value","but110");
          window.location.href="poll1.php?but11=but110";

         <?php 
        if(isset($_GET['but11'])){
         $_SESSION['cat1']=$cat1; 
         $_SESSION['des1']=$des1;
         $_SESSION['topic1']=$top1;
         $_SESSION['flag']=0;
         header("Location:results.php");
       }
         ?>


    }
    function function2(e2)
    {
          e2.setAttribute("value","but20");
          window.location.href="poll1.php?but2=but20";

         <?php 
        if(isset($_GET['but2'])){
        $_SESSION['cat1']=$cat2; 
         $_SESSION['des1']=$des2;
         $_SESSION['topic1']=$top2; 
         $_SESSION['flag']=1;
         header("Location:results.php");
       }
         ?>
    }


    
    function function22(e22)
    {
          e22.setAttribute("value","but220");
          window.location.href="poll1.php?but22=but220";

         <?php 
        if(isset($_GET['but22'])){
          $_SESSION['cat1']=$cat2; 
         $_SESSION['des1']=$des2;
         $_SESSION['topic1']=$top2; 
         $_SESSION['flag']=0;
         header("Location:results.php");
       }
         ?>

    }
    function function3(e3)
    {
          e3.setAttribute("value","but3");
          window.location.href="poll1.php?but3=but30";
         <?php 
         if(isset($_GET['but3'])){
          $_SESSION['cat1']=$cat3; 
         $_SESSION['des1']=$des3;
         $_SESSION['topic1']=$top3;
         $_SESSION['flag']=1;
         header("Location:results.php");

       }
          ?>

    }
    function function33(e33)
    {
          e33.setAttribute("value","but330");
          window.location.href="poll1.php?but33=but330";
         <?php 
         if(isset($_GET['but33'])){
          $_SESSION['cat1']=$cat3; 
         $_SESSION['des1']=$des3;
         $_SESSION['topic1']=$top3; 
         $_SESSION['flag']=0;
         header("Location:results.php");
       }
         ?>
    }

   	</script>
    <hr width="800px"> 
     <div class="test" style="margin-top: 0.25cm;height: 170px;border-radius: 5px;background-color: Bisque" >
   	<div style="display:inline-block;  padding: 10px">
      <?php 
                echo "Category: ".$cat2."<br/><br/>";
                echo "Topic: ".$top2."<br/><br/>";
                echo "Description<br/>".$des2;
                ?>
   	</br>
      <div id="yy2">
        <button id="but2" type="button" name="but2" value="" onclick="function2(this)">Yes</button>
      </div>
      <div id="nn2">
        <button id="but22" type="button" name="but22" value="" onclick="function22(this)">No</button>
      </div>
    </div>
    </div>
   	
    <hr width="800px"> 
     <div class="test" style="margin-top: 0.25cm;height: 170px;border-radius: 5px;background-color: Bisque" >
   	<div style="display:inline-block;padding: 10px; margin:auto;">
      <?php 
                echo "Category: ".$cat3."<br/><br/>";
                echo "Topic: ".$top3."<br/><br/>";
                echo "Description<br/>".$des3;
                ?>
   	</br>
      <div id="yy3">
        <button id="but3" type="button" name="but3" value="" onclick="function3(this)">Yes</button>
      </div>
      <div id="nn3">
        <button id="but33" type="button" name="but33" value="" onclick="function33(this)">No</button>
      </div>
    </div>
    </div>

   	
    <hr width="800px">
    <center>
    See nothing interesting?
    <button type="button" onclick="window.location.href='poll2.php'">Start your own poll!</button>
    </center>

  </div>
  <p>
    
  </p>
  
 


</body>
</html>