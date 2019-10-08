<?php 
include 'config.php';

$sel = mysqli_query($con,"select * from อะไหล่ภายใน");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
 $data[] = array("ชื่อสินค้า"=>$row['ชื่อสินค้า']);
}
echo json_encode($data);
?>
