
<?php
    include('connection.php');
    session_start();
    if($_POST){
        $error = array();
           if(empty($_POST['userId']))
        {
            $errors['userid1'] = "please enter user id";
        }
        if(strlen($_POST['userId'])<3 )
        {
            $errors['userid2'] = "Your user id must be atleast 3 characters long";
        }  

        if(empty($_POST['password']))
        {
            $errors['password1'] = "please enter Password";
        }
        if(strlen($_POST['password']) < 8)
        {
            $errors['password2'] = "Password must be atlest 8 characters long";
        }



        $userid = $_POST['userId'];
        $password = $_POST['password'];

        $sql = "select * from user where userid = '$userid' and password='$password'";
        $result = mysqli_query($conn,$sql);
        $numrow = mysqli_num_rows($result);

        if( $numrow > 0)
        {
               $_SESSION['userid']=$userid;
               header("Location:user.php");
        }
        else 
        {
               $errors['no_user']="No maching userid or password";
        }


    }

?>
<!doctype html>

<html>
<head>

<title>Login</title>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css" />
      

</head>

<body class="body">
<h1 style="text-align: center">Portal For Book Buy & Sell</h1>
    <ul class="ul">
        <li class="li"><a href="main.php">Home</a></li>
        <li class="li"><a  href="login.php">Login</a></li>
        <li class="li"><a href="adminlogin.php">Admin Login</a></li>
        <li class="li"><a  href="register.php">Register</a></li>
    </ul>
<div>
<form method="post" target="" >
    
        <b>User Id</b><br>
        <input type="text" name="userId"><br>
        <p style="color: red"><?php if(isset($errors['userid1'])) echo $errors['userid1']; ?></p>
        <p style="color: red"><?php if(isset($errors['userid2'])) echo $errors['userid2']; ?></p>

        <b>Password</b><br>
        <input type="password" name="password"><br>
        <p style="color: red"><?php if(isset($errors['password1'])) echo $errors['password1']; ?></p> 
        <p style="color: red"><?php if(isset($errors['password2'])) echo $errors['password2']; ?></p>

   

        <input type="submit" value="Login" name="login">

        <br><br>Don't have any account? Please Register.

        <p style="color: red"><?php if(isset($errors['no_user']))echo $errors['no_user'];?></p>
        </form>
         </div>
</body>
</html>


