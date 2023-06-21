
<?php
include "dbcont.php";

$user=$_POST['f_user'];
$pass=$_POST['f_pass'];
$eml=$_POST['f_eml'];
$add=$_POST['f_add'];



$smt = "SELECT * FROM login WHERE username='$user'";
$result= $conn->query($smt);
if($result->num_rows==0)
{
	$sql = "INSERT INTO login (username,password,email,adress) 
		VALUES ('$user', '$pass', '$eml', '$add')";

		
		if($conn->query($sql))
		{
			header('location:index.php');	
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

