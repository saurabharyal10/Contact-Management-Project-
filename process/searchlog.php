<?php
    include("../include/header_a.php");
	session_start();
	$aduser = $_SESSION['aname'];
	$adaccount_id = $_SESSION['aid'];
?>

<html>
<head>
    <title>Userlog Reports</title>
	<link rel="stylesheet" href="../css/myheader.css">
</head>

<h2 style="margin-left:42px; margin-top:27px; margin-bottom:21px;">Userlog Informations</h2>

<form method="POST" action="searchlog.php">
	<input type="text" name="searchname" class="searchinput" >
	<button class="searchbtn" type="submit">Search</button>
</form>
	
<table border="1" width="68%" style="margin-left:15%; text-align:center" cellspacing=0;>
	<tr>
		<th>S.No.</th>
		<!-- <th>User ID</th> -->
		<th>User Activities</th>
		<!-- <th colspan="1">Action</th> -->
<?php
// if(!isset($_SESSION['admin'])){
// 	header('location:booking_reports.php');
// }

$conn=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($conn,"cmp");

	// $account_id = $_SESSION['aid'];
		// $id=$_GET['id'];
	$searchname = $_POST['searchname']; 

	// $query="select * from userlog WHERE userid ='$searchid' ";
	$query= "SELECT userlog.id, userlog.userid, userlog.message from userlog
			INNER JOIN accounts
			WHERE accounts.id=userlog.userid AND accounts.name ='$searchname' ";

	$result= mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	echo "<tr>";
	$id=$arr['id'];

	echo "<td>".$arr['id']."</td>";	
	// echo "<td>".$arr['userid']."</td>";
	echo "<td>".$arr['message']."</td>";
	// echo "<td><a href='delete_userlog.php?id= $id' style='color:black;' onclick='return confirm(\"Are you sure to delete your booking?\");'> Delete </a></td>";
	// echo "<td><a href='viewbookinghistory.php?id=$id' style='color:black;'> View </a></td>";
	echo "</tr>";
}


?>
</table>
<br>
</html>