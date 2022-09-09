<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","ersd");



//$sqlQuery = "SELECT student_id,student_name,SUM(marks) FROM tbl_marks ORDER BY student_id";


$sqlQuery = "SELECT classe,SUM(H) FROM utilisation GROUP BY classe";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}


mysqli_close($conn);

echo json_encode($data);
?>