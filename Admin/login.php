<!-- Database Config -->

<?php

include('./include/connection.php');
@session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/styless.css">
	<link rel="shortcut icon" href="./img/site_logo.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
		<a href="../User/index.php">
			<img src="img/site_logo.png">
			<h2 class="title">Learning Plateform</h2>
		</a>
		</div>
		<div class="login-content">
			<form action="" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Admin Login</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="admin_username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="admin_password">
            	   </div>   
            	</div>
				<!-- <a href="./superadmin.php">super admin</a> -->
				<br>
            	<input type="submit" class="btn" value="Login" name="admin_login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

<?php

          if(isset($_POST['super_admin_registration']))
             {
                $admin_username=$_POST['admin_username'];
                $admin_password=$_POST['admin_password'];
				$hash_password=password_hash($admin_password,PASSWORD_DEFAULT);
                $admin_status="active";

				$insert_super_admin_query="insert into `admin_tbl` 
                (admin_username,admin_password,admin_status) values ('$admin_username','$hash_password','$admin_status')";
                $execute_super_admin_query=mysqli_query($connection,$insert_super_admin_query);
				if($execute_super_admin_query)
				{
					echo "<script>alert('Admin Registration SuccessFully Completed')</script>";
					echo "<script>window.open('login.php','_self')</script>";
				} 
				else
				{
					mysqli_error($connection);
				}            
             }	

?>

<?php
	if(isset($_POST['admin_login']))
	{
		$admin_username=$_POST['admin_username'];
        $admin_password=$_POST['admin_password'];
		//Select User Query
		$select_admin_login_query="Select * from admin_tbl where admin_username='$admin_username'";
		$execute_admin_login_query=mysqli_query($connection,$select_admin_login_query);
		$row_data=mysqli_fetch_assoc($execute_admin_login_query);

		
			$_SESSION['admin_username']=$admin_username;
			if(password_verify($admin_password,$row_data['admin_password']))
			{
                $_SESSION['admin_username']=$admin_name;
					echo "<script>alert('Login SuccessFully')</script>";
					echo "<script>window.open('index.php','_self')</script>";

			}else
			{
				echo "<script>alert('Invalid Credantial')</script>";
			}
		
	}
?>