<?php
 $conn=  mysqli_connect('localhost', 'root','','master');
 if($conn)
 {
     if(isset($_POST['add']))
     {
        $Vendor=$_POST['vendor'];
        $ProductCode=$_POST['productcode'];
        $code=$_POST['code'];
        $DeviceType=$_POST['devicetype'];
        $Description=$_POST['desc'];
        $HSNSAC=$_POST['hsn'];
        $InvoiceNo=$_POST['invoiceno'];
        $InvoiceDate=$_POST['invoicedate'];
        $SupRefNo=$_POST['supref'];
        $Qty=$_POST['qty'];
        $Amount=$_POST['amt'];
        $CGST9=$_POST['cgst'];
        $SGST9=$_POST['sgst'];
        $Warranty=$_POST['warranty'];
        $ExpiryDate=$_POST['expiry'];
        $EmpCode=$_POST['empcode'];
        $EmpName=$_POST['empname'];
        $Facility=$_POST['facility'];
        $query="INSERT INTO `product`(`Vendor`, `ProductCode`, `Code` ,`DeviceType`, `Description`, `HSNSAC`, `InvoiceNo`, `InvoiceDate`, `SupRefNo`, `Qty`, `Amount`, `CGST`, `SGST`, `Warranty`, `ExpiryDate`, `EmpCode`, `EmpName`, `Facility`) VALUES ('$Vendor','$ProductCode','$code','$DeviceType','$Description','$HSNSAC','$InvoiceNo','$InvoiceDate','$SupRefNo','$Qty','$Amount','$CGST9','$SGST9','$Warranty','$ExpiryDate','$EmpCode','$EmpName','$Facility')";
      if(mysqli_query($conn, $query))
      {
            echo "<script type='text/javascript'>alert('Data Inserted!!');location='product.php'; </script>";
      }
      else
      {
           echo "<script type='text/javascript'>alert('Data Not Inserted!!'); location='product.php';</script>";
      }
     }
     if(isset($_POST['update']))
     {
         echo"File working";
     }
 }
 else 
 {
     echo 'Database Not Connectd';
 }
    
?>
