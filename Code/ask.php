<?php
session_start();
$_SESSION['debflag']=0;
$_SESSION['debflag1']=0;
	$_SESSION['headflagpros']=0;
	$_SESSION['headflagcons']=0;
	$_SESSION['debate']=0;
	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="external.css">
</head>
<body style="background-image: url('images/mainpage.png');
height: 100%;
background-position: center;
    background-repeat: repeat;
   /* background-size: cover;*/">
   <div class="a"><pre><p>
  <?php 
   if(!isset($_SESSION['username']))
    {
    echo ("<span style=\"color:silver;font-family:Courier;font-size:30px\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">DEBATHON</a></span>       <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\"href=\"debates.php\">DEBATES</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver\" href=\"poll1.php\">Polls</a></span>     <span style=\"color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%\"></span>   <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"login.php\">Sign In</a></span>  <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"register.php\">Sign Up</a></span></p></pre></div>");
  }
  else
  {
    echo "<span style=\"color:silver;font-family:Courier;font-size:30px\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">DEBATHON</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\"href=\"debates.php\">DEBATES</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver\" href=\"poll1.php\">Polls</a></span>     <span style=\"color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%\"></span>   <span style=\"color:silver;font-family:Courier\">Welcome ". $_SESSION['username']." </span> <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"log_out.php\">LOG OUT</a></span></p></pre></div>";
   

  }
  ?>
  </p>
  </pre>
  </div>
<table  width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="debate.php">
<td>
<table class="main2" width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width="14%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%">
<!-- <input name="topic" type="text" id="topic" size="50" /> -->
<select name="topic">
  <option value="arts">arts</option>
  <option value="education">education</option>
  <option value="entertainment">entertainment</option>
  <option value="sports">sports</option>
  <option value="health">health</option>
  <!-- <option value="sports">Audi</option>
  <option value="sports">Audi</option>
  <option value="sports">Audi</option> -->
</select>
</td>
</tr>
<tr>
<td valign="top"><strong>Heading</strong></td>
<td valign="top">:</td>
<td><input type="text" name="heading" size=50</td>
</tr>

<tr>
<td><strong>Details</strong></td>
<td>:</td>
<td><textarea name="details" cols=60></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</body>
</html>