<html>
<head></head>
<?php
$con=mysqli_connect('localhost','root','cetmca','StudentN');
if($con)
{
	echo "connection succesfull";
}
else
{
	echo"connection failed";
}
$s="select * from STUD";
$q=mysqli_query($con,$s);
if(mysqli_num_rows($q))
{
		echo"<table border=5px><tr>
		<th>name</th><th>mark</th><th>rollno</th></tr>";
		while($row=mysqli_fetch_assoc($q))
		{
			echo"<tr>";
			echo"<td>".$row["Name"]."</td>";
			echo"<td>".$row["Mark"]."</td>";
			echo"<td>".$row["Roll No"]."</td>";
			echo"</tr>";
		}
		echo"</table>";
}
?>
</html>
