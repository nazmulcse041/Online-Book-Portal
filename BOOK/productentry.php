<?php
	include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
		<link rel="stylesheet" type="text/html" href="productentry.php">
		<link rel="stylesheet" type="text/css" href="adminstyle.css">

</head>
<body class="body">
	<h2 class="h2">Admin</h2>

			<ul class="ul">
				<li class="li">
					<a href="admin.php" class="a">Home</a>
				</li>
				<li class="li">
					<a href="productentry.php" class="a">Product Entry</a>
				</li>
				<li class="li">
					<a href="vieworder.php" class="a" >View Order</a>
				</li>
				<li class="li">
					<a href="index.php?logout='1'" style="color:red;" class="a">Logout</a>
				</li>		
			</ul>
</body>
</html>

<body class="body">
	<h2>Book entry</h2>
	<form class="entryfrom">
		<div class="input-group">
			<label>Book Id</label>
			<input type="text" name="bookid" >
		</div>
		<div class="input-group">
			<label>Book Name</label>
			<input type="text" name="text">	
		</div>
		<div class="input-group">
			<label>Author Name</label>
			<input type="text" name="text">	
		</div>
		<div class="input-group">
			<label>Summary</label>
			<input type="text" name="text">	
		</div>
		<div class="input-group">
			<label>Price</label>
			<input type="text" name="text">	
		</div>
		<div class="input-group">
			<label>Category</label>
			<input type="text" name="text">	
		</div>
		<div>
			<button type="submit" name="register" class="btn">Submit</button>
		</div>
	</form>

</body>
</html>