<?php
	include('connection.php');
	session_start();

	if($_POST)
	{
		$id=$_POST['id'];
		$q="delete FROM book_order where b_id=$id ";
		$result=mysqli_query($conn,$q);

		if($result) header("location:success_accept.php");
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="" method="post">
	
Order NO:
<input type="text" name ="id"><br>
<input type="submit" value="accept">


</form>

</body>
</html>