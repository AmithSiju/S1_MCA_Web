<html>
<head><title>Result</title></head>
<center>
<body>
<?php
$name=$_POST['Name'];
$age=$_POST['age'];
$email=$_POST['email'];
$phoneH=$_POST['PhH'];
$phoneO=$_POST['PhO'];
$answer=$_POST['ans']
?>
<table border=1px cellpadding=5 height=300px width=400px>
<tr>
<th>Name</th>
<td><?php echo "<b><i>".$name."</b></i>";?></td>
</tr>
<tr>
<th>Age</th>
<td><?php echo"<b><i> " .$age. "</b></i>";?></td>
</tr> 
<tr>
<th>Answer</th>
<td><?php echo"<b><i> ".$ans."</b></i>";?></td>
</tr>
<tr>
<th>Email ID</th>
<td><?php echo"<b><i>".$email."</b></i>";?></td>
</tr>
<tr>
<th rowspan=2>Phone Number</th>
<td><?php echo"Home : <b><i>".$phoneH."</b></i>";?></td>
<tr><td><?php echo"Office : <b><i>".$phoneO."</b></i>";?></td></tr>
</tr>
</table>
</body>
</center>
</html>
