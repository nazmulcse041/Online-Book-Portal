<?php 
	  include('connection.php');
	session_start();

	$q="SELECT * FROM book";
	$result=mysqli_query($conn,$q);
	$num=mysqli_num_rows($result);
	mysqli_close($conn);


	if($_POST)                        
    {

        $errors = array();
        
         if(empty($_POST['bookid']))
        {
            $errors['bookid1'] = "please enter book id";
        }

         if(empty($_POST['title']))
        {
            $errors['title1'] = "please enter book title";
        }

         if(empty($_POST['userid']))
        {
            $errors['userid1'] = "please enter user id";
        }

         if(empty($_POST['contact']))
        {
            $errors['contact1'] = "please enter contact no.";
        }
         
        if(empty($_POST['address']))
        {
            $errors['address1'] = "please enter address";
        }


            $book_id = $_POST['bookid'];
            $title=$_POST['title'];
            $userid = $_POST['userid'];
            $contact=$_POST['contact'];
            $address=$_POST['address'];

              include('connection.php');

            $sql="select * from book where bookid=$book_id";
            $res=mysqli_query($conn,$sql);
            $n=mysqli_num_rows($res);
            if(!($n>0)) $errors['not_exist']="book not  available";
            else {

            	$_SESSION['b_id']=$book_id;
            	$_SESSION['address']=$address;
            	$_SESSION['title']=$title;
            	$_SESSION['userid']=$userid;
            	$_SESSION['contact']=$contact;


            	header("location:order1.php");
            }
    }


	
?>

<!doctype html>
<html>
<head>
<title>Home</title>
 	<link rel="stylesheet" type="text/css" href="user.css" />
<style>

</style>
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

	<h3>Order for any books</h3>
	
	<form action="" method="post">
		<label>Bookid</label>
		<input type="text" name="bookid">
		<br>
		<p><?php if (isset($errors['bookid1'])) echo $errors['bookid1']; ?></p>
		<label>Title</label>
		<input type="text" name="title">
		<p><?php if (isset($errors['title1'])) echo $errors['title1']; ?></p>
		<br>

		
		<label>Userid</label>
		<input type="text" name="userid">
		<p><?php if (isset($errors['userid1'])) echo $errors['userid1']; ?></p>
		

		<br>
		<label>Contact</label>
		<input type="text" name="contact" required="">
		<p><?php if (isset($errors['contact1'])) echo $errors['contact1']; ?></p>

		<br>
		<label>Address</label>
		<input type="text" name="address" required="">
		<p><?php if (isset($errors['address1'])) echo $errors['address1']; ?></p>
		<br>
		<input type="submit" value="order">
				
	</form>
</body>
</html>