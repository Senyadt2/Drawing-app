<?php
$conn = mysqli_connect("localhost","root","","form");
$id = $_POST['id'];
$first=$_POST['first'];    //from form
$last=$_POST['last'];     //from form
$sql="UPDATE registration set First ='$first' ,Last ='$last' where id = $id "; 
       mysqli_query($conn,$sql);
       if($sql)
       {
              header('location:list.php');
       }
?>
