<?php
  $EmpCode=$_REQUEST['empcode'];
  $Procode=$_REQUEST['code'];
  $conn=mysqli_connect('localhost','root','','master');
  if($EmpCode!="")
  {
      $query=mysqli_query($conn,"Select * from product where EmpCode='$EmpCode'");
      $row=  mysqli_fetch_array($query);
      $ename=$row['EmpName'];
      $result=array("$ename");
      $myJSON=  json_encode($result);
      echo $myJSON;          
  }
  if ($Procode!="")
    {
      $query=mysqli_query($conn,"Select * from product where Code='$Procode'");
      $row=  mysqli_fetch_array($query);
      $pname=$row['DeviceType'];
      $result=array("$pname");
      $myJSON=  json_encode($result);
      echo $myJSON;          
    }
  
?>
