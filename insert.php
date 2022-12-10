<?php
$conn = mysqli_connect("localhost","root","","app");
    
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


$sel=mysqli_query($conn,"select email from regester where email='$email'");
$check=mysqli_num_rows($sel);

if($check==1)
{
echo "email exist";

}else{
    $sql="insert into regester(full_name,username,email,pass) values('$fullname','$username','$email','$password')";
    mysqli_query($conn,$sql);
    if($sql){
        echo "successfully signed up";
        header('location:form.php');
    }else{

        echo "failed";
    }

}
?>  

