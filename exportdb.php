 <?php
// db settings
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'master';

// db connection
$con = mysqli_connect($hostname, $username, $password, $database) or die("Error " . mysqli_error($con));

// fetch records
$sql = "select * from product";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

$dataset = array(
    "echo" => 1,
    "totalrecords" => count($array),
    "totaldisplayrecords" => count($array),
    "data" => $array
);

echo json_encode($dataset);
?>

