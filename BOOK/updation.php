<?php
include('connection.php');
	$size=sizeof($_POST);
	$records=$size/4;

for ($i=1; $i<=$records ; $i++) 
{ 
	$index1="bookid".$i;
	$bookid[$i]=$_POST[$index1];

	$index2="title".$i;
	$title[$i]=$_POST[$index2];
	
	$index3="price".$i;
	$price[$i]=$_POST[$index3];
	
	$index4="author".$i;
	$author[$i]=$_POST[$index4];
	
}

for ($i=1; $i<=$records ; $i++) 
{ 

	$q="UPDATE book SET title='$title[$i]', price=$price[$i] , author='$author[$i]' where bookid=$bookid[$i] ";
	mysqli_query($conn,$q);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>updation</title>
</head>
<body>
	<h1>Book Record </h1>
	<p><?php 
		echo $size." Records updated";
	?></p>

	Go back to home page
	<a href="admin.php">Click Here</a>
</body>
</html>