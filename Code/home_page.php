<?php
	session_start();
	$_SESSION['home']=0;
$_SESSION['debflag1']=0;
$_SESSION['debflag1']=0;
	$_SESSION['headflagpros']=0;
	$_SESSION['headflagcons']=0;
	$_SESSION['debate']=0;
	?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="external.css">
<script type="text/javascript">

            var picPaths = ['images/ban1.png','images/ban2.jpg','images/ban3.jpg','images/ban4.jpg','images/ban5.jpg'];
            var curPic = -1;
            //preload the images for smooth animation
            var imgO = new Array();
            for(i=0; i < picPaths.length; i++) {
                imgO[i] = new Image();
                imgO[i].src = picPaths[i];
            }

            function swapImage() {
                curPic = (++curPic > picPaths.length-1)? 0 : curPic;
                imgCont.src = imgO[curPic].src;
                setTimeout(swapImage,5000);
            }

            window.onload=function() {
                imgCont = document.getElementById('imgBanner');
                swapImage();
            }
        </script>

</head>
<!-- <body> -->
<body style="background-image: url('images/mainpage.png');
height: 100%;
background-position: center;
    background-repeat: repeat;">
<div class="a"><pre><p>
	<?php 
		if(!isset($_SESSION['username']))

		{
		echo ("<span style=\"color:silver;font-family:Courier;font-size:30px\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">DEBATHON</a></span>				<span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\"href=\"debate.php\">DEBATES</a></span>				<span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver\" href=\"home_page.php\">Polls</a></span>			<span style=\"color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%\"></span>		<span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"login.php\">Sign In</a></span>	<span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"register.php\">Sign Up</a></span></p></pre></div>");
	}
	else
	{
		echo "<span style=\"color:silver;font-family:Courier;font-size:30px\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">DEBATHON</a></span>				<span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\"href=\"debate.php\">DEBATES</a></span>				<span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver\" href=\"home_page.php\">Polls</a></span>			<span style=\"color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%\"></span>		<span style=\"color:silver;font-family:Courier\">Welcome ". $_SESSION['username']." </span>	<span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"log_out.php\">LOG OUT</a></span></p></pre></div>";
		

	}
	?>
<div class="b">
			</div>
<div style="margin-left:5%;margin-right:5%;margin-top:2%;">
	<p style="font-family:Arial;">
	Debathon is a free online community where the great innovative minds come together to debate online. Find here the trending topics to debate on and make your thoughts reachable to the whole world!</p>
	</p>
	<hr/>
	<table  style="width:100%;border-right-style:thin">
		<tr>
			<td align="center"><img src="images/deb1.png" align="middle" width="50px" height="50px"><span style="color:orange;font-size:40px;vertical-align:middle;"></td><div style="border-right-style:thin;"></div>
			<td align="center"rowspan="3"><img id="imgBanner" src="" alt="" width="300px" height="300px" />
			<td align="center"><img src="images/poll1.png" align="middle" width="50px" height="50px"><span style="color:CornflowerBlue;font-size:40px;vertical-align:middle;">Polls</td>
			
		</tr>
		<tr>
			<td align="center"><img src="images/deb2.png" width="300px">
			<td align="center"><img src="images/poll22.jpg" width="300px">
		</tr>
		<tr>
		<?php

			if(isset($_SESSION['username']))
			{
			echo "<td align=\"center\"><form><input type=\"button\" value=\"Start a new Debate\" onclick=\"window.location.href='ask.php'\" style=\"background-color:orange;color:white;width:180px;height:40px;\">
				<input type=\"button\" value=\"Vote on a Debate\" onclick=\"window.location.href='debates.php'\" style=\"background-color:orange;color:white;width:180px;height:40px;\">
			</form>";
		}
			else
			{
				echo "<td align=\"center\"><form><input type=\"button\" value=\"Start a new Debate\" onclick=\"window.location.href='register.php'\" style=\"background-color:orange;color:white;width:180px;height:40px;\">
				<input type=\"button\" value=\"Vote on a Debate\" onclick=\"window.location.href='register.php'\" style=\"background-color:orange;color:white;width:180px;height:40px;\">
			</form>";
			}
			

			?>

		
			<?php

			if(isset($_SESSION['username']))
			echo "<td align=\"center\"><form><input type=\"button\" value=\"Take a Poll\" onclick=\"window.location.href='poll1.php'\"style=\"background-color:CornflowerBlue;color:white;align:center;width:180px;height:40px\"></form>";
			else
				echo "<td align=\"center\"><form><input type=\"button\" value=\"Take a Poll\" onclick=\"window.location.href='register.php'\"style=\"background-color:CornflowerBlue;color:white;align:center;width:180px;height:40px\"></form>";
			?>
		</tr>
	</table>
			
		
</div>
</body>
</html>