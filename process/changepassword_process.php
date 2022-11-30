<?php
include('../db/connection.php');

session_start();
$user = $_SESSION['name'];
$account_id = $_SESSION['id'];

$id = $_SESSION['id'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];


	$query = "UPDATE accounts SET password= '$password2' WHERE id= $id ";

	if($conn->query($query)){

	$message = $user.  ' Changed Password ';
    $sql2 = "INSERT INTO userlog (userid, message ) VALUES ('$account_id','$message') ";
    $conn->query($sql2);

	echo " <script> alert('Password Changed Successful');  
    window.location.href='dashboard_c.php?smsg=successfully changed password';
    </script> ";
	}
	else{
		echo $conn->error ;
	}


?>
