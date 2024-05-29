<?php
require('config.php');
session_start();

if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
    redirect('index.php');
}

$email=$_SESSION["email"];
if(isset($_POST['upass']))
{
    $old=$_POST['oldpass'];
    $new=$_POST['newpass'];
    $confirm=$_POST['cnewpass'];
    $query="SELECT `password` FROM `cust_tbl` WHERE `email`='$email'";
    $result=mysqli_query($conn,$query);
    $result_fetch=mysqli_fetch_assoc($result);
    if(password_verify($old,$result_fetch['password']))
    {
        if($confirm ==''){
            $error[] = 'pls confirm password';
        }
        if($new != $confirm){
            $error[] = 'confirm password do not match';
        }

    if(!isset($error))
    {
        $options = array("cost"=>4);
        $new = password_hash($new,PASSWORD_BCRYPT,$options);
        $uquery = mysqli_query($conn,"UPDATE cust_tbl SET password='$new' WHERE email='$email'");
        if($uquery)
        {
            $error[] = 'password change successfully';
        }
        else
        {
            $error[] = 'somthing went wrong';
        }
    }
    }
    else
    {
        $error[] = 'password is not right';
    }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/editprofile.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="img">
	<img src="images/personal.svg">
</div>
<div class="container">
<form action="changepass.php" method="POST">
    <h3>Change Your Password</h3>
    <?php
        if(isset($error)){
        foreach($error as $error){
        echo '<span class="error-msg">'.$error.'</span>';
        };
    };
    ?>
    <input type="password" name="oldpass" required placeholder="enter your old password">
    <input type="password" name="newpass" pattern="[a-zA-Z0-9]{8,12}" required="required" placeholder="enter your new password" title="please enter characters or numbers between 8 to 12 for new password">
    <input type="password" name="cnewpass" required placeholder="confirm your new password">
    <input type="submit" name="upass" value="CHANGE" class="btn">
    <p class="link"><a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></p>
</form>

</div>
</body>
</html>