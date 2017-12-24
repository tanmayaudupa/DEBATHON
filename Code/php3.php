      
 <?php session_start();
      
      $topic=$_SESSION['topic'];
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
      //echo " ".$username." ";
      if($_SESSION['heading']==$arguement)
     {  
       $numlikes= $rows['pros'];
       $numlikes+=1;
       $total=$rows['total'];
       $numlikescons=$rows['cons'];
       $total=$numlikes+$numlikescons;
       $update="UPDATE likes SET pros='$numlikes',total='$total',topic='$topic' WHERE heading='$arguement'";
       mysql_query($update);
      }
      
    }
  header('Location: debate.php');
    ?>