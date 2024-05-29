<?php

require('config.php');
session_start();

if(isset($_POST['login']))
{
    $query="SELECT * FROM `cust_tbl` WHERE `email`='$_POST[email]' OR `phoneno`='$_POST[email]'";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        if(mysqli_num_rows($result)===1)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'],$result_fetch['password']))
            {
                $_SESSION['logged_in']=true;
                $_SESSION['email']=$result_fetch['email'];
                echo"
                <script>
                    alert('Welcome $result_fetch[cust_name]');
                    window.location.href='index.php';
                </script>
                ";
            }
            else
            {
                $error[] = 'incorrect password';
            }
        }
        else
        {
            echo"
            <script>
                alert('email or number does not register');
                window.location.href='regi.php';
            </script>
            ";
        }
    }
    else
    {
        echo"
        <script>
            alert('query can not run');
            window.location.href='login.php';
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/loginn.css?v=<?php echo time(); ?>">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="images/Picture1.png">
	<div class="container">
		<div class="img">
			<img src="images/chatting.svg">
		</div>
		<div class="login-content">
			<form action="login.php" method="POST">
                <?php
                	if(isset($error)){
                	foreach($error as $error){
                	echo '<span class="error-msg">'.$error.'</span>';
                	};
            		};
            	?>
				<img src="images/personal.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email Or Phoneno</h5>
           		   		<input type="text" class="input" name="email" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" required>
            	   </div>
            	</div>
            	
            	<input type="submit" name="login" class="btn" value="Login">
				<p>Don't have any account?</p> <a href="regi.php">Register</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
