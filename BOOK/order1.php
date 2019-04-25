<?php
	include('connection.php');

    session_start();

	  $bid=$_SESSION['b_id'];
    $title=$_SESSION['title'];
    $userid=$_SESSION['userid'];
    $contact=$_SESSION['contact'];
    $address=$_SESSION['address'];

  	$sql="insert into book_order(b_id,title,user_id,contact,address) values ($bid,'$title','$userid','$contact',$address')";

  	$res=mysqli_query($conn,$sql);
  	if($res) echo"you have ordered successfully";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<a href="user.php">Go to Home Page</a>

</body>
</html>