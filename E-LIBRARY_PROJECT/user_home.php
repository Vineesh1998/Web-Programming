<?php 
	include 'user_header.php';
	include 'db/connection.php';
	$id=$_SESSION['id'];
	$sql="select name from tbl_student where stud_id ='$id'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);
?>
<h1>Welcome<br> <?php echo $row['name']; ?></h1>