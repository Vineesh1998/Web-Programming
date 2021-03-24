<?php
	include 'db/connection.php';
	$br_id=$_REQUEST['id'];
	$book_id=$_REQUEST['book'];
	$sql="delete from tbl_borrow where borrow_id='$br_id'";
	if(mysqli_query($conn,$sql)){
		$query="update tbl_book SET status = '1' WHERE book_id = '$book_id'";
		if(mysqli_query($conn,$query)){
		?>
		<script type="text/javascript">
			alert("Book succesfully returned");
			window.location.href="admin_borrow.php";
		</script>
		<?php
		}
	}
?>