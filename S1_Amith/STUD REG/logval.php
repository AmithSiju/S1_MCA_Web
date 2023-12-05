<?php
$con=mysqli_connect('localhost','root','cetmca','Student');
if($con)
{
    echo "Connection Successful";
}
else
{
    echo "Connection Failed";
}
if($_POST)
{
    if(isset($_POST["uname"]))
    {
        $username=$_POST["uname"];
        $password=$_POST["pass"];
        $s = "select * from Login where Name='$username' and Password='$password';";
        $q = mysqli_query($con,$s);
        if(mysqli_num_rows($q)==1)
        {
            header("Location:homeframes.php");
        }
        else{
            echo"<br>Login Failed";
        }
    }
    else{
        echo"No username recieved";
    }
}
else{
    echo"No Data recieved";
}
?>
