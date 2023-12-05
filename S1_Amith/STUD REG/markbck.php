<?php
$con=mysqli_connect('localhost','root','cetmca','Student');
/*if($con)
{
	echo "connection succesfull";
}
else
{
	echo"connection failed";
*/
$ktu=$_POST['ktu'];
$roll=$_POST['rolln'];
$sub=$_POST['sub'];
$seri1=$_POST['seri1'];
$seri2=$_POST['seri2'];
$ass1=$_POST['ass1'];
$ass2=$_POST['ass2'];
$atten=$_POST['atten'];
$sq="INSERT INTO 'Mark' VALUES('$ktu',$roll,'$sub',$seri1,$seri2,$ass1,$ass2,'$atten');";
$p=mysqli_query($con,$sq);
if($p)
{
	echo "<script>
	alert(You have succesfully entered the mark');
	</script>";
}
else
{
	echo "<script>
	alert('Entry failed');
	</script>";
}

?>

