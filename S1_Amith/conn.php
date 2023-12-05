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

$sq="insert into STUD values ('Sura',30,21)";
$p=mysqli_query($con,$sq);
if($p)
{
	echo "<script>
	alert('succesfully inserted 1 row');
	</script>";
}
else
{
	echo "<script>
	alert('Insertion failed');
	</script>";
}
?>

