<?php 
	include 'user_header.php';
	include 'db/connection.php';
	$id=$_SESSION['id'];
	$sql="select * from tbl_borrow where stud_id='$id'";
	$result=mysqli_query($conn,$sql);
?>

<div class="container">
	<div class="content3">
		<center>
			<div class="pad">
			<div class="txt_head">
				Due Dates
			</div>
		</div>
<table class="tbl">
	<tr>
		<th>Sl.no</th>
		<th>Book Name</th>
		<th>Issue Date</th>
		<th>Return Date</th>
	</tr>
	<?php
		while($row=mysqli_fetch_array($result)){
			$stu=$row['stud_id'];
			$bk=$row['book_id'];
			$query1="select name from tbl_student where stud_id='$stu'";
			$result=mysqli_query($conn,$query1);
			$res=mysqli_fetch_array($result);
			$query2="select book_title from tbl_book where book_id='$bk'";
			$result2=mysqli_query($conn,$query2);
			$res2=mysqli_fetch_array($result2);
			$i=1;
	?>
	<tr>
		<td> <?php echo $i; ?> </td>
		<td> <?php echo $res2['book_title']; ?> </td>
		<td> <?php echo date("d/m/Y",strtotime($row['issuedate'])); ?> </td>
		<td> <?php echo date("d/m/Y",strtotime($row['duedate'])); ?> </td>
	</tr>
	<?php
			$i++;
			}
	?>
</table>