<?php
include('../db/connection.php');

session_start();
$user = $_SESSION['name'];
$account_id = $_SESSION['id'];

$id = $_SESSION['id'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$country=$_POST['nationality'];
$photo=$_POST['photo'];

	
	$query="UPDATE `accounts` SET 
	`name`='$name',
	`mobile`='$mobile',
	`email`='$email',
	`address`='$address',
	`gender`='$gender',
	`country`='$country',
	`photo`='$photo' WHERE id=$id";

	
	if($conn->query($query)){

	$message = $user.  ' Updated Account ';
    $sql2 = "INSERT INTO userlog (userid, message ) VALUES ('$account_id','$message') ";
    $conn->query($sql2);

	echo " <script> alert('Update Account Successful');  
    window.location.href='user_account.php?smsg=successfully updated account';
    </script> ";
	}
	else{
		echo $conn->error ;
	}




?>
