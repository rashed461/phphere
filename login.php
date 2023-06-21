<?php

session_start();
include"dbcont.php";

if(isset($_POST['login'])){
$user= $_POST['f_user'];
$pass= $_POST['f_pass'];

$sql="SELECT * FROM login WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if($result->num_rows==1)
{
	header('Location:user.php');
}
else{
	echo"Please enter a valid username and password...";
}

}
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>
		form{

			border: 2px solid black;
			background-color: black;
			width: 20%;
			color: white;
			border-radius: 12px;
			padding: 10px;
		}
		th,td{
			padding: 10px;
			color: white;
		}
	</style>
</head>
<body>
	<center>
 <h1>Login</h1>
		<form method="POST" action="login.php">
			<table>
				<tr>
					<th><label>UserName</label></th>
					<td><input type="text" placeholder="Enter username" name="f_user"></td>
				</tr>

				<tr>
					<th><label>Password</label></th>
					<td><input type="text" placeholder="Enter password" name="f_pass"></td>
				</tr>
				<tr>
					<th colspan="2">
					    <input style="background-color:#67f6e1;border: none;padding: 10px;border-radius: 10px;color:black;" type="submit" name="login" value="Login">
				    </th>
				</tr>
            </table>
        </form>
        </center>
</body>
</html>