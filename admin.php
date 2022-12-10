<style>
body{
    width:100%;
    height:100vh;
    background-image: linear-gradient(to right,#272727,#303030);
    color:white;

}
a {
    text-decoration: none;
    color:black;
    line-height: 20px;
}
a:hover{
    font-size:25px;
}

#addbtn {
    background: red;
    padding : 10px;
}
table {
    margin-top:20px;
}
th{
    background:red;
    padding:5px;
}       
td{
    width:80px;
}


</style>
<a href="form.php" id ="addbtn">Add Member</a>

<?php
$conn=mysqli_connect("localhost","root","","app");
//check connection
if($conn->connect_error)
{
    die("connection failed:" .$conn->connect_error);

}
$sql="SELECT * FROM regester";

$result=$conn->query($sql);

if($result->num_rows> 0)
{
    //output data of each row
    ?>
    <div id="bg">
    <table border="1" cellspacing="10px" cellpadding="20px">
        <tr>
            <th>Id</th>
            <th>First</th>
            <th>last
            <th>Action</th>
            <th>Update</th>
        <tr>
<?php
    while($row = $result->fetch_assoc())     //here database Id matters.
    {
        echo "<tr><td>" . $row["Id"] . "</td>
        <td>" . $row["First"]. "</td>
        <td>"  .$row["Last"]. "</td>
        <td> <a href='delete.php?id=" .$row["Id"]."'>Delete</a></td>
        <td><a href='edit.php?id=" . $row["Id"]."'>Edit</a></td></tr>";

    }
}
    else{
        echo "0 results";
    }
    $conn->close();
    ?>
    </table>
</div>


