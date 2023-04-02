<?php
 $conn=  mysqli_connect('localhost', 'root','','master');
 
 if($conn)
 {
     if(isset($_POST['save']))
     {
        
         $VendorCode=$_POST['code'];
        $Vname=$_POST['name'];
        $gst=$_POST['gst'];
        $vat=$_POST['vat'];
        $cst=$_POST['cst'];
        $pan=$_POST['pan'];
        $contact=$_POST['contact'];
        $add1=$_POST['add1'];
        $add2=$_POST['add2'];
        $add3=$_POST['add3'];
        $add4=$_POST['add4'];
        $mob=$_POST['mob'];
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        
        $query="INSERT INTO `vendor`(`VendorCode`, `Vname`, `gst`, `vat`, `cst`, `pan`, `contact`, `add1`, `add2`, `add3`, `add4`, `mobile`, `cont`, `email`) VALUES ('$VendorCode','$Vname','$gst','$vat','$cst','$pan','$contact','$add1','$add2','$add3','$add4','$mob','$contact','$email');";
      if(mysqli_query($conn, $query))
      {
            echo "<script type='text/javascript'>alert('Data Inserted!!');location='vendor.php'; </script>";
      }
      else
      {
           echo "<script type='text/javascript'>alert('Data Not Inserted!!'); location='vendor.php';</script>";
      }
     
     }
 else {
               echo"File Not working";
     }
       
//     if(isset($_POST['update']))
//     {
//         echo"File working";
//     }
 }
 else 
 {
     echo 'Database Not Connectd';
 }
    
?>
