<?php
$conn = mysqli_connect("localhost","root","","form");
print_r($_POST);    
$firstname=$_POST['first'];   //from form.html 
$lastname=$_POST['last'];    //from form.html
$sql="insert into registration(First,Last)values('$firstname','$lastname')";
mysqli_query($conn,$sql);

header('Location:index.html');

?>  





