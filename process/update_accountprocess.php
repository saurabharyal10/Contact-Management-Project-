<?php
include('../db/connection.php');

session_start();
$aduser = $_SESSION['aname'];
$adaccount_id = $_SESSION['aid'];

// $id=$_GET['id'];
// $id = $_SESSION['id'];
$userid = $_POST['userid'];

$name=$_POST['name'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$country=$_POST['nationality'];
$photo=$_POST['photo'];


	$query="UPDATE `accounts` SET 
	`name`='$name',
	`password`='$password',
	`mobile`='$mobile',
	`email`='$email',
	`address`='$address',
	`gender`='$gender',
	`country`='$country',
	`photo`='$photo' WHERE id=$userid";

if($conn->query($query)){

	$message = $user.  ' Account Updated ';
    $sql2 = "INSERT INTO userlog (userid, message ) VALUES ('$account_id','$message') ";
    $conn->query($sql2);

	echo " <script> alert('Account Updated Successful');  
    window.location.href='account_profiles.php?smsg=successfully updated account';
    </script> ";
	}
	else{
		echo $conn->error ;
	}




?>
