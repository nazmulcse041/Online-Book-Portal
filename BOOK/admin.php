
<!doctype html>
<html>
<head>
<title> AdminHome</title>
<style>
body{
 	background-image: url(books.jpg);
 }
 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    width: 100%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 20px;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
h1{
  text-align: center;
  color:red;


}
</style>
</head>
		
<body class="body">
	<h1 class="h1">ADMIN HOME PAGE</h1>
	<ul class="ul" >
			<li class="li">
				<a href="admin.php" class="a">Home</a>
			</li>

			<li class="li">
				<a href="insertForm.php">Insert Book</a>
			</li>
				
			<li class="li">
				<a href="view.php" class="a">View Books Record </a>
			</li>
			<li class="li">
				<a href="deleteForm.php" class="a">Delete Books Record </a>
			</li>
			<li class="li">
				<a href="updateForm.php" class="a">Update Books Record </a>
			</li>

			<li class="li">
				<a href="view_order.php" class="a">View Order </a>
			</li>
			
			<li class="li">
				<a href="accept_order.php" class="a">Accept Order</a>
			</li>


			<li class="li"><a href="logout.php">Logout</a></li>
	</ul>

</body>
</html>