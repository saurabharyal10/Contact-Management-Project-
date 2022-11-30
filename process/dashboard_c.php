<?php
  include('../db/connection.php');
  include('../include/header_c.php');

session_start(); 

?>

<html>
<head>
  <title>Customer Panel</title>
   <link rel="stylesheet" href="../css/dashboard_c.css">      
   <link rel="stylesheet" href="../css/myheader.css">
</head>
<body>
 

<div class="am_heading">
  <h2 class="hd">Welcome to the System</h2> 
</div>

<div class="rowbar">
  <div class="container">
    <div class="col-md-9">
      <form style="margin-left: -48px;">
        <div class="form-field">
        <span style="position:absolute; top:262px; left:221px;"><button type="Submit" class = "submit_btn"><a href="user_contacts.php">Contacts</a></button></span>
        <!-- <span style="position:absolute; top:312px; left:221px;"><button type="Submit" class = "submit_btn"><a href="userlogs_history.php">Logs History</a></button><br/></span> -->
        <span style="position:absolute; top:312px; left:221px;"><button type="Submit" class = "submit_btn"><a href="change_password.php">Change Password</a></button><br/></span>
        <span style="position:absolute; top:362px; left:221px;"><button type="Submit" class = "submit_btn"><a href="user_account.php">Profile</a></button><br/></span>
        <span style="position:absolute; top:412px; left:221px;"><button type="Submit" class = "submit_btn"><a href="logoutprocess.php">Logout</a></button></span>
        </div>
        </form>
    </div>

  </div>
</div>


</body>
</html>