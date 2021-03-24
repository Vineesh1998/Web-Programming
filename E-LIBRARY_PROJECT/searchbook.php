
<html>
<head>
<title>serach book</title>
<link rel="stylesheet"type="text/css"href="css/searchbook.css">
<body>
<center>
<div class="loginbox">
<form action="searchbook.php" method="post">
<input type="text"style="width:70%;"name="title"placeholder="Enter book title"required>
<input type="submit"name="search"value="search book">
</form>
<?php
$conn=mysqli_connect("localhost","root","","library")or die("Connection error");
if(isset($_POST['search']))
{
		$title=$_POST['title'];
		$sql="select * from tbl_book where book_title='$title'";
		$result=mysqli_query($conn,$sql)or die("couldn't connect");
		if(mysqli_num_rows($result))
		{
			echo '<center><h1><u>BOOK DETAILS</u></h1><table style="width:60%;"class="table" border="1" style="bordr-collapse:collapse"><tr><th>ACC-NO</th><th>BOOK-NAME</th><th>AUTHOR</th><th>PUBLISHER</th>';
			while($row=mysqli_fetch_assoc($result))
			{
				echo '<tr><td>'.$row["book_id"].'</td><td>'.$row["book_title"].'</td><td>'.$row["author"].'</td><td>'.$row["publisher"].'</td></tr>';
			}	
			echo '</center></table>';
		}
		else
		{
			echo '<script>alert("book not found");</script>';
		}
		mysqli_close($conn);
}
?>
