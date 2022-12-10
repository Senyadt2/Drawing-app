<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:#272727;
        }
    </style>
</head>
<body>
    <?php
    $conn=mysqli_connect("localhost","root","","form");
    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
      
    }
    $id = $_GET['id'];   
    if(empty($id))      
    {                                   
        header('location:list.php');
    }
    
    $sql ="SELECT * FROM registration where id = '$id'";
    $result= $conn->query($sql);    

    if($result->num_rows >0)
    {
        $row = $result->fetch_assoc();
    
    ?>
    <form action="update.php" method="POST" >
    <table>
    <tr>
        <input type="hidden" name="id" value="<?php echo $id;?>"/>
    <td>First</td>
    <td><input type="text" name="first" value="<?php echo $row['First']; ?>"></td>
    </tr>
    <tr>
    <td>Last</td>
    <td><input type="text" name="last" value="<?php echo $row['Last']; ?>"></td>
    </tr>
    <tr >
        <td> 
            <input type="submit" name="update">
        </td>
    </tr>

    </table>
    </form>
    <?php }?>
</body>
</html>