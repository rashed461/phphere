
<?php
include "dbcont.php";

$id=$_POST['f_id'];
$nam=$_POST['f_nam'];
$des=$_POST['f_des'];
$pri=$_POST['f_pri'];
$qn=$_POST['f_qn'];


$smt = "SELECT * FROM product WHERE ID='$id'";
$result= $conn->query($smt);
if($result->num_rows==0)
{
	$sql = "INSERT INTO product (ID,Name,Description,Purchase_price,Quantity) 
		VALUES ('$id', '$nam', '$des', '$pri','$qn')";

		
		if($conn->query($sql))
		{
			header('location:user.php');	
		}
		else
		{
			echo "insertion failed";
		}
}
else{
	echo "username already exits try another";
	//header("Location:registration.php");
	
	}

$conn->close();
?>

