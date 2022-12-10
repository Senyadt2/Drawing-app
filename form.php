<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
input{
    caret-color: blueviolet;
}
.hero{
    height: 100%;
    width: 100%;
    background-image:url(bg.jpg);
    background-position: center;
    background-size: cover;
    position: absolute;
}
.form-box{                          
    width: 380px;
    height: 480px;
    position: relative;
    margin: 5% auto;
    background:transparent;
    padding: 5px;
    border-radius: 50px;
    overflow: hidden;        /*if yo use garena vane both log in ra register ko dekhau xha*/
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

}
.button-box{                    /*side small brouwn color outline*/
    width: 220px;
    margin: 35px auto;
    position: relative;
    box-shadow: 0  0  20px 1px #BA94D1;
    border-radius: 30px;
}
.toggle-btn{               /*edited the log in and register */
    padding: 10px 30px;
    cursor: pointer;
    background: transparent;
    border:0;
    outline: none;
    position: relative;
}
#btn{                               /*the thing that is going to be toggle*/   
    top: 0;
    left: 0;
    position: absolute;
    width: 110px;
    height: 100%;
    background:#BA94D1;
    border-radius: 30px;
    transition: .5s;

}
.input-group{
    top: 130px;
    position: absolute;
    width: 280px;
    transition: .5s;
}
.input-field{      /*enter the ...... ko tala ko line*/
 width: 100%;
 padding: 10px 0;
 margin: 5px 0;
 border-left: 0;
 border-right: 0;
 border-top: 0;
 border-bottom: 1px solid #999;
 outline: none;
 background: transparent;   
}
.submit-btn{
    width: 75%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;       /*yo halena vane remember password mathi janxha*/
    margin: auto;
    background:#BA94D1;
    border: 0;
    outline: none;
    border-radius: 20px;
    
   

}
.checkbox{
    margin: 20px 10px 32px 0;

}
span{
    color: #777;
    font-size: 14px;
    bottom: 64px;
    position: absolute;
}
#login{
    left: 50px;
}
#register-form{
    left: 450px;
}
h1
 {
    margin-top: 20px;
    color: #8b8383f7;
    animation-name: typing;
    animation-duration: 10s;
    animation-iteration-count: 1;
    
    animation-timing-function: ease-in;
 }


@keyframes typing {
    0%{
       
        opacity: 0;
    }
    
    100%{
        width: 100%;
        opacity: 100;
    }
}
.hero{
    animation-name: apear;
    animation-duration: 2s;
    animation-timing-function: ease-out;
    animation-iteration-count: 1;
}
@keyframes apear {
    0%{
        opacity: 0;
    }
   
    100%{
        opacity: 100;
    }
}
 </style>
</head>
<body>

    <div class="hero">
        <div class="form-box">
          <div class="button-box">
            <div id="btn"></div>
             <button type="button" class="toggle-btn" onclick="login()">Log In</button>
             <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
          
          <form id="login" class="input-group" action="login_check.php" method="POST" enctype="application/x-www-form-urlencoded" >
            <input type="text" value="" name="email"     class="input-field" placeholder="Enter E-mail"required>
            <input type="password"   value=""  name="password"    class="input-field" placeholder="Enter password"required>
            
            <input type="checkbox" class="checkbox"><span>Remember password</span>
            <button type="submit"class="submit-btn" name="login">Log In</button>
          </form>


          <form id="register-form" class="input-group"  method="POST" action="insert.php">
          <input type="text" class="input-field"       placeholder="Full Name"      name="fullname"    value=""   required>
            <input type="text" class="input-field"     placeholder="Username"     name="username"    value=""   required>
            <input type="email" class="input-field"    placeholder="E-mail"      name="email"       value="" required>
            <input type="password" class="input-field" placeholder="Password" name="password"    value="" required>
            <input type="checkbox" class="checkbox"><span>I agree to the terms and conditions</span>
            <button type="submit"class="submit-btn" name="register">Register</button>
          </form>

        </div>
        
       </div>
      <script>                          /*silde hune kam yesle garauxha*/
        var x=document.getElementById("login");
        var y=document.getElementById("register-form");
        var z=document.getElementById("btn");
        function register()
        {
          x.style.left="-400px";
          y.style.left="50px";
          z.style.left="110px";

        }
        function login()
        {
          x.style.left="50px";
          y.style.left="450px";
          z.style.left="0";

        }
      </script>
   
</body>
</html>
