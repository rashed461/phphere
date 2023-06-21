<?php
 include "dbcont.php";
$id = $_GET['del_id'];

$sql="DELETE FROM product where ID='$id'";
if($conn->query($sql))
{
	header('Location:user.php');
}
else  "Delete operation failed";

$conn->close();

?>