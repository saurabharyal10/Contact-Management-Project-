<?php
  include('../db/connection.php');
  include('../include/header_a.php');

  	session_start();
	$aduser = $_SESSION['aname'];
	$adaccount_id = $_SESSION['aid'];
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/myheader.css"> 
	<style type="text/css">
		.profile{
			min-height: 621px;
			width: 99.85% ;
			display: block;
			background-color: rgba(5,5,5,0.4);
			border:1px solid black;
		}
		.profile>h2{
			color:black;
			margin-left: 20px;
			
		}
		.profile>h3{
			margin:18px;
		}
		.profile>p{
			margin-left: 72px;
			margin-top: 42px;
			font-weight: bold;
		}
	</style>
</head>
<body?>

<?php
	$id=$_GET['id'];
	$query="SELECT * from accounts where accounts.id='$id' ";

	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	$arr=mysqli_fetch_array($result,MYSQLI_ASSOC);

?>
<div class="profile">
<p style=""><a href="account_profiles.php" style="text-decoration: none; color:black; font-size:21px: ">Back</a></p>
<h2 align="center" style="text-transform:capitalize;"><?php echo $arr['name']; ?></h2>
<h2 align="center"><img src="../img/<?php echo $arr['photo']; ?>" height="250px" width="250px" value="photo" class="img" ></h2>
<h3 align="center">Mobile : <?php echo $arr['mobile'];?> </h3>
<h3 align="center">Email : <?php echo $arr['email'];?> </h3>
<h3 align="center">Address : <?php echo $arr['address'];?> </h3>
<h3 align="center">Gender : <?php echo $arr['gender'];?> </h3>
<h3 align="center">Country : <?php echo $arr['country'];?> </h3>

</div>
</body>
</html>