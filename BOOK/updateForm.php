<?php
	include('connection.php');

	$q="SELECT * FROM book";
	$result=mysqli_query($conn,$q);
	$num=mysqli_num_rows($result);
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>update book record</title>
	<link rel="stylesheet" type="text/css" href="viewStyle.css">
</head>
<body>
	<h1>Update Book Record </h1>
	<table id="view_table">
	<form action="updation.php" method="post">
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
			<td><?php echo $row['bookid'] ;?><input type="hidden" name="bookid<?php echo $i;?>" value="<?php echo $row['bookid'] ;?>"></td>
			<td><input type="text" name="title<?php echo $i ;?>" value="<?php echo $row['title'] ;?>"></td>
			<td><input type="text" name="price<?php echo $i ;?>"  value="<?php echo $row['price'] ;?>"></td>
			<td><input type="text" name="author<?php echo $i ;?>"  value="<?php echo $row['author'] ;?>"></td>
		</tr>
		<?php
		}

		?>
	</table>
	<tr>
		<input type="submit" value="Update">
	</tr>
	</form>
</body>
</html>