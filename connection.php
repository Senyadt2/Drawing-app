<?php
$conn = mysqli_connect("localhost","root","","app");
    
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
if(isset($_POST['register']))
{
   $user_exit_query="SELECT * FROM 'regester' ";
   $result=$conn->query($user_exit_query);  //can run or cannot run
   if($result)
   {
   if($result->num_rows>0)  #it will be executed if username or email is already taken       //check number of rows that are being fetch
    {                                                                       //if user or email present in table
            #if any user alread taken username or email
            $row=$result->fetch_assoc($result);   //associative order ma data lai fetch garrna lai
            if($row['email'] == $_POST['email'])    //compare garrna lai or match garrna lai
            {
               #error for username already registered
               echo "E-mail already taken";
            }
            else
            {
                $sql="insert into regester(full_name,username,email,pass)values('$fullname','$username','$email','$password')";
                mysqli_query($conn,$sql);
                
        
    }
    else{
        echo" error";
    }
}
else{
    "eerr";
}
}

?>
    