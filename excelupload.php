<?php
$conn=mysqli_connect('localhost','root','','master');
if($conn)
{
    require('C:\xampp\htdocs\fileupload\spreadsheet-reader-master\library\php-excel-reader\excel_reader2.php');
    require('C:\xampp\htdocs\fileupload\spreadsheet-reader-master\library\SpreadsheetReader.php');
    if(isset($_POST['Submit']))
    {
        $mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];
        if(in_array($_FILES["file"]["type"],$mimes))
          {
            $uploadFilePath = 'C:\xampp\htdocs\athulya\upload'.basename($_FILES['file']['name']);
           
            move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);
            $Reader = new SpreadsheetReader($uploadFilePath);
            $totalSheet = count($Reader->sheets());
            echo "You have total ".$totalSheet." sheets<br>".
            $Reader->ChangeSheet(0);
            echo "count=" .count($Reader)." added <br>";
            $count = 0;
            foreach ($Reader as $Row)
            {

                    $count++;
                     $Vendor= isset($Row[0]) ? $Row[0] : '';
                     $ProductCode= isset($Row[1]) ? $Row[1] : '';
                     $code= isset($Row[2]) ? $Row[2] : '';
                     $DeviceType= isset($Row[3]) ? $Row[3] : '';
                     $Description= isset($Row[4]) ? $Row[4] : '';
                     $HSNSAC= isset($Row[5]) ? $Row[5] : '';
                     $InvoiceNo= isset($Row[6]) ? $Row[6] : '';
                     $InvoiceDate= isset($Row[7]) ? $Row[7] : '';
                     $SupRefNo= isset($Row[8]) ? $Row[8] : '';
                     $Qty= isset($Row[9]) ? $Row[9] : '';
                     $Amount= isset($Row[10]) ? $Row[10] : '';
                     $CGST9= isset($Row[11]) ? $Row[11] : '';
                     $SGST9= isset($Row[12]) ? $Row[12] : '';
                     $Warranty= isset($Row[13]) ? $Row[13] : '';
                     $ExpiryDate= isset($Row[14]) ? $Row[14] : '';
                     $EmpCode= isset($Row[15]) ? $Row[15] : '';
                     $EmpName= isset($Row[16]) ? $Row[16] : '';
                     $Facility= isset($Row[17]) ? $Row[17] : '';
                    if($count == 1)   continue;   //  skips titles from excel file while inserting
                    $query = "INSERT INTO `product`(`Vendor`, `ProductCode`, `Code` ,`DeviceType`, `Description`, `HSNSAC`, `InvoiceNo`, `InvoiceDate`, `SupRefNo`, `Qty`, `Amount`, `CGST`, `SGST`, `Warranty`, `ExpiryDate`, `EmpCode`, `EmpName`, `Facility`) VALUES  ('".$Vendor."','".$ProductCode."','".$code."','".$DeviceType."','".$Description."','".$HSNSAC."','".$InvoiceNo."','".$InvoiceDate."','".$SupRefNo."','".$Qty."','".$Amount."','".$CGST9."','".$SGST9."','".$Warranty."','".$ExpiryDate."','".$EmpCode."','".$EmpName."','".$Facility."')";
                    $result = mysqli_query($conn,$query);
            }

            echo "<br />Data Inserted in dababase";
         }
else 
    { 
        die("<br/>Sorry, File type error. Only Excel file allowed."); 
    }

mysqli_close($conn);
  }
  
}
 else 
{
     echo "Database Not Connected";
}
?>