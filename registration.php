<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		form{
			width: 28%;
			border: 2px solid black;
			padding: 10px;
			background-color: black;
			border-radius: 15px;
		}
		th,td{
			padding:15px;
			text-align:center;
			color: white;
		}
	</style>
</head>
<body>	
	<center>
		<h1>Insert Data</h1>
		<form method="POST" action="insert.php">
			<table>
				
				<tr>
					<th><label>UserName</label></th>
					<td><input type="text"  placeholder="Enter username" name="f_user" ></td>
				</tr>

				<tr>
					<th><label>Password</label></th>
					<td><input type="text" placeholder="Enter password" name="f_pass"></td>
				</tr>

				<tr>
					<th><label>Email</label></th>
					<td><input type="email" placeholder="Enter your email" name="f_eml"></td>
				</tr>
				<tr>
					<th><label>Address</label></th>
					
				   <td><input type="text" placeholder="Enter Address" name="f_add"> </td>
              
				  
				</tr>
				<tr>
					
				 <th colspan="6"><a href="login.php"><button style="background-color:#0c3294;border: none;padding: 6px;border-radius: 10px;color:white;">Insert Record</button>	</a></th>
			
				</tr>
			</table>

			
		</form>
	</center>	
	
</body>
</html>