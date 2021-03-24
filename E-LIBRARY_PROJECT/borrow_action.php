<?php
	include 'db/connection.php';
	$stud_id=$_POST['studid'];
	$book_id=$_POST['bookid'];
	$issue_date=$_POST['issue_date'];
	$return_date=$_POST['return_date'];

	$sql="insert into tbl_borrow(book_id,stud_id,issuedate,duedate) values('$book_id','$stud_id','$issue_date','$return_date') ";
	if(mysqli_query($conn,$sql)){
		$sql1="update tbl_book SET status = '0' WHERE book_id = '$book_id'";
		if(mysqli_query($conn,$sql1)){
			?>
			<script>
				alert("Book Borrowed from library");
				window.location.href="admin_borrow.php"
			</script>
			<?php	
		}
	}
?>