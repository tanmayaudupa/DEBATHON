<?php
?>

<!DOCTYPE html>
<html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="external.css">
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Polls</title>
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
    <script type="text/javascript">
     
    </script>

<div class="a"><pre><p>
  <?php 
    echo "<span style=\"color:silver;font-family:Courier;font-size:30px\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">DEBATHON</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\"href=\"debates.php\">DEBATES</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver\" href=\"poll1.php\">Polls</a></span>     <span style=\"color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%\"></span>   <span style=\"color:silver;font-family:Courier\">Welcome ". $_SESSION['username']." </span> <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"log_out.php\">LOG OUT</a></span></p></pre></div>";
  ?>
<!-- <div style="margin-left:5%;margin-right:5%;margin-top:2%;">
</div>
<hr>
<div  style="float: left;margin-left: 0.5cm"><h2 style="font-family: Lucida Console;color:black">Topics</h1><br>
<div ><a href="arts.php">Arts</a></div>
<div style="margin-top: 0.5cm"><a href="Education.html">Education</a><div>
<div style="margin-top: 0.5cm"><a href="Entertainment.html">Entertainment </a><div>
<div style="margin-top: 0.5cm"><a href="Fashion.html">Fashion</a><div>
<div style="margin-top: 0.5cm"><a href="Health.html">Health</a><div>
<div style="margin-top: 0.5cm"><a href="People.html">People</a><div>
<div style="margin-top: 0.5cm"><a href="Politics.html">Politics</a><div>
<div style="margin-top: 0.5cm"><a href="Movies.html">Movies</a><div>
<div style="margin-top: 0.5cm"><a href="News.html">News</a><div>
<div style="margin-top: 0.5cm"><a href="Philosophy.html">Philosophy</a><div>
<div style="margin-top: 0.5cm"><a href="Miscelleneous.html">Miscelleneous</a></div>
</div>
<div class="vl" style="float: left"></div>
<div style="position: absolute;left:20%;
    top:18%;"> -->
    <!-- <h1 style="font-family:Book Antiqua;color:red" align=center><i>Have your Say</i></h1>
    
    <hr width="800px">
    <div style="display:inline-block;"> -->
    <div class="b">
            </div>
<table width="1300">
<tr>
   <td align="center"><img src="images/thumbs_up.png" width="195px">
    </td>
    <td>
    <div class="header">
    <h2>HAVE YOUR SAY</h2>
    </div>
    
        <form width="900"onsubmit="return validation()" method="post" action="insert.php" >
        <div class="input-group">
<!-- <ol> -->
<label>Select your category</label>
    
    <select name="category" id="cat">
        <option name="category" value="selectcategory">----Please select----</option>
        <option name="category" value="Arts">Arts</option>
        <option name="category" value="Education">Education</option>
        <option name="category" value="Entertainment">Entertainment</option>
        <option name="category" value="Fashion">Fashion</option>
        <option name="category" value="Health">Health</option>
        <option name="category" value="People">People</option>
        <option name="category" value="Politics">Politics</option>
        <option name="category" value="Movies">Movies</option>
        <option name="category" value="News">News</option>
        <option name="category" value="Philosophy">Philosophy</option>
        <option name="category" value="Miscelleneous">Miscelleneous</option>

    </select>
    </div>
    <!-- <div id="1" style="color:red; font:1px;"></div> -->
<!-- </li> -->
<br/><br/>

<!-- <li> -->
<div class="input-group">
 <label>Topic name<br/><input type="text" name="topic" id="topic"></label>
    <!-- <br/><br/> -->
    </div>
    </br></br>
    <div class="input-group">

<label>
    Write a brief description about your topic<br/>
        <textarea name="description" id="description"></textarea><div id="3" style="color:red; font:1px;"></div>
</label>
</div>

<!-- </ol> -->

<pre>     <input type="submit" ></pre>

</form>

</td>
<td>
<td align="center"><img src="images/thums_down.jpg" width="195px">
</td>
</tr>
</table>



<head>
</head>
<body>

<script>
function validation()
{
var ddl = document.getElementById("cat");
var selectedValue = ddl.options[ddl.selectedIndex].value;
    if (selectedValue == "selectcategory")
   {
    	document.getElementById("1").textContent="Please select a category";
    	return false;
   }
   
var dd2=document.getElementById("topic").value;
	if(dd2==""){
		document.getElementById("2").textContent="Please write your topic name";
		return false;
	}
var dd3=document.getElementById("description").value;
	if(dd3==""){
		document.getElementById("3").textContent="Please write description about your topic";
		return false;
	}
return true;
}
</script>




</body>
</html>




