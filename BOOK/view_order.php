<?php
	include('connection.php');

	$q="SELECT * FROM book_order";
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
	<h1>Book Record </h1>
	<table id="view_table">
		<tr>
			<th>Book ID</th>
			<th>Title</th>
			<th>userid</th>
			<th>Author</th>
		</tr>
		<?php
			
	
				while($row=mysqli_fetch_array($result))
				{
			
		?>
		<tr>
			<td><?php echo $row['b_id'] ;?></td>
			<td><?php echo $row['title'] ;?></td>
			<td><?php echo $row['user_id'] ;?></td>
			<td><?php echo $row['address'] ;?></td>
		</tr>
		<?php
		}

		?>
	</table>
</body>
</html>