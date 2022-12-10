<?php
$conn = mysqli_connect("localhost","root","","app");
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from regester where email='$email' and pass='$password'";

$result=$conn->query($sql);
if($result->num_rows> 0)
{
    header('location:index.html');
}
else{
    echo "login failed";
}
?>
