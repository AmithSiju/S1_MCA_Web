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
$age=$_POST['Age'];
$pass=$_POST['Password'];
$mail=$_POST['Email'];
$num=$_POST['PhoneNo'];
$sq="insert into Login values('$Name',$age,'$pass','$mail','$num')";
$p=mysqli_query($con,$sq);
if($p)
{
	echo "<script>
	alert('Welcome ".$Name." ,You are succesfully signed in');
	</script>";
}
else
{
	echo "<script>
	alert('Insertion failed');
	</script>";
}

?>
</html>
