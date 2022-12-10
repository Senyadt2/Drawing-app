<?php

// require('connection.php');
$conn= mysqli_connect("localhost","root","","app");

print_r($_POST);    
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
if(isset($_POST['register']))
{
   $user_exist_query="SELECT * FROM 'regester' WHERE 'username'='$_POST[username]' OR 'email'='$_POST[email]'";
   $result=$conn->query($user_exist_query);  //can run or cannot run
   
   if($result)     //if query run
   { 

        if($result->num_rows>0)  #it will be executed if username or email is already taken       //check number of rows that are being fetch
        {                                                                      //if user or email present in table
            #if any user alread taken username or email
            $result_fetch=$result->fetch_assoc($result);   //associative order ma data lai fetch garrna lai
            if($result_fetch['username'] == $_POST['username'])    //compare garrna lai or match garrna lai
            {
               #error for username already registered
               echo "Username already taken";
            }
            else
            {
             #error for email already registered
             echo"
             <script>
             alert('$result_fetch[email]-E-mail already registered');
             window.location.href='form.php';
             </script>
             ";
            }
        }
        else{  #it will be executed if no one has taken username or email before
            $sql="insert into regester(full_name,username,email,pass)values('$fullname','$username','$email','$password')";
            if(mysqli_query($conn,$sql))//qury lai fire gar yo connection ma query xha qurey variable ma
            {
                #if data inserted successfully
                "<script>
                 alter('Registration scuccessfull');
                 window.location.href='form.php';
                </script>";

            }
            else{
                #if data cannot be inserted 
                echo"
                <script>
                alert('Cannot run query');
                window.location.href='form.php';
                </script>
                ";
            }
        }
    }
   else{
      echo "
        <script>
        alter('Cannot Run Query');
        window.location.href='form.php';
        </script>
        ";
    }
}
$conn->close();
// header('location:form.php');
?>