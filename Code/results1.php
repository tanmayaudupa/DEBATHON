
<?php
	session_start();
	extract($_GET);
	$t1=$_GET['t1'];
	
	$u=$_SESSION['username'];
	$username="root";
	$password="";
	$server="localhost";
	$conn=mysqli_connect($server,$username,$password,"polls");
	
	$query = "SELECT Category,Topic,Description,Yes,No,Sum FROM details WHERE Topic='$t1'";
	$result=mysqli_query($conn,$query);
	$row=$result->fetch_assoc();
	$des1=$row['Description'];
	$yes1=$row['Yes'];
	$no1=$row['No'];
	$cat1=$row['Category'];


?>
<HTML>
<head>
    <title>Results</title>
<style>
        .GraphWrapper {
            width:300px;
            border:1px solid #DDDDDD;
        }

        .BlueBar {
            height:30px;
            margin:10px 0px 10px 0px;
            background-color:#FFCCCC;
        }

        .RedBar {
            height:30px;
            margin:10px 0px 10px 0px;
            background-color:#CCCCFF;
        }
    </style>



</head>




<link rel="stylesheet" type="text/css" href="external.css">
	<style type="text/css">
		a{font-family:Courier New;
      
    }
    div.test:hover {
    box-shadow: 10px 10px 5px grey;
}
	</style>
</head><!-- 
<body style="background-image: url('images/.jpg');
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
    echo "<span style=\"color:silver;font-family:Courier;font-size:30px\"><a style=\"text-decoration:none;color:silver;\" href=\"home_page.php\">DEBATHON</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\"href=\"debates.html\">DEBATES</a></span>        <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver\" href=\"poll1.php\">Polls</a></span>     <span style=\"color:silver;font-family:Courier;border-left:thick solid #ff0000;font-size:100%\"></span>   <span style=\"color:silver;font-family:Courier\">Welcome ". $_SESSION['username']." </span> <span style=\"color:silver;font-family:Courier\"><a style=\"text-decoration:none;color:silver;\" href=\"log_out.php\">LOG OUT</a></span></p></pre></div>";
  ?>


  <h1 style="color:red;text-align:center;">Know what the World said...</h1>
	<div style="margin-left:5%;margin-right:5%;margin-top:2%;">
        <h3 style="font-style: italic">Description</h3>
        <div style="color:black;font-style:italic;font-size: 20px;border:3px solid #73AD21;padding: 1%">
                <?php 
                echo $des1;
                ?>
        </div>
    </div>


<table  style="width:100%;"  cellpadding="50px">
        <tr>
            <td><img id="result_image" src=""></td>
            <td align="center">
               <canvas id="myCanvas"></canvas>
            </td>
            <td>
                 <div class='GraphWrapper' style="border:3px dotted #73AD21;padding: 3%;">
                	<div id="Ya" class='BlueBar' style='width:50%;'></div>
                    <div id="Na" class='RedBar' style='width:75%;'></div>
                </div>
                <div class='GraphWrapper' style="margin-top:15px;width: 300px; border:3px dotted #ff5e4d;padding:3%;" >
                <div id="display_sum"></div>
                <div id="display_yes"></div>
                <div id="display_no"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td align="center">
                <form><input type="button" value="Back to Polls" onclick="window.location.href='poll1.php'" style="background-color:orange;color:white;width:180px;height:40px;">
                </form>
            </td>
            <td></td>
    </table>



    
</body>

<?php

$u=$_SESSION['username'];


$username="root";
$password="";
$server="localhost";
$conn=mysqli_connect($server,$username,$password,"polls");

$query="SELECT * FROM voters WHERE Username='$u' AND Topic='$t1'";
$result = mysqli_query($conn,$query);

$query1="SELECT * FROM details WHERE Topic='$t1'";
$result1=mysqli_query($conn,$query1);
$row=$result1->fetch_assoc();


if(mysqli_num_rows($result))
{
	
	echo "<script>";
	echo "alert(\"You have already voted\")";
	echo "</script>";

	$sum=$yes1+$no1;
	$yes_percentage=round(($yes1/$sum)*100);
	$no_percentage=round(($no1/$sum)*100);
	$yes_width=$yes_percentage*1.2;
	$no_width=$no_percentage*1.2;

    if($yes_percentage>$no_percentage)
    {
        echo '<script>';
    echo 'document.getElementById("result_image").setAttribute("src","images/thumbs_up.png");';
    echo '</script>';
    }
    else if($yes_percentage<$no_percentage){
    echo '<script>';
    echo 'document.getElementById("result_image").setAttribute("src","images/thums_down.jpg")';
    echo '</script>';
    }
    else
    {
        echo '<script>';
    echo 'document.getElementById("result_image").setAttribute("src","images/r3.jpg")';
    echo '</script>';
    }

	echo '<script>';
	echo 'document.getElementById("Ya").textContent="'.$yes_percentage.'% say Yes";';
	echo 'document.getElementById("Na").textContent="'.$no_percentage.'% say No";';
	echo 'document.getElementById("Ya").style.width="'.$yes_width.'%";';
	echo 'document.getElementById("Na").style.width="'.$no_width.'%";';
    echo 'document.getElementById("display_sum").textContent="Total votes '.$sum.' ";';
    echo 'document.getElementById("display_yes").textContent="Yes votes '.$yes1.' ";';
    echo 'document.getElementById("display_no").textContent="No voters '.$no1.' ";';
	echo '</script>';?>
    <?php include('script.php') ?>
    <?php





}
else
{

	if($opinion=="Yes"){
	$yes1=$yes1+1;
	$no1=$no1;
    

	}
	else
	{
		$yes1=$yes1;
		$no1=$no1+1;

	}
	

    $sum=$yes1+$no1;
    $yes_percentage=round(($yes1/$sum)*100);
    $no_percentage=round(($no1/$sum)*100);
    $yes_width=$yes_percentage*1.2;
    $no_width=$no_percentage*1.2;


    if($yes_percentage>$no_percentage)
    {
        echo '<script>';
    echo 'document.getElementById("result_image").setAttribute("src","images/thumbs_up.png")';
    echo '</script>';
    }
    else if($yes_percentage<$no_percentage){
    echo '<script>';
    echo 'document.getElementById("result_image").setAttribute("src","images/thums_down.jpg")';
    echo '</script>';
    }
    else
    {
        echo '<script>';
    echo 'document.getElementById("result_image").setAttribute("src","images/r3.jpg")';
    echo '</script>';
    }

    echo '<script>';
    echo 'document.getElementById("Ya").textContent="'.$yes_percentage.'% say Yes";';
    echo 'document.getElementById("Na").textContent="'.$no_percentage.'% say No";';
    echo 'document.getElementById("Ya").style.width="'.$yes_width.'%";';
    echo 'document.getElementById("Na").style.width="'.$no_width.'%";';
    echo 'document.getElementById("display_sum").textContent="Total votes '.$sum.' ";';
    echo 'document.getElementById("display_yes").textContent="Yes votes '.$yes1.' ";';
    echo 'document.getElementById("display_no").textContent="No voters '.$no1.' ";';
    echo '</script>';?>
    <?php include('script.php') ?>
    <?php




	$query2 = "UPDATE details SET Yes = '$yes1', No='$no1', Sum='$sum' WHERE Topic = '$t1'";
    $result2=mysqli_query($conn,$query2);
    if(!$result2)
    	echo "couldnt update the details table";
    $query3="INSERT INTO voters(Username,Topic) 
					  VALUES('$u', '$t1')";
    if(!($result3=mysqli_query($conn,$query3)))
    	echo "couldnt execute ";


}
?>

</HTML>

