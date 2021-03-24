<?php
if (isset($_POST['submit']))
{
    $con=mysqli_connect("localhost","root","","library");
    if(!$con)
        {
            echo "<script>alert('connection error')</script>";
        }
    else
        {
        $stud_id=$_POST['stud_id'];
        $stud_name=$_POST['stud_name'];
        $admission=$_POST['admission'];
        $gender=$_POST['abc'];
        $depart=$_POST['de'];
        $password=($_POST['password']);
        $repassword=($_POST['re_password']);
        
        $sql="SELECT * FROM sigin WHERE student_id=$stud_id AND password='$password'";
        $result = mysqli_query($con,$sql);
        $sql="insert into sigin values($stud_id,'$stud_name',$admission,'$gender','$depart','$password','$repassword')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<script>alert('waiting for admin approve!!!')</script>";
            
        }
        }
}
    if($password == $repassword){

    }else{
        echo "<script>alert('password not matched.')</script>";
    }
    
?>
<html>
<head>
<title>Library</title>
<link rel="stylesheet"type="text/css"href="loginpage.css">

</head>
<body>
    <div class="loginbox">
    <img src="th.jpg"class="th">
        <form action="" method="POST">
<h1 align="center">NEWSTUDENT PAGE</h1>
<p>STUD ID</p>
<input placeholder="Student Id" type="text" name="stud_id" value="<?php echo $stud_id; ?>" required>
<p>STUD NAME</p>
<input placeholder="Student Name" type="text" name="stud_name" value="<?php echo $stud_name; ?>" required>
<p>ADMISSION NO</p>
<input placeholder="Admission No" type="text" name="admission" value="<?php echo $admission; ?>" required>
<p>GENDER</p>
<input type="radio" name="abc" value="Male" required>Male<input type="radio" name="abc" value="Female">Female
<p>DEPARTMENT</p>
<input type="radio" name="de" value="Btech" required>Btech<input type="radio" name="de" value="MCA">MCA<input type="radio" name="de" value="Mtech">Mtech
<p>PASSWORD</p>
<input placeholder="Password" type="password" name="password" <?php echo $_POST['password']; ?> required>
<p>RE-ENTER PASSWORD</p>
<input placeholder="Re-Enter Password" type="password" name="re_password" <?php echo $_POST['re_password']; ?> required>
<input type="submit" name="submit">
<p>Have an account? <a href="login.php">Login Here</a></p>
        </div>
</body>
</html>