<?php
 $conn=  mysqli_connect('localhost', 'root','','master');
 if($conn)
 {
      $device=$_POST['device'];
      
      $query="INSERT INTO `device`(`Device`) VALUES ('$device')";
      if(mysqli_query($conn, $query))
      {
            echo "<script type='text/javascript'>alert('Data Inserted!!');location='devicemaster.php'; </script>";
      }
      else
      {
           echo "<script type='text/javascript'>alert('Data Not Inserted!!'); location='devicemaster.php';</script>";
      }
 }
 else 
 {
     echo 'Database Not Connectd';
 }
    
?>
