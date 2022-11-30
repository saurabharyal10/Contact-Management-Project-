<?php
    include("../include/header_c.php");
    session_start();
?>

<html>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>  
	<link rel="stylesheet" href="../css/myheader.css">
    <link rel="stylesheet" href="../css/changepassword.css">
    
 </head>
 <body>
 <?php

$alertmsg = isset($_GET['alertmsg'])?$_GET['alertmsg']:'';

if($alertmsg == 1){
echo "<script>alert('Sorry, the credentials do not match.')</script>";

}

?>
<div class="am_heading">
  <h2 class="hd" style="margin-left:120px; margin-top: 72px; color:black;">Change The Password</h2> 
</div>

<div class="rowbar">
  <div class="container"  style="margin-top: 12px; margin-left:280px;">

  <form method='POST' action="changepassword_process.php"><br><br><br>
      <div class="form-field">
          <label class="li">Current Password</label>
          <input type="password" id="password1" name="password1" class="form-control" size="32"><br><br>
        </div>
        <div class="form-field">
          <label class="li">New Password</label>
          <input type="password" id="password2" name="password2" class="form-control" style="margin-left: 18px;" size="32"><br><br><br>
        </div>
      
        <button type="Submit" class = "submit_btn" name="Submit" >Update</button>
        <button type="Reset" class = "reset_btn" name="Reset" >Reset</button>
        </form>
    </div>
</div>

</body>
</html>