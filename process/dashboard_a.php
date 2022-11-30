<?php
  include('../db/connection.php');
  include('../include/header_a.php');

  session_start();
 ?>
<html>
<head>
  <title>Admin Panel</title>
   <link rel="stylesheet" href="../css/dashboard_a.css">      
   <link rel="stylesheet" href="../css/myheader.css">   

</head>
<body>

<div class="am_heading">
  <h2 class="hd">Contact Management Project</h2> 
</div>

<div class="rowbar">
  <div class="container">
    <div class="col-md-9">
      <form style="margin-left: -48px;">
        <div class="form-field">
          <span style="position:absolute; top:212px; left:221px;"><button type="Submit" class = "submit_btn"><a href="userlog_reports.php">Userlog Reports</a></button><br/></span>
          <span style="position:absolute; top:262px; left:221px;"><button type="Submit" class = "submit_btn"><a href="account_profiles.php">View Account Profiles</a></button><br/></span>
          <span style="position:absolute; top:312px; left:221px;"><button type="Submit" class = "submit_btn"><a href="logoutprocess.php">Logout</a></button></span>
        </div>
        </form>
    </div>
  </div>
</div>


</body>
</html>