<?php
	include 'db/connection.php';
	include 'header.php';
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/design.js"></script>
<div class="container">
<div class="span">
<div class="span_left">
<a href="addbook.php"><button type="button" class="btn">add book</button></a>
<button onclick="all_book()" class="btn">All books</button>
<button onclick="available()" class="btn">Books Available</button>
<button onclick="not_available()" class="btn">Books Not Available</button>
</div>
</div>
</div>
<?php
$sql1="select * from tbl_book";
$sql2="select * from tbl_book where status = 1";
$sql3="select * from tbl_book where status = 0";
$result_all=mysqli_query($conn,$sql1);
$result_availble=mysqli_query($conn,$sql2);
$result_not=mysqli_query($conn,$sql3);
?>

<div class="content">
<div class="contents">
<div id="all">
	<div class="txt_head">
		All Books
	</div>
	<table>
		<tr>
		<th>Sl.no</th>
		<th>Title</th>
		<th>Author</th>
		<th>Language</th>
		</tr>
		<?php 
			$i=1;
			while($row=mysqli_fetch_array($result_all))
			 {
			 	?>
			 	<tr> 
			 		<td><?php echo $i ?></td>
			 		<td><?php echo $row['book_title']; ?></td>
			 		<td><?php echo $row['author']; ?></td>
			 		<td><?php echo $row['language']; ?></td>
			 	</tr>
			 	<?php
			 	$i++;
			 } 
		?>
	</table>
</div>
<div id="available">
	<div class="txt_head">
		Books Currently Available
	</div>
	<table>
		<tr>
		<th>Sl.no</th>
		<th>Title</th>
		<th>Author</th>
		<th>Language</th>
		</tr>
		<?php 
			$i=1;
			while($row=mysqli_fetch_array($result_availble))
			 {
			 	?>
			 	<tr> 
			 		<td><?php echo $i ?></td>
			 		<td><?php echo $row['book_title']; ?></td>
			 		<td><?php echo $row['author']; ?></td>
			 		<td><?php echo $row['language']; ?></td>
			 	</tr>
			 	<?php
			 	$i++;
			 } 
		?>
	</table>
</div>
<div id="not_available">
	<div class="txt_head">
		Books Not Available
	</div>
	<table>
		<tr>
		<th>Sl.no</th>
		<th>Title</th>
		<th>Author</th>
		<th>Language</th>
		</tr>
		<?php 
			$i=1;
			while($row=mysqli_fetch_array($result_not))
			 {
			 	?>
			 	<tr> 
			 		<td><?php echo $i ?></td>
			 		<td><?php echo $row['book_title']; ?></td>
			 		<td><?php echo $row['author']; ?></td>
			 		<td><?php echo $row['language']; ?></td>
			 	</tr>
			 	<?php
			 	$i++;
			 } 
		?>
	</table>
</div>
</div>
</div>