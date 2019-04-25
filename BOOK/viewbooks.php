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
	<title></title>
	<link rel="stylesheet" type="text/css" href="viewStyle.css">
	<link rel="stylesheet" type="text/css" href="user.css" />
</head>


<body class="body">
	<h1 class="header">User Homepage</h1>
	<ul class="ul" >
			<li class="li">
				<a href="main.php" class="a">Home</a>
			</li>

			<li class="li">
				<a href="viewbooks.php">View Books</a>
			</li>
				
			<li class="li">
				<a href="order.php" class="a">Order</a>
			</li>
			<li class="li"><a href="logout.php">Logout</a></li>
	</ul>
	</body>


<body class="body">

	<h1> Available Books  </h1>
	<table id="view_table">
		<tr>
			<th>Book ID</th>
			<th>Title</th>
			<th>Price</th>
			<th>Author</th>
			<th>Oder</th>
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
			<td><a href="order.php" style="color:black">Order</a></td>
		</tr>
		<?php
		}

		?>
	</table>
</body>
</html>