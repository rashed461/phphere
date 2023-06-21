<?php

include "dbcont.php";

$id = $_GET['edit_id'];
//echo $id;
$sql="SELECT * FROM product where ID='$id'";
$result = $conn->query($sql);
$arr = $result->fetch_assoc();
$ID =$arr['ID'];
$name =$arr['Name'];
$des=$arr['Description'];
$pri =$arr['Purchase_price'];
$qn =$arr['Quantity'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		form{
			width: 28%;
			border: 2px solid black;
			padding: 10px;
			background-color: black;
			color: white;
		}
		th,td{
			padding:15px;
			text-align:center;
		}
	</style>
</head>
<body>	
	<center>
		<h1>Edit Data</h1>
		<form method="POST" action="update.php">
			<table>
				<tr>
					<th><label>ID</label></th>
					<td><input type="text" value=<?php echo $ID ?> name="f_id"></td>
				</tr>

				<tr>
					<th><label>Name</label></th>
					<td><input type="text" value=<?php echo $name ?> name="f_nam"></td>
				</tr>

				<tr>
					<th><label>Description</label></th>
					<td><input type="text"  value=<?php echo $des ?> name="f_dess" ></td>
				</tr>

				<tr>
					<th><label>Purchase_Price</label></th>
					<td><input type="text" value=<?php echo $pri ?> name="f_pri"></td>
				</tr>

				<tr>
					<th><label>Quantity</label></th>
					<td><input type="text" value=<?php echo $qn ?> name="f_qn"> </td>
				</tr>
				<tr>
					<td colspan="2">
					    <input style="background-color:#67f6e1;border: none;padding: 10px;border-radius: 10px;color:black;" type="submit" value="UPDATE">
				    </td>
				</tr>
			</table>
		</form>	
	</center>	
	
</body>
</html>








