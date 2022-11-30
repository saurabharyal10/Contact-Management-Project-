<?php
    include('../include/header_c.php');
	
	session_start();
	$user = $_SESSION['name'];
    $account_id = $_SESSION['id'];
	
?>

<html>
<head>
    <title>User Contacts</title>
	<link rel="stylesheet" href="../css/myheader.css">
</head>

<h2 style="margin-left:42px; margin-top:27px; margin-bottom:21px;">User Contacts</h2>

<form method="POST" action="search.php">
	<input type="text" name="searchname" class="searchinput">
	<button class="searchbtn" type="submit">Search</button>
	
</form>

<a href="add_contact.php"><button id="btn">Add Contact</button></a>

<table border="1" width="90%" style="margin-left:5%; text-align:center" cellspacing=0;>
	<tr>
		<!-- <th>S.No</th> -->
		<th>Name</th>
		<th>Mobile</th>
		<th>Email</th>
        <th>Address</th>
        <th>Country</th>
        <th>Photo</th>
        <th>Document</th>
		<th colspan="3">Action</th>
<?php

$conn=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($conn,"cmp");

	// $id=$_GET['id'];
    $searchname = $_POST['searchname']; 

	$query="select * from contacts WHERE name ='$searchname' AND account_id ='$account_id' ";
	// $query="select * from contacts WHERE name ='$user'    ";

	$result= mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	echo "<tr>";
	$id=$arr['id'];

	// echo "<td>".$arr['id']."</td>";	
	echo "<td>".$arr['name']."</td>";
	echo "<td>".$arr['mobile']."</td>";
	echo "<td>".$arr['email']."</td>";
    echo "<td>".$arr['address']."</td>";
    echo "<td>".$arr['country']."</td>";
    echo "<td>".$arr['photo']."</td>";
    echo "<td>".$arr['document']."</td>";
	echo "<td ><a href='edit_contact.php?id=$id' style='color:black;'> Edit </a></td>";
	echo "<td><a href='delete_contact.php?id= $id' style='color:black;' onclick='return confirm(\"Are you sure to delete this contact?\");'> Delete </a></td>";
	echo "<td><a href='viewContact.php?id=$id' style='color:black;'> View </a></td>";
	echo "</tr>";
}


	

?>
</table>
<br>
</html>