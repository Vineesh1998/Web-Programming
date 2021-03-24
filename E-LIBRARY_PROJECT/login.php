<?php
$con=mysqli_connect("localhost","root","","library");

session_start();

if (isset($_POST['submit'])){
    $username=$_POST['stud_id'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM tbl_login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $sql1 = "SELECT stud_id,status FROM tbl_student WHERE username='$username' AND password='$password'";
    $result1=mysqli_query($con,$sql1);
    $res=mysqli_fetch_array($result1);
    if($result->num_rows > 0)
        {
            $row=mysqli_fetch_array($result);
            if($row['type']=='user'){
                $id=$res['stud_id'];
                $_SESSION['id']=$id;
                header("location:user_home.php");
            }
            elseif($row['type']=='admin'){
                header("location:admin_home.php");
            }
        }
    elseif($res['status']==0){
        ?>
        <script>alert('waiting for admin approve!!!')</script>
        <?php
    }
        else{
            echo "<script>alert('Invalid Username and Password')</script>";
            }
    
}


?>
<html>
<head>
<title>Library</title>
<link rel="stylesheet"type="text/css"href="css/loginpage.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="loginbox">
    <img src="images/th.jpg"class="th">
    <form action="" method="POST">
<h1 align="center">LOGIN PAGE</h1>
<table align="center">
<p>ID</p>
<input type="text" name="stud_id"  required>
<p>PASSWORD</p>
<input type="password" name="password" required>
<input type="submit" name="submit">
<p>Don't have an account? <a href="signin.php">Register Here</a></p>
</table>
</form>
        </div>
</body>
</html>