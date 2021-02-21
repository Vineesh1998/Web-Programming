<html>
<head>
    <title>Form Design</title>
    <style>
        .form
        {
            background-color:purple;
            width:450px;
            margin:0 auto;
            padding:100px 50px;
        }
        input
        {
            width:300px;
            border:none;
            border-radius:50px;
            padding:10px 20px;
            margin-bottom:15px;
        }
        table
        {
            background:purple;
        }
        p
        {
            text-align:center;
            color:orange;
        }
        h1
        {
            color:yellow;
        }
        </style>
</head>
<body>
    <div class="form">
    <form action="login.php" method="POST">
<table align="center">
<tr><th><h1><u>MY FORM</u></h1></th></tr>
<tr><td><input placeholder="Username" type="text" name="user_name"></td></tr>
<tr><td><input placeholder="Email" type="email" name="user_email"></td></tr>
<tr><td><input placeholder="Password" type="password" name="password"></td></tr>
<tr><td><input placeholder="PH" type="text" name="phone"></td></tr>
<tr><td><input type="submit" value="submit" name="submit"></td></tr>
</div>
</table>
</form>
</body>
</html>

<?php
    
        if(isset($_POST['submit']))
        {
            $con=mysqli_connect("localhost","root","","myphp");
        if(!$con)
            {
                echo "connection error";
            }
        else
            {
            $name=$_POST['user_name'];
            $email=$_POST['user_email'];
            $pwd=$_POST['password'];
            $ph=$_POST['phone'];
            $sql="insert into login values('$name','$email','$pwd',$ph)";
            mysqli_query($con,$sql);
            }
        }
        
        
?>


