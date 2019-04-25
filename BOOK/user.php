<?php 
	include "connection.php";
	session_start();
	
		if(isset($_SESSION['userid'])){
			$userId =$_SESSION['userid'];
		}
	
	$sql = "select * from user where userid='$userId'";
	$result = mysqli_query($conn,$sql);
	$row= mysqli_fetch_assoc($result);
	$_SESSION['row'] = $row;
	
?>


<!doctype html>
<html>
<head>
<title>Home</title>
 	<link rel="stylesheet" type="text/css" href="user.css" />
<style>

</style>
</head>

<body class="body">
	<h1 class="header">User Homepage</h1>
	<ul class="ul" >
			<li class="li">
				<a href="user.php" >Home</a>
			</li>

			<li class="li">
				<a href="viewbooks.php">View Books</a>
			</li>
				
			<li class="li">
				<a href="order.php" class="a">Order</a>
			</li>


			<li class="li"><a href="logout.php">Logout</a></li>
	</ul>
	<h1>Welcome <?php echo"  ".($row['name'])." !";?></h1>

</body>
</html>