<?php
	include 'db/connection.php';
	include 'header.php';
	$id=$_REQUEST['id'];
	$sql="select * from tbl_student where stud_id='$id';";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result)
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="container">
	<div class="content3">
		<center>
			<div class="pad">
			<div class="txt_head">
				Student Details
			</div>
		</div>
<table class="tbl">
	<tr>
		<th class="td">Name</th>
		<td class="td"><?php echo $row['name']; ?></td>
	</tr>
	<tr>
		<th class="td">Admission Number </th>
		<td class="td"><?php echo $row['admission_no']; ?></td>
	</tr>
	<tr>
		<th class="td">Gender</th>
		<td class="td"><?php echo $row['gender']; ?></td>
	</tr>
	<tr>
		<th class="td">Phone Number</th>
		<td class="td"><?php echo $row['phone_no']; ?></td>
	</tr>
	<tr>
		<th class="td" class="td">Department</th>
		<td class="td"><?php echo $row['department']; ?></td>
	</tr>
	<tr>
		<th class="td" class="td">Date Of Birth</th>
		<td class="td"><?php echo date("d/m/Y",strtotime($row['dob'])); ?></td>
	</tr>
</table>


<button class="btn1"><a href="admin_user.php">Back</a></button>
</center>
</div>
</div>


