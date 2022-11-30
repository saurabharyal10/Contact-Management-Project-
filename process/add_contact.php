<?php
    include("../include/header_c.php");
    session_start();
?>

<html>
  <head>
    <title>Account Login</title>
    <link rel="stylesheet" href="../css/add_Contact.css">
    <link rel="stylesheet" href="../css/myheader.css">
  </head>
  <body>

  <div class="am_heading">
    <h2 class="hd">Add Contact</h2> 
  </div>
  
    <form name="myForm" method='POST' action='add_contact_process.php' ><br><br><br>
    <div class="form-field">
        <label class="li"> Name</label>
        <span style="margin-right:7px; "></span>
        <input type="text" name="name" class="form-control" size="32"><br><br>
      </div>
      <div class="form-field">
        <label class="li">Mobile</label>
        <input type="text" name="mobile" class="form-control"><br><br>
      </div>
      <div class="form-field">
        <label class="li">Email</label>
        <span style="margin-right:7px; "></span>
        <input type="mail" name="email" class="form-control"><br><br>
      </div>
      <div class="form-field">
        <label class="li">Address</label>
        <input type="text" name="address" class="form-control"><br><br>
      </div>
      <div class="form-field">
        <label class="li" style="margin-left: 30px;">Gender</label>
        <input type="radio" name="gender" value="Male" class="radio-control" style="margin-left: 32px;">Male
        <input type="radio" name="gender" value="Female" class="radio-control">Female<br><br>
        </div>
    <div class="form-field">
      <label class="li" >Country</label>
      <input type="text" name="country" class="form-control"><br><br>
    </div>
    <!-- <div class="form-field"> -->
    <span style="margin-right:450px; margin-top:10px;"></span>
      <label class="li">Photo</label>
      <span style="margin-right:12px; "></span>
      <input type="file" name="photo" id="photo" accept=".png,.jpg,.JPG" class="form-control"><br><br>
    <!-- </div> -->
    <!-- <div class="form-field"> -->
    <span style="margin-right:440px; margin-top:10px;"></span>
      <label class="li">Document</label>
      <span style="margin-right:-6px; "></span>
      <input type="file" name="document" id="document" accept=".pdf,.doc,.docx" class="form-control"><br><br>
    <!-- </div> -->
    <div class="form-field">
    <input type="submit" name = "submit_btn" class="submit_btn" value="Create Contact">
    <input type="reset" name = "reset_btn" class="reset_btn">
    </div>

  </form> 

</body>
<script  type="text/javascript">

  function validateForm() {
  let name = document.forms["myForm"]["name"].value;
  let mobile = document.forms["myForm"]["mobile"].value;
  let email = document.forms["myForm"]["email"].value;
  let address = document.forms["myForm"]["address"].value;
  let gender = document.forms["myForm"]["gender"].value;
  let country = document.forms["myForm"]["country"].value;

  var imageInput = document.getElementById('photo');
  var imagePath = imageInput.value;
  var allowedImageExtensions = /(\.png|\.jpeg|\.jpg)$/i;

  var fileInput = document.getElementById('document');
  var filePath = fileInput.value;
  var allowedFileExtensions = /(\.pdf|\.doc|\.docx)$/i;

  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  else if (mobile == "" ) {
    alert("Mobile Number must be provided");
    return false;
  }
  else if (email == "" ) {
    alert("Email must be filled out in proper structured form");
    return false;
  }
  else if (address == "") {
    alert("Address must be filled out");
    return false;
  }
  else if (gender == "") {
    alert("Gender must be selected");
    return false;
  }
  else if (country == "") {
    alert("Country must be selected");
    return false;
  }
  else if (!allowedImageExtensions.exec(imagePath)) {
    alert('Invalid Image type');
    imageInput.value = '';
    return false;
  }
  else if (!allowedFileExtensions.exec(filePath)) {
    alert('Invalid File type');
    fileInput.value = '';
    return false;
  }
}

</script>
</html>