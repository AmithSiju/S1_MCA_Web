<html>
	<head></head>
	<body>
		<form action="ktubck.php" method="POST">
		<center>
    <br><br><br><br>
		<br><br><br><br>
		<table border=5px width=500px height=600px >
			<tr>
			<th colspan=2>KTU Registration</th>
			</tr>
			<tr>
			<th>Name</th>
			<td><input type="text" name="Name"></td>
			</tr>
			<tr>
			<th>Date Of Birth</th>
			<td><input type="date" name="dob"></td>
			</tr>
			<tr>	
			<th>Roll No</th>
			<td><input type="text" name="rolln"></td>
			</tr>
			<tr>	
			<th>KTU Id</th>
			<td><input type="text" name="KTU"></td>
			</tr>
			<tr>
			<th rowspan="3">Gender</th>
			<td><input type="radio" name="gen" value="Male">Male</td></tr>
			<tr><td><input type="radio" name="gen" value="Female">Female</td></tr>
			<td><input type="radio" name="gen" value="Other">Other</td>
			</tr>
			<tr>
			<th>Semester</th>
			<td>
			<select id="sem" name="sem"><?php
			for( $i=S1;$i<S7;$i++)
			{
			echo "<option values=".$i.">".$i."</option>";
			}
			?>
			</select></td>
	  	</tr>
			<tr><td colspan=2 style="text-align:center"><input type="submit" value="Register"></td>
			</tr>	
		</table>	
		</center>
		</form>
	</body>
</html>
