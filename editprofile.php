<?php

require('config.php');
session_start();

if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
    header('location:index.php');
}

    $email = $_SESSION['email'];
    $query =mysqli_query($conn,"SELECT * FROM cust_tbl WHERE email='$email'");
    $row = mysqli_fetch_assoc($query);

if(isset($_POST['editprofile']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $phoneno=$_POST['phoneno'];
    $pincode=$_POST['pincode'];

    if((!empty($name)) && (!empty($address)) && (!empty($city)) && (!empty($state)) && (!empty($phoneno)) && (!empty($pincode)))
    {
        $email=$_SESSION['email'];
        $up=mysqli_query($conn,"UPDATE `cust_tbl` SET `cust_name`='$name', `address`='$address', `city`='$city', `state`='$state', `phoneno`='$phoneno',`pincode`='$pincode' WHERE `email`='$email'");
        echo"
        <script>
            alert('your details update successfully...');
            window.location.href='profile.php';
        </script>
    "; 
        
    }
    else
    {
        $error[] = 'name,address,city,state,phoneno,email,pincode are required';
    }

}
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editprofile.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
<div class="img">
	<img src="images/personal.svg">
</div>
    <div class="container">
        <form action="" method="POST">
            <div class="inline">
                <h3>Hii</h3><div class="email">&nbsp;<?php echo"<b>$_SESSION[email]</b>"; ?></div>
                </div>
                <h3>Here, You can change your following details</h3><br>
            
        
            <?php
               if(isset($error)){
               foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
               };
               };
            ?>
            <input type="text" name="name" value="<?php echo $row['cust_name']; ?>" required placeholder="enter your full name">
            <input type="text" name="address" value="<?php echo $row['address']; ?>" required placeholder="enter your address">
            <input type="text" name="country" value="<?php echo $row['country']; ?>" required placeholder="enter your country name">
            <input type="text" name="state" value="<?php echo $row['state']; ?>" required placeholder="enter your state name">
            <input type="text" name="city" value="<?php echo $row['city']; ?>" required placeholder="enter your city name">
            <input type="text" name="phoneno" value="<?php echo $row['phoneno']; ?>" required placeholder="enter your number">
            <input type="text" name="pincode" value="<?php echo $row['pincode']; ?>" required placeholder="enter your pincode">
            <input type="submit" name="editprofile" value="UPDATE" class="btn">
            <p><a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></p>
        </form>

    </div>
</body>
</html>