<?php
   include('../db/connection.php');

 if(isset($_POST)){
  $n = $_POST['name'];
  $p = $_POST['password'];
  $usertype=$_POST['usertype'];

  session_start(); 

   $sql = "SELECT * FROM accounts WHERE name = '$n' and password = '$p'  AND usertype='$usertype' ";
   $result = $conn->query($sql);
   $row = $result -> fetch_array(MYSQLI_ASSOC);

      // $_SESSION['id'] = $row['id'];
      // $_SESSION['name']=$row['name'];

      if($row){
        if($usertype == "Admin"){
          $_SESSION['aid'] = $row['id'];
          $_SESSION['aname']=$row['name'];
          $_SESSION['id'] = $row['id'];
          header('Location: dashboard_a.php');
         } 
         else{
          $_SESSION['id'] = $row['id'];
          $_SESSION['name']=$row['name'];

          $logid=$_SESSION['id'];
          $message = $n. ' Logged In ';
          $sql2 = "INSERT INTO userlog (userid, message ) VALUES ('$logid','$message') ";
          
          $conn->query($sql2);
          header('Location:dashboard_c.php');
         }
      }else{
        header('Location:../login.php?alertmsg=1');
        // echo 'your are not authorized user';
        exit;
      }
    }

?>