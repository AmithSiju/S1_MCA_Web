<?php
$con=mysqli_connect('localhost','root','cetmca','studentN');
$r=$_POST['roll'];
$m=$_POST['mark1'];

$sq="update STUD set mark=".$m." where rollno=".$r;
mysqli_query($con,$sq);
?>
