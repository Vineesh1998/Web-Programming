<?php
	include 'db/connction.php';
	session_destroy();
	header("location:index.php");
?>