<?php
	session_start();
	$user = $_SESSION['name'];
	$account_id = $_SESSION['id'];

	$id=$_GET['id'];

	$conn=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($conn,"cmp");

	$query="delete from contacts where id='$id' ";

	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
	header('location:user_contacts.php');// redirecting to table page.

?>