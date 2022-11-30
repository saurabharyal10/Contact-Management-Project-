<?php
session_start();
$aduser = $_SESSION['aname'];
$adaccount_id = $_SESSION['aid'];

$id=$_GET['id'];

$conn=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($conn,"cmp");

	$query="select * from accounts where id=$id";

	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	$arr=mysqli_fetch_array($result,MYSQLI_ASSOC);

	?>


<html>
<head>
    <title>Contact Management Project</title>
    <link rel="stylesheet" href="../css/signup.css">
  </head>
  <body>
    <p class="th">Update Account </p>
    
  <form method='POST' action="update_accountprocess.php"><br><br><br>
    <input type="hidden" name="userid" value="<?php echo $arr['id']; ?>">
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white" > Name</label>
        <span style="margin-right:62px;"></span>
        <input type="text" name="name" size="32" style="margin-right:20px;" value="<?php echo $arr['name']; ?>"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white">Password</label>
        <span style="margin-right:39px;"></span>
        <input type="text" name="password" style="margin-right:-20px;" value="<?php echo $arr['password']; ?>"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white">Mobile</label>
        <span style="margin-right:55px;"></span>
        <input type="text" name="mobile" value="<?php echo $arr['mobile']; ?>"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white">Email</label>
        <span style="margin-right:64px;"></span>
        <input type="mail" name="email" value="<?php echo $arr['email']; ?>"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white">Address</label>
        <span style="margin-right:52px;"></span>
        <input type="text" name="address" style=" margin-right:-21px;" value="<?php echo $arr['address']; ?>"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li"  style=" color:white">Gender</label>
        <!-- <span ></span> -->
        <input type="radio" name="gender" <?php if($arr['gender']=="Male") {echo "checked";}?> value= "Male" style="margin-left:55px; "><span class = "gender" style="margin-left: -112px; color:white;" >Male</span>
        <input type="radio" name="gender" <?php if($arr['gender']=="Female") {echo "checked";}?> value="Female" style="margin-left: -50px; "><span class = "gender" style="margin-left: -112px; color:white;">Female</span><br><br>
        <!-- </div> -->
    <!-- <div class="form-field"> -->
    <span style="margin-right:420px;"></span>
      <label class="li" style="margin-right:120px; color:white">Country</label>
      <span style="margin-right:45px;"></span>
      <select name="nationality" style="margin-left:9px; width: 264px;" >
        <option value="Nepal" <?php if($arr['country']=='Nepal'){echo 'selected';}?>>Nepal</option>
        <option value="India" <?php if($arr['country']=='India'){echo 'selected';}?>>India</option>
        <option value="China" <?php if($arr['country']=='China'){echo 'selected';}?>>China</option>
        </select><br><br>
    <!-- </div> -->
    <!-- <div class="form-field"> -->
    <span style="margin-right:420px;"></span>
      <label class="li" style="margin-right:120px; color:white">Photo</label>
      <span style="margin-right:70px; "></span>
      <input type="file" name="photo" id="photo" style="color:white;" onchange="return fileValidation()" value=""> <?php echo $arr['photo']; ?><br><br>
      <input type="hidden" name="photo" id="photo" style="color:white;" onchange="return fileValidation()" value="<?php echo $arr['photo']; ?>"> 
    <!-- </div> -->
    <!-- <div class="form-field"> -->
    <span style="margin-right:420px;"></span>
      <label class="li" style="margin-right:120px; color:white">I agree to the Terms of Service</label>
      <span style="margin-right: -210px; "></span>
      <?php
        $terms = array('Yes');
        if (! empty($terms)) {
          foreach ($terms as $terms_conditions) {
            $checked = (in_array($terms_conditions, $terms)) ? 'checked="checked"' : '';
      ?>
      <input type="checkbox" name="terms_conditions" style="color:white;" value="<?php echo $terms_conditions; ?>" <?php echo $checked;?> ><br><br>
      <?php
        }
          }
      ?>
    <span style="margin-right:520px;"></span>
    <input type="submit" style="margin-right:18px; margin-top:18px; color:white; background-color:green; height:38px; width: 160px; border-radius: 7px 7px;">
    <input type="reset" style=" color:white; background-color:black; height:38px; width: 160px; border-radius: 7px 7px;">

    </form>
      
</body>
</html>
