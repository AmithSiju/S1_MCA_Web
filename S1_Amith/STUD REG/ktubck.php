<html>
<head></head>
<?php
$con=mysqli_connect('localhost','root','cetmca','Student');
/*if($con)
{
	echo "connection succesfull";
}
else
{
	echo"connection failed";
}*/
$Name=$_POST['Name'];
$dob=$_POST['dob'];
$roll=$_POST['rolln'];
$ktu=$_POST['KTU'];
$gen=$_POST['gen'];
$sem=$_POST['sem'];
$sq="insert into KTU_Reg values('$Name','$dob','$roll','$ktu','$gen','$sem')";
$p=mysqli_query($con,$sq);
if($p)
{
	echo "<script>
	alert(You have succesfully registered');
	</script>";
}
else
{
	echo "<script>
	alert('Registration failed');
	</script>";
}

?>
</html>
