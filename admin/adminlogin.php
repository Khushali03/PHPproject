<?php

require('connection.php');



if(isset($_POST['adminlogin']))
{
   $query="SELECT * FROM `admin_tbl` WHERE `admin_name`='$_POST[adminname]' AND `admin_password`='$_POST[adminpass]'";
   $result=mysqli_query($conn,$query);
   if(mysqli_num_rows($result)==1)
   {
    session_start();
    $_SESSION['adminloginid']=$_POST['adminname'];
    header("location:dashboard.php");
   }
   else
   {
    $error[] = 'incorrect name or password';
   }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="../css/admin.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h3>ADMIN LOGIN PANEL</h3>
            <?php
                if(isset($error)){
                foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="text" name="adminname" required placeholder="Admin name">
            <input type="password" name="adminpass" required placeholder="Password">
            <input type="submit" name="adminlogin" value="LOGIN" class="btn">

        </form>

    </div>
</body>
</html>