<?php
	include "dbcont.php";
	
	$s = "SELECT * FROM product";
	$result = $conn->query($s);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		 table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        th {
            background-color: #4CAF50;
            color: white;
        }
		.insert-button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            display: inline-block;
            font-size: 14px;
            margin-bottom: 20px;
            cursor: pointer;
            border-radius: 4px;
        }
		
	</style>
</head>
<body>	
	
		<center>
			<h1>Product Data</h1>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Purchase Price</th>
					<th>Quantity</th>
					<th>Edit</th>
					<th>Delete</th>
			
				
				</tr>
				<?php
				
				while($r = $result->fetch_assoc())
				{
					$idd=$r['ID'];
					$nam=$r['Name'];
					$des=$r['Description'];
					$pri=$r['Purchase_price'];
					$qn=$r['Quantity'];
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $des . "</td>";
						echo "<td>". $pri . "</td>";
						echo "<td>". $qn  . "</td>";
						echo "<td> <a style='text-decoration:none;color:green;font-weight:bold' href='edit.php?edit_id=$idd'><button style='background-color:green;border:none;border-radius:5px;padding:3px;width:60px;color:white;'>EDIT</button</a></td>";

						echo "<td> <a onClick=\" javascript: return confirm('Are you sure to delete this?') \" style='text-decoration:none;color:red;font-weight:bold' href='delete.php?del_id=$idd'><button style='background-color:red;border:none;border-radius:5px;padding:3px;width:60px;color:white;'>DELETE</button></a></td>";
					echo "</tr>";
				}
				?>
			</table>
			<br><br>
			<a href="product_form.php"><button class="insert-button">Insert New Data </button></a>
		</center>
	 
</body>
</html>




