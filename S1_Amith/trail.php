<html>
<body bgcolor="#A35238">
<center>
<h1> WELCOME TO FRESHERS WORLD </h1>
<table bgcolor="#2E7C6A" border=1px cellpadding=5 height=500px width=600px>
<form>
<tr>
<th colspan="2">Registration Form</th>
</tr>
<tr>
<th>Name</th>
<td><input type="text" id="Name"></td>
</tr>
<tr>
<th>Age</th>
<td><select id="age">
<?php
for( $i=18;$i<41;$i++)
{
echo "<option values=".$i.">".$i."</option>";
}
?>
</select>
</tr>
<tr>
<th>Password</th>
<td><input type="password" id="password"></td>
</tr>
<tr>
<th>Re-enter Password</th>
<td><input type="password" id="re-password"></td>
</tr>
<tr>
<th rowspan="4">Select your security question</th>
<td><input type="radio" name="sec">What is your pet name ?</td>
<tr><td><input type="radio" name="sec">Who is your best friend ?</td></tr>
<tr><td><input type="radio" name="sec">What is your favourite color ?</td></tr>
<tr><td><input type="radio" name="sec">Who is your favourite teacher ?</td></tr>
</tr>
<tr>
<th>Answer of security question</th>
<td><input type="text" id="answer"></td>
</tr>
<tr>
<th>Email id</th>
<td><input type="text" id="email"></td>
</tr>
<tr>
<th>Languages Known</th>
<td>
<input type="checkbox">Malayalam</input>
<input type="checkbox">English</input>
<input type="checkbox">Hindi</input></td>
</tr>
<tr>
<th>Phone Number</th>
<td><table border=1px>
<tr>
<th>Home</th>
<th>Other</th></tr>
<tr>
<td><input type="text" id="num"></td>
<td><input type="text" id="num"></td></tr>
</table>
</tr>
<tr>
<th>Upload CV</th>
<td><input type="file"></td>
</tr>
<tr>
<td><center><button>Reset</button></center></td>
<td><center><button>Submit</button></center></td>
</tr>
</center>
</form>
</body>
</html>
