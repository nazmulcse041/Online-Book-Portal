<?php
	include('connection.php');

	$q="SELECT * FROM book";
	$result=mysqli_query($conn,$q);
	$num=mysqli_num_rows($result);
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>View book record</title>
	<link rel="stylesheet" type="text/css" href="viewStyle.css">
</head>
<body>
	<h1>View Book Record </h1>
	<table id="view_table">
		<tr>
			<th>Book ID</th>
			<th>Title</th>
			<th>Price</th>
			<th>Author</th>
		</tr>
		<?php
			for($i=1;$i<=$num;$i++)
			{
				$row=mysqli_fetch_array($result);
			
		?>
		<tr>
			<td><?php echo $row['bookid'] ;?></td>
			<td><?php echo $row['title'] ;?></td>
			<td><?php echo $row['price'] ;?></td>
			<td><?php echo $row['author'] ;?></td>
		</tr>
		<?php
		}

		?>
	</table>
</body>
</html>