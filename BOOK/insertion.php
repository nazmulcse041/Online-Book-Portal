<?php

	$title=$_POST['title'];
	$price=$_POST['price'];
	$author=$_POST['author'];

	include('connection.php');


	$q="INSERT INTO book (title,price,author) VALUES ('$title',$price, '$author')";
	$status=mysqli_query($conn,$q);
	mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Insertion</title>
</head>
<body>


	<h1>Book Record </h1>
	<p><?php if ($status==1)
		echo "Record inserted";
		else 
			echo "Insertion Failed";
	?></p>

	Do you want to insert more record?
	<a href="view.php">Click Here</a>

</html>