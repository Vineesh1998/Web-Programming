<html>
<head>
<title>Add book deatails</title>
<link rel="stylesheet"type="text/css"href="css/addbook.css">
<script type="text/javascript" src="js/design.js"></script>
<body>
<div class="loginbox">
<img src="images/th.jpg"class="th">
<h1 align="center">Enter Book Details</h1>
<form action="addbook_action.php" method="post">
<table>
<tr><td>Enter accession number</td>
<td><input type="text"name="accessionnumber"placeholder="Enter accession number"required autocomplete="off"></td></tr>
<tr><td>Enter book title</td>
<td><input type="text"name="title"placeholder="Enter book title"required></td></tr>
<tr><td>Enter author name</td>
<td><input type="text"name="author"placeholder="Enter author name"required></td></tr>
<tr><td>Enter Publisher Name</td>
<td><input type="text"name="publisher"placeholder="Enter Publisher name"required></td></tr>
<tr><td>Enter Language</td>
<td><input type="text"name="language"placeholder="Enter Language"required></td></tr>
<tr></tr><tr></tr>
<tr><td>Currently Avalilable</td>
<td><input type="radio" name="status"value="yes">yes <input type="radio" name="status"value="no">no</td></tr>
</table>
<center>
	<br><br>
	<a href="admin_addbook.php"><button type="button">Back</button></a>
	<input type="submit"name="submit"value="Add book">
</center>
</form>
</div>
</body>
</head>
</html>
