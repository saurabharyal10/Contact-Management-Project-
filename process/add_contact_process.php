<?php

session_start();
$user = $_SESSION['name'];

 if(isset($_POST)){
  
  $account_id = $_SESSION['id']; 

   $name = $_POST['name'];
   $mobile =  $_POST['mobile'];
   $email =  $_POST['email'];
   $address =  $_POST['address']; 
   $gender =  $_POST['gender']; 
   $country =  $_POST['country'];
   $photo =$_POST['photo']; 
   $document =$_POST['document'];  
   $usertype = "User";
  
   include('../db/connection.php');

  $sql ="INSERT INTO contacts(name,mobile,email,address,gender,country,photo,document,usertype,account_id) VALUES
         ('$name','$mobile','$email','$address','$gender','$country','$photo','$document','$usertype','$account_id')";
   
  
  if($conn->query($sql)){
   
    $message = $user. '  Added Contact '.$name;
    $sql2 = "INSERT INTO userlog (userid, message ) VALUES ('$account_id','$message') ";
    $conn->query($sql2);
 
    echo " <script> alert('Contact Added Successfully');  
    window.location.href='../process/user_contacts.php?smsg=successfully added contact';
    </script> ";

  }else{
    echo $conn->error;
  }
 }

?>
