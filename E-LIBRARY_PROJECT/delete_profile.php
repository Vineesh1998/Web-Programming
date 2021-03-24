<?php
	include 'db/connection.php';
	$id=$_REQUEST['id'];
	echo $id;
	$sql="delete from tbl_student where stud_id='$id'";
	if(mysqli_query($conn,$sql))
	{
		?>
		<script type="text/javascript">
			alert("Student Profile deleted successfully");
			window.location.href="admin_user.php";
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alert("Deletion Failed\nStudent didn't Return the book ");
			window.location.href="admin_user.php";
		</script>
		<?php
	}
?>