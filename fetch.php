<?php
$conn=mysqli_connect('localhost','root','','master');
$column=array(`Vendor`, `ProductCode`, `Code`, `DeviceType`, `Description`, `HSNSAC`, `InvoiceNo`, `InvoiceDate`, `SupRefNo`, `Qty`, `Amount`, `CGST`, `SGST`, `Warranty`, `ExpiryDate`, `EmpCode`, `EmpName`, `Facility`);
$query="Select * from product";
if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE Vendor LIKE "%'.$_POST['search']['value'].'%" 
 OR ProductCode LIKE "%'.$_POST['search']['value'].'%" 
 OR Code LIKE "%'.$_POST['search']['value'].'%" 
 OR DeviceType LIKE "%'.$_POST['search']['value'].'%" 
 OR Description LIKE "%'.$_POST['search']['value'].'%" 
 OR HSNSAC LIKE "%'.$_POST['search']['value'].'%" 
 OR InvoiceNo LIKE "%'.$_POST['search']['value'].'%" 
 OR InvoiceDate LIKE "%'.$_POST['search']['value'].'%" 
 OR SupRefNo LIKE "%'.$_POST['search']['value'].'%" 
 OR Qty LIKE "%'.$_POST['search']['value'].'%"      
 OR Amount LIKE "%'.$_POST['search']['value'].'%" 
 OR CGST LIKE "%'.$_POST['search']['value'].'%" 
 OR SGST LIKE "%'.$_POST['search']['value'].'%" 
 OR Warranty LIKE "%'.$_POST['search']['value'].'%" 
 OR ExpiryDate LIKE "%'.$_POST['search']['value'].'%" 
 OR EmpCode LIKE "%'.$_POST['search']['value'].'%" 
 OR EmpName LIKE "%'.$_POST['search']['value'].'%" 
 OR Facility LIKE "%'.$_POST['search']['value'].'%"      
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY Vendor DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['Vendor'];
 $sub_array[] = $row['ProductCode'];
 $sub_array[] = $row['Code'];
 $sub_array[] = $row['DeviceType'];
 $sub_array[] = $row['Description'];
 $sub_array[] = $row['HSNSAC'];
 $sub_array[] = $row['InvoiceNo'];
 $sub_array[] = $row['InvoiceDate'];
 $sub_array[] = $row['SupRefNo'];
 $sub_array[] = $row['Qty'];
 $sub_array[] = $row['Amount'];
 $sub_array[] = $row['CGST'];
 $sub_array[] = $row['SGST'];
 $sub_array[] = $row['Warranty'];
 $sub_array[] = $row['ExpiryDate'];
 $sub_array[] = $row['EmpCode'];
 $sub_array[] = $row['EmpName'];
 $sub_array[] = $row['Facility'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM product";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>
?>