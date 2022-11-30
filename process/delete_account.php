<?php
	session_start();
	$aduser = $_SESSION['aname'];
	$adaccount_id = $_SESSION['aid'];

	$id=$_GET['id'];

	$conn=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($conn,"cmp");

	$query="delete from accounts where id='$id' ";

	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
	header('location:account_profiles.php');// redirecting to table page.

?>