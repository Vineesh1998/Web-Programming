<?php
	include 'header.php';
	include 'db/connection.php';
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/design.js"></script>



<?php
	$sql="select * from tbl_student where status = 0";
	$result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);

	if(!$num){
		$view="";
	}
	else{
		$view="( ".$num." )";
	}
?>
<div class="container">
<div class="span">
<div class="span_left">
<button onclick="reg()" class="btn">Registration Requests  <?php echo $view ?> </button>
</div>
</div>
</div>

<div class="content">
<div class="contents">
<?php
	if ($num<1)
	{
		?>

			<div id="reg1">
				<h2>No new requests</h2>
				<br><br>
			</div>
		<?php
	}
	else{
?>

<div id="reg1">
	<div class="txt_head">
		New Registration Request
	</div>
<form action="action.php" method="post">
	<table>
		<tr>
			<th>Name</th>
			<th>Admission Number</th>
			<th>Department</th>
			<th>View</th>
			<th colspan="2">Action</th>
		</tr>
		<?php
			while($row=mysqli_fetch_array($result)) 
			{
		?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['admission_no']; ?></td>
			<td><?php echo $row['department']; ?></td>
			<td><a href="view_profile.php?id=<?php echo $row['stud_id']; ?>">View Profile</a></td>
			<td><button name="approve" value="<?php echo $row['stud_id']; ?>">Approve</button></td>
			<td><button name="reject" value="<?php echo $row['stud_id']; ?>" onclick="return confirm('Rejecting will cancel the request \n Are you sure to reject this profile?')" >Reject</button></td>
		</tr>
		<?php
			}
		?>
	</table>
	</form>
</div>
<?php
	}
?>

<?php
	$sql1="select stud_id,name,admission_no from tbl_student where status=1";
	$result1=mysqli_query($conn,$sql1);
?>
<div id="main_content">
			<div class="txt_head">
				All Registered Students
			</div>
	<table>
		<tr>
			<th>Sl.no</th>
			<th>Name</th>
			<th>Admission Number</th>
			<th>Action</th>
		</tr>
		<?php
			$i=1;
			while($row=mysqli_fetch_array($result1))
			{
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['admission_no']; ?> </td>
				<td colspan="2"><a href="view_profile.php?id=<?php echo $row['stud_id']; ?>">View</a>|<a href="delete_profile.php?id=<?php echo $row['stud_id']; ?>" onclick="return confirm('Do you really want to delete')">Delete</a></td>
			</tr>
			<?php
			$i++;
			}	
		?>
	</table>
</div></div>
</div>