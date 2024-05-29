<?php

require('config.php');
session_start();

if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
    redirect('index.php');
}

    $email = $_SESSION['email'];
    $query =mysqli_query($conn,"SELECT * FROM cust_tbl WHERE email='$email'");
    $row = mysqli_fetch_assoc($query);
    if(isset($_POST['profile']))
    {
        header('location:editprofile.php');
    }
    if(isset($_POST['changepass']))
    {
        header('location:changepass.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css?v=<?php echo time(); ?>">
    <title>Document</title>

</head>
<body>
<div class="form_container">
    <div class="myform">
        <form action="" method="POST">
        <div class="inline">
            <h2>Hii</h2><div class="email"><?php echo"<b>$_SESSION[email]</b>"; ?></div>
        </div>
           
            <?php
               if(isset($error)){
               foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
               };
               };
            ?>
            <br>
            <div class="label">
            <label for="">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> :</span> <?php echo $row['cust_name']; ?></label><br>
            <label for="">Address &nbsp;&nbsp;<span>:</span> <?php echo $row['address']; ?></label><br>
            <label for="">Country&nbsp;&nbsp;&nbsp;<span>:</span><?php echo $row['country']; ?></label><br>
            <label for="">State &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> :</span> <?php echo $row['state']; ?></label><br>
            <label for="">City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> :</span> <?php echo $row['city']; ?></label><br>
            <label for="">Phone no <span>:</span> <?php echo $row['phoneno']; ?></label><br>
            <label for="">Pincode &nbsp;&nbsp;<span>:</span> <?php echo $row['pincode']; ?></label><br>
            </div>
            <br>
            <input type="submit" name="profile" value="Edit Profile" class="form-btn">
            <input type="submit" name="changepass" value="Change Password" class="form-btn">
            <p><a href="index.php">Home</a><a href="logout.php">Logout</a></p>
            
        </form>
    </div>
    <div class="image">
        <img src="images/profile.svg" width="300px">
    </div>
</div>
</body>
</html>