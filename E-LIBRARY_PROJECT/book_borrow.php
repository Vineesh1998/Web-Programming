<html>
<head>
<title>librarymanagement</title>
</head>
<body bgcolor="linen">
<form action="" name="myform" method="post">
<table border="0" align="center">
<tr><th><h1><b><u>BOOK DETAILS</u></b></h1></th></tr>
<tr><td><h2><b>ENTER BOOK ID</b></h2></td><td>
<select> 
<option>SELECT</option>
<?php
include "connection.php";
$records=mysqli_query($connection,"SELECT book_id from book");
while($data=mysqli_fetch_assoc($records))
{
echo '<option value='.$data["book_id"].'>'.'</option>';
}
mysqli_close($connection);
?>
</select>
</td></tr>
<tr><td><h2><b>ENTER STUDENT ID</b></h2></td><td>
<select> 
<option>SELECT</option>
<?php
include "connection.php";
$info=mysqli_query($connection,"SELECT stud_id from student");
while($infor=mysqli_fetch_assoc($info))
{
echo '<option value='.$infor["stud_id"].'>'.'</option>';
}
mysqli_close($connection);
?>
</select>
</td></tr>
<tr><td><h2><b>ENTER ISSUE DATE</b></h2></td><td><input type="date" name="issue_date"></td></tr>
<tr><td><h2><b>ENTER RETURN DATE</b></h2></td><td><input type="date" name="return_date"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit"></td></tr>
</table>
</form>
</body>
</html>
<?php
include "connection.php";
if(isset($_POST["submit"]))
{
$book_id=$_POST["book_id"];
$stud_id=$_POST["stud_id"];
$issue_date=$_POST["issue_date"];
$return_date=$_POST["return_date"];
$sql="insert into borrow values('$book_id','$stud_id',$issue_date,$return_date)";
if(mysqli_query($conn,$sql))
{
echo "<script>alert('RECORD ADDED SUCCESSFULLY')</script>";
}
else
{
echo "error".mysqli_error($conn);
}
}
$sql1="select book_id,stud_id from borrow";
$result=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_assoc($result))
{
echo '<option value='.$row["book_id"].'>'.$row["stud_id"].'</option>';
}/*
mysqli_close($conn);
?>