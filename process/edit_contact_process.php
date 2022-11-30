<?php
include('../db/connection.php');

session_start();
$user = $_SESSION['name'];
$account_id = $_SESSION['id'];

$userid = $_POST['userid'];

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$photo=$_POST['photo'];
$document=$_POST['document'];

	
	$query="UPDATE `contacts` SET 
	`name`='$name',
	`mobile`='$mobile',	
	`email`='$email',
	`address`='$address',
	`gender`='$gender',
	`country`='$country',
	`photo`='$photo',
	`document`='$document' WHERE id=$userid";

	
	if($conn->query($query)){

	$message = $user.  ' Edited Account ';
    $sql2 = "INSERT INTO userlog (userid, message ) VALUES ('$account_id','$message') ";
    $conn->query($sql2);

	echo " <script> alert('Edited Account Successful');  
    window.location.href='user_contacts.php?smsg=successfully edited account';
    </script> ";
	}
	else{
		echo $conn->error ;
	}




?>
