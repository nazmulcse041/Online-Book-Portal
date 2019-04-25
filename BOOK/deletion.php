<?php

	$size=sizeof($_POST);
	$j=1;
	for($i=1; $i<=$size;$i++,$j++)
	{
		$index="b".$j;
		if(isset($_POST[$index]))
			$b_id[$i]=$_POST[$index]; 
		else
			$i--;
		
	}
include('connection.php');

for ($k=1; $k <= $size ; $k++) 	
{
	$q="delete from book where bookid=".$b_id[$k];
	mysqli_query($conn,$q);
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>deletion</title>
</head>
<body>
	<h1>Book Record </h1>
	<p><?php 
		echo $size." Record deleted";
	?></p>

	Go back to home page
	<a href="admin.php">Click Here</a>
</body>
</html>