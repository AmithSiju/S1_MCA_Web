<?php
$con=mysqli_connect('localhost','root','cetmca','studentN');
$name=$_POST["Name"];
$mark=$_POST["Mark"];
$rno=$_POST["Roll No"];
$s="select * from  STUD where rollno='$rno'";
$q=mysqli_query($cosn,$s);
if(mysqli_num_rows($q))
{
echo"<html><body><form action='search2.php' method='post'>";
while($row=mysqli_fetch_assoc($q))
{
echo"Name <input type='text' value='".$row['Name']."'disabled><br>";
echo"Mark <input type='text' value=".$row['Mark']." name='mark1'><br>";
echo"Roll no <input type='text'name='roll' value='".$row['Roll no']."'><br>";
echo "<input type='submit' value='update'>";
}
echo"</form></body></html>";
}

?>
