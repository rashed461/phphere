<?php
include "dbcont.php";

$id=$_POST['f_id'];
$nam=$_POST['f_nam'];
$des=$_POST['f_dess'];
$pri=$_POST['f_pri'];
$qn=$_POST['f_qn'];



$sql = "UPDATE product SET ID='$id',Name='$nam',Description='$des',Purchase_price='$pri',Quantity='$qn' where ID='$id'";
if ($conn->query($sql) === TRUE) {
	header('Location:user.php');
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>