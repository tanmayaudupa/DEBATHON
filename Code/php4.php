      
 <?php session_start();
      
      
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
       $numlikes= $rows['cons'];
       $numlikes+=1;
       $total=$rows['total'];
       $numlikespros=$rows['pros'];
       $total=$numlikes+$numlikespros;
       $update="UPDATE likes SET cons='$numlikes',total='$total' WHERE heading='$arguement'";
       mysql_query($update);
      }
      
    }
  header('Location: debate.php');
    ?>