<?php
$conn = mysqli_connect("localhost","root","","form");
print_r($_POST);    
$firstname=$_POST['first'];
$lastname=$_POST['last'];
$sql="insert into registration(First,Last)values('$firstname','$lastname')";
mysqli_query($conn,$sql);

header('Location:form.html');
echo "Inserted.";
?>  


