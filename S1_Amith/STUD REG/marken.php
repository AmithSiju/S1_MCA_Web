<html>
	<head></head>
	<body>
		<form action="markbck.php" method="POST">
		<center>
    <br><br><br><br>
		<br><br><br><br>
		<table border=5px width=500px height=600px >
			<tr>
			<th colspan="2">Mark Entry</th></tr>
			<tr>
			<th>KTU ID</th>
			<td>
			<select id="id" name="ktu"><?php
			$con=mysqli_connect('localhost','root','cetmca','Student');
			$s="select KTU_Id from KTU_Reg";
			$r=mysqli_query($con,$s);
			while($rs=mysqli_fetch_assoc($r))
			{
				echo"<option value='".$rs['KTU_Id']."'>".$rs['KTU_Id']."</option>";
			}
			?>
			</select></td>
			</tr>
			<tr>
			<th>Roll No</th>
			<td>
			<select id="id" name="rolln"><?php
			$con=mysqli_connect('localhost','root','cetmca','Student');
			$s="select RollNo from KTU_Reg";
			$r=mysqli_query($con,$s);
			while($rs=mysqli_fetch_assoc($r))
			{
				echo"<option value='".$rs['RollNo']."'>".$rs['RollNo']."</option>";
			}
			?>
			</select></td>
			</tr>
			<tr>
			<th>Subject</th>
			<td><select id="sub" name="sub">
				<option values="select">Select</options>
				<option values="23MCA101">Mathematics</options>
				<option values="23MCA102">Digital Fundamentals</options>
				<option values="23MCA103">Data Structure</options>
				<option values="23MCA104">Software Engg.</options>
			</td>
			</tr>
			<tr>
			<th>Series 1</th>
			<td><input type="text" name="seri1"></td>
			</tr>
			<tr>
			<th>Series 2</th>
			<td><input type="text" name="seri2"></td>
			</tr>
			<tr>
			<th>Assignment 1</th>
			<td><input type="text" name="ass1"></td>
			</tr>
			<tr>
			<th>Assignment 2</th>
			<td><input type="text" name="ass2"></td>
			</tr>
			<tr>
			<th>Attendance</th>
			<td><input type="text" name="atten"></td>
			</tr>
			<tr><td colspan=2 style="text-align:center"><input type="submit" value="Submit"></td>
			</tr>	
		</table>
		</center>
		</form>
	</body>
</html>
