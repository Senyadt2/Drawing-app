<?php
$conn = mysqli_connect("localhost","root","","form");
$id = $_GET['id'];
//select query to find the id
$sql="delete from registration where id = $id";
mysqli_query($conn,$sql);

              header('location:list.php');
       
?> 



