<?php
    include("connection.php");
    if($_POST)                        
    {

        $errors = array();
        
         if(empty($_POST['uid']))
        {
            $errors['userid1'] = "please enter user id";
        }
        if(strlen($_POST['uid']) <5 )
        {
            $errors['userid2'] = "Your user id must be atleast 5 characters long";
        }  

        if(empty($_POST['password']))
        {
            $errors['password1'] = "please enter Password";
        }
        if(strlen($_POST['password']) < 8)
        {
            $errors['password2'] = "Password must be atlest 8 characters";
        }

        if(empty($_POST['cpassword']))
        {
            $errors['cpassword1'] = "please confirm Password";
        }
        if($_POST['password']!=$_POST['cpassword'])
        {
             $errors['cpassword2'] = "Passwords not match";
        }
      
        if(empty($_POST['name']))
        {
            $errors['name1'] = "please enter name";
        }
        if(strlen($_POST['name']) <5 )
        {
            $errors['name2'] = "Your name must be atleast 5 characters";
        }


            if(empty($_POST['email']))
        {
            $errors['email1'] = "please enter email";
        }


          if(empty($_POST['contact']))
        {
            $errors['contact1'] = "please enter contact no.";
        }
         
         if(empty($_POST['address']))
        {
            $errors['address1'] = "please enter address";
        }


            $userid = $_POST['uid'];
            $password= $_POST['password'];
            $name = $_POST['name'];
            $email=$_POST['email'];
            $contact=$_POST['contact'];
            $address=$_POST['address'];


            $sql1="select * from user where userid='$userid'";

            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1)>0){
              $errors['old_user']="User id already exists. Try again"; 
            }


            if(count($errors)==0){
            if($_POST['u_type']=='user'){
                $utype ='0';
            } else {
                $utype ='1';
            }
    

            $sql2="insert into user(userid,password,name,email,contact,address,usertype) values ('$userid','$password','$name','$email','$contact','$address','$utype')";
            
            $result2 = mysqli_query($conn,$sql2);
        
            if($result2){
                
                header("Location: successfullyreg.php");
                
            } else {
                echo(mysqli_error($conn));
            }
        }
    } 


    


    ?>
<!doctype html>
<html>

<head>
	<title>Registration</title>
<link rel="stylesheet" type="text/css" href="login.css" />
<style >

</style>
</head>

<body class="body">
<h1 style="text-align: center">Portal For Book Buy & Sell</h1>
<ul class="ul">
  <li class="li"><a href="main.php">Home</a></li>
  <li class="li"><a href="login.php">Login</a></li>
  <li class="li"><a href="register.php">Register</a></li>
  
</ul>

<div>
<form method="post" target="">
	
        <b>User Id</b><br>
        <input type="text" name="uid"value="<?php if(isset($_POST['uid'])) echo $_POST['uid']; ?>"><br>
        <p style="color: red"><?php if(isset($errors['userid1'])) echo $errors['userid1']; ?></p>
        <p style="color: red"><?php if(isset($errors['userid2'])) echo $errors['userid2']; ?></p>
        
        <p style="color: red"><?php if(isset($errors['old_user']))echo $errors['old_user'];?></p>
            
        <b>Password</b><br>
        <input type="password" name="password"><br>
         <p style="color: red"><?php if(isset($errors['password1'])) echo $errors['password1']; ?></p> 
         <p style="color: red"><?php if(isset($errors['password2'])) echo $errors['password2']; ?></p>

        <b> Confirm Password</b><br>
        <input type="password" name="cpassword"><br>
         <p style="color: red"><?php if(isset($errors['cpassword1'])) echo $errors['cpassword1']; ?></p> 
         <p style="color: red"><?php if(isset($errors['cpassword2'])) echo $errors['cpassword2']; ?></p> 

        <b>Name</b><br>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
        <p style="color: red"><?php if(isset($errors['name1'])) echo $errors['name1']; ?></p>
        <p style="color: red"><?php if(isset($errors['name2'])) echo $errors['name2']; ?></p>

        <b>Email</b><br>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"><br>
        <p style="color: red"><?php if(isset($errors['email1'])) echo $errors['email1']; ?></p>


        <b>Contact</b><br>
        <input type="text" name="contact" value="<?php if(isset($_POST['contact'])) echo $_POST['contact']; ?>">
        <p style="color: red"><?php if(isset($errors['contact1'])) echo $errors['contact1']; ?></p>
        

         <b>Address</b><br>
         <textarea cols=30 rows=2 name="address" ><?php if(isset($_POST['address'])) echo $_POST['address']; ?></textarea>
         <p style="color: red"><?php if(isset($errors['address1'])) echo $errors['address1']; ?></p>

        <b>User Type</b><br>
        <select name="u_type">
        	   <option value="user" selected>User</option>
                <option value="admin" >Admin</option>
        </select>

        <input type="submit" value="Register" name="login">
    
</form>

</div>
 </body>