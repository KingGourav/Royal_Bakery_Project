<?php
include 'connection.php';
error_reporting(0);
$query = "SELECT * FROM product";
$data = mysqli_query($conn, $query);
$html = '<table><tr><td>Product Id</td><td>Product Name </td><td>Discription</td><td>Category</td><td>Price</td><td>Image</td></tr>';

while ($row = mysqli_fetch_assoc($data)) {
	$html.='<tr><td>'.$row['pid'].'</td><td>'.$row['name'].'</td><td>'.$row['dis'].'</td><td>'.$row['category'].'</td><td>'.$row['price'].'</td><td>'.$row['image'].'</td></tr>';
}
$html.='</table>';

header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=productreport.xls');
echo ($html);
  ?>