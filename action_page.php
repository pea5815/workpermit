<?php 
include'connect.php';
$organi_id = $_GET['organi_id'];
$in_organi = $_GET['in_organi'];
$in_fullname = $_GET['in_fullname'];
$in_tel = $_GET['in_tel'];
$out_organi = $_GET['out_organi'];
$out_fullname = $_GET['out_fullname'];
$out_tel = $_GET['out_tel'];
$start_date = $_GET['start_date'];
$start_time = $_GET['start_time'];
$end_date = $_GET['end_date'];
$end_time = $_GET['end_time'];
$editor1 = $_GET['editor1'];

echo $editor1;

$sql = "INSERT INTO activity (organi_id, in_organi, in_fullname, in_tel, out_organi, out_fullname, out_tel, start_date1, start_time, end_date, end_time, detail)
VALUES ('$organi_id', '$in_organi', '$in_fullname', '$in_tel', '$out_organi', '$out_fullname', '$out_tel', '$start_date', '$start_time', '$end_date', '$end_time', '$editor1')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
