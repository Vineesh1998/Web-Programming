<?php
	include 'db/connection.php';
	include 'header.php';
	$sql1="select book_id,book_title from tbl_book where status=1";
	$sql2="select stud_id,name from tbl_student where status=1";
	$book=mysqli_query($conn,$sql1);
	$student=mysqli_query($conn,$sql2);
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/design.js"></script>
<div class="container">
	<div class="span">
 		<div class="span_left">
 			<button class="btn" onclick="newbooks()">
 				Add New +
 			</button>
 			<button class="btn" onclick="ds_user()">
 				Display Borrowers
 			</button>
 		</div>
 	</div>
</div>
<div class="content2">
	<div class="contents">
		<div id="newbook">
		<form method="post" action="borrow_action.php">
		<div class="txt_head">
			New Book Borrow 
		</div>
		<table class="tbl1">
			<tr>
				<td class="td">Select book</td>
				<td><select name="bookid">
				<?php
					while($row=mysqli_fetch_array($book))
					{
				?>
				<option value="<?php echo $row['book_id'] ?> "> <?php echo $row['book_id']." - ".$row['book_title']; ?> </option>
				<?php
					}
				?>
				</select></td>
			</tr>
			<tr>
				<td class="td">Select Student</td>
				<td><select name="studid">
				<?php
					while($row=mysqli_fetch_array($student))
					{
				?>
					<option value="<?php echo $row['stud_id'] ?> "> <?php echo $row['stud_id']." - ".$row['name']; ?> </option>
				<?php
					}
				?>
				</select></td>
			</tr>
			<tr>
				<td class="td">Enter Issue date </td>
				<td><input type="date" name="issue_date"></td>
			</tr>
			<tr> 
				<td class="td">Enter Return date </td>
				<td><input type="date" name="return_date"></td>
			</tr>
			<tr>
				<td colspan="2"><button class="btn1">submit</button></td>
			</tr>
		 </table>
		 <br>
		</form>
		</div>

		<div id="bk_dt">
		<div class="txt_head">
			Borrowers Details 
		</div>
		<?php
			$sql3="select * from tbl_borrow";
			$view=mysqli_query($conn,$sql3);
		?>
		<table class="tbl2">
			<tr>
				<th>Sl.no</th>
				<th>Name</th>
				<th>Book</th>
				<th>Issue date</th>
				<th>Return date</th>
				<th>Action</th>
			</tr>
		<?php
			$i=1;
			while($row=mysqli_fetch_array($view))
			{
				$stu=$row['stud_id'];
				$bk=$row['book_id'];
				$query1="select name from tbl_student where stud_id='$stu'";
				$result=mysqli_query($conn,$query1);
				$res=mysqli_fetch_array($result);
				$query2="select book_title from tbl_book where book_id='$bk'";
				$result2=mysqli_query($conn,$query2);
				$res2=mysqli_fetch_array($result2);
		?>
			<tr>
				<td> <?php echo $i; ?></td>
				<td> <?php echo $res['name']; ?> </td>	
				<td> <?php echo $res2['book_title']; ?> </td>
				<td> <?php echo date("d/m/Y",strtotime($row['issuedate'])); ?> </td>
				<td> <?php echo date("d/m/Y",strtotime($row['duedate'])); ?> </td>
				<td> <a href="book_return.php?id=<?php echo $row['borrow_id']; ?>&book=<?php echo $row['book_id']; ?>"><button onclick="return confirm('Are you sure to continue? \nClicking OK will make the book available')">Mark as Returned</button></a></td>
			</tr>
		<?php
			$i++;
			}
		?>
		</table>
		</div>
	</div>
</div>