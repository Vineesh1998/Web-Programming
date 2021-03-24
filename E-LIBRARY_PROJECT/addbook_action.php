<?php
 include 'db/connection.php';
  $id=$_POST['accessionnumber'];
  $title=$_POST['title'];
  $author=$_POST['author'];
  $pub=$_POST['publisher'];
  $lang=$_POST['language'];
  $status_word=$_POST['status'];
  if ($status_word=='yes'){
  	$status=1;
  }
  else{
  	$status=0;
  }
  $sql="insert into tbl_book(book_id,book_title,author,publisher,language,status) values('$id','$title','$author','$pub','$lang','$status')";
  if(mysqli_query($conn,$sql)){
  	?><script type="text/javascript">
  		alert("Data entered successfully");
      window.location.href="admin_addbook.php";
  	</script>
  	<?php
  }
  else{
  	?>
    <script type="text/javascript">
      alert("Book with Same Access Number \n Please enter different access number");
      window.location.href="admin_addbook.php";
    </script>
    <?php
  }
?>
