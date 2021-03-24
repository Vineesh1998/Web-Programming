<?php
	include 'db/connection.php';
	session_start();
	if(isset($_REQUEST['approve'])){
		$id=$_POST['approve'];
		$sql="update tbl_student set status=1 where stud_id = '$id'";
		if(mysqli_query($conn,$sql))
		{
			$sql1="select username,password from tbl_student where stud_id = '$id'";
			$result=mysqli_query($conn,$sql1);
			$row=mysqli_fetch_array($result);
			$username=$row['username'];
			$password=$row['password'];
			$type="user";
			$insrt="insert into tbl_login(username,password,type) values('$username','$password','$type')";
			if(mysqli_query($conn,$insrt)){
			?>
			<script type="text/javascript">
				alert("User Successfully approved");
				window.location.href="admin_user.php";
			</script>
			<?php
			}
		}
	}
	elseif (isset($_REQUEST['reject'])){
		$id=$_POST['reject'];
		$sql="delete from tbl_student where stud_id = '$id'";
		if(mysqli_query($conn,$sql)){
			?>
			<script type="text/javascript">
				alert("User Rejected");
				window.location.href="admin_user.php";
			</script>
			<?php
		}
	}
?>