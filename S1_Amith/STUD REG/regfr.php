<html>
	<head></head>
	<body>
		<form action="regbck.php" method="POST">
		<center>
    <br><br><br><br>
		<br><br><br><br>
		<table border=5px width=200px height=400px >
			<tr>
			<th colspan=2>Sign In</th>
			</tr>
			<tr>
			<td>Name</td>
			<td><input type="text" name="Name"></td>
			</tr>
			<tr>
			<td>Age</td>
			<td>
			<select id="Age" name="Age"><?php
			for( $i=18;$i<61;$i++)
			{
			echo "<option values=".$i.">".$i."</option>";
			}
			?>
			</select></td>
			</tr>
			<tr>	
			<td>Password</td>
			<td><input type="password" name="Password"></td>
			</tr>
			<tr>	
			<td>Email</td>
			<td><input type="text" name="Email"></td>
			</tr>
			<tr>
			<td>Phone no</td>
			<td><input type="text" name="PhoneNo"></td></tr>
			<tr>
			<td colspan=2 style="text-align:center"><input type="submit" value="Sign in"></td>
			</tr>	
		</table>	
		</center>
		</form>
	</body>
</html>s
