<?php
 $conn=  mysqli_connect('localhost', 'root','','master');
 if($conn)
 {
      $loc=$_POST['loc'];
      $branch=$_POST['branch'];
      $abb=$_POST['abb'];
      $query="INSERT INTO `Branch`(`Location`,`Branch`, `Abbreviation`) VALUES ('$loc','$branch','$abb')";
      if(mysqli_query($conn, $query))
      {
            echo "<script type='text/javascript'>alert('Data Inserted!!');location='branchmaster.php'; </script>";
      }
      else
      {
           echo "<script type='text/javascript'>alert('Data Not Inserted!!'); location='branchmaster.php';</script>";
      }
 }
 else 
 {
     echo 'Database Not Connectd';
 }
    
?>

