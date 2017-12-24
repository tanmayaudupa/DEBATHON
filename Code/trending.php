<?php
$username="root";
$password="";
$server="localhost";
$conn=mysqli_connect($server,$username,$password,"polls");
$query = "SELECT Category,Topic,Description,Yes,No,Sum FROM details ORDER BY Sum DESC";
$result=mysqli_query($conn,$query);
if(!$result)
	echo "couldn't bring trending news";
$i=0;
while($row=$result->fetch_assoc())
		{
			if($i==0)
			{
				$cat1=$row['Category'];
				$top1=$row['Topic'];
				$des1=$row['Description'];
				$yes1=$row['Yes'];
				$no1=$row['No'];
				$sum1=$row['Sum'];
			}
			else if($i==1)
			{
				$cat2=$row['Category'];
				$top2=$row['Topic'];
				$des2=$row['Description'];
				$yes2=$row['Yes'];
				$no2=$row['No'];
				$sum2=$row['Sum'];
			}
			else if($i==2)
			{
				$cat3=$row['Category'];
				$top3=$row['Topic'];
				$des3=$row['Description'];
				$yes3=$row['Yes'];
				$no3=$row['No'];
				$sum3=$row['Sum'];
			}
			else if($i==3)
			{
				$cat4=$row['Category'];
				$top4=$row['Topic'];
				$des4=$row['Description'];
				$yes4=$row['Yes'];
				$no4=$row['No'];
				$sum4=$row['Sum'];
			}
			$i=$i+1;
		}
mysqli_close($conn);


?>
