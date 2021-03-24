<?php
	include 'db/connection.php';
if (isset($_POST['submit']))
{
        $stud_name=$_POST['stud_name'];
        $admission=$_POST['admission'];
        $gender=$_POST['abc'];
        $depart=$_POST['de'];
        $phno=$_POST['phno'];
        $dob=$_POST['dob'];
        $username=$_POST['username'];
        $password=($_POST['password']);
        $repassword=($_POST['re_password']);
        $status=0;
        
	if($password != $repassword){

        echo "<script>alert('password not matched.')</script>";
    }
    else{
       
        $sql="insert into tbl_student(name,admission_no,gender,department,dob,phone_no,username,password,status) values('$stud_name','$admission','$gender','$depart','$dob','$phno','$username','$password','$status')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('waiting for admin approve!!!'); window.location.href='login.php';</script>";
            
        }
    }
}
    
?>
<html>
<head>
<title>Library</title>
<link rel="stylesheet"type="text/css"href="css/signin.css">
</head>
<body>
    <div class="loginbox">
        <form action="" method="POST">
		<h1 align="center"><u>NEWSTUDENT PAGE</u></h1><br>
		<table  align="center">
		<tr>
			<td>student name</td>
			<td><input placeholder="Student Name" type="text" name="stud_name"placeholder="enter student name"required></td>
		</tr>
		<tr>
			<td>Admission number</td>
			<td><input placeholder="Admission No" type="text" name="admission"placeholder="enter admission name" required></td>
		</tr>
		<tr>
			<td rowspan="2">gender</td>
			<td><input type="radio" name="abc" value="Male" required>Male</td>
		</tr>
		<tr><td><input type="radio" name="abc" value="Female">Female</td>
		</tr>
		<tr>
			<td rowspan="3">department</td>
			<td><input type="radio" name="de" value="Btech" required>Btech</td>
		</tr>
		<tr>
			<td><input type="radio" name="de" value="MCA">MCA</td>
		</tr>
		<tr>
			<td> <input type="radio" name="de" value="Mtech"> Mtech</td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input placeholder="Phone Number" type="text" name="phno" required></td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td><input placeholder="Date of Birth" type="date" name="dob" required></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input placeholder="Username" type="text" name="username" required></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input placeholder="Password" type="password" name="password" placeholder="enter password"required></td>
		</tr>
		<tr>
			<td>Re-Enter password</td>
			<td><input placeholder="Re-Enter Password" type="password" name="re_password" placeholder="re-enter password"required></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">Have an account?<br><a href="login.php">Login Here</td>
		</tr>
	</table>
	</form>
</div>	
</body>
</html>