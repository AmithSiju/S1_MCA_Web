<html>
	<head></head>
	<body>
	<form action="" method="POST">
		Roll No:<input type="text" name="roll"><br>
		<input type="submit" value="search">
	</form>
<?php
$con=mysqli_connect('localhost','root','cetmca','StudentN');
if($con)
{
	echo "connection succesfull";
}
else
{
	echo"connection failed";

$n=$_POST['roll'];
$s="select * from STUD where roll='$n';";
$q=mysqli_query($con,$s);
if(mysqli_num_rows($q))
{
echo"<form>";
while($row=mysqli_fetch_assoc($q))
{
	echo $row['Roll No'] . " " . $row['Name'] ." " . $row['Mark'];
}
?>

</body>
</html>
