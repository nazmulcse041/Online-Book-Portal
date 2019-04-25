<?php
	include('connection.php');

	$q="SELECT * FROM book";
	$result=mysqli_query($conn,$q);
	$num=mysqli_num_rows($result);
	mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete book record</title>
	<link rel="stylesheet" type="text/css" href="viewStyle.css">
</head>
<body>
	<h1>Delete Book Record </h1>
	<form action="deletion.php" method="post">
	<table id="view_table">
		<tr>
			<th>Book ID</th>
			<th>Title</th>
			<th>Price</th>
			<th>Author</th>
			<th>Select to delete</th>
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
			<td><input type="checkbox" value="<?php echo $row ['bookid']; ?>" name="b<?php echo $i; ?>"></td>
		</tr>
		<?php
		}

		?>
		<tr>
			<td colspan="5"><input type="submit" value="Delete"></td>
		</tr>
	</table>
	</form>
</body>
</html>