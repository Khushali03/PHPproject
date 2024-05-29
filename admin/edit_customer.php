<?php
require('connection.php');
session_start();
session_regenerate_id(true);

if(isset($_POST['update']))
{

    $name=$_POST['cust_name'];
    $address=$_POST['address'];
    $city=$_POST['country'];
    $state=$_POST['state'];
    $state=$_POST['city'];
    $phoneno=$_POST['phoneno'];
    $email=$_POST['email'];
    $pincode=$_POST['pincode'];

$id=$_GET['id'];

$sql="UPDATE `cust_tbl` set `cust_name`='$name',`address`='$address',`country`='$country',`state`='$state',`city`='$city',`phoneno`='$phoneno',`email`='$email',`pincode`='$pincode' WHERE cust_id='$id'";
mysqli_query($conn,$sql);
header('location:customer.php');

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/adminpanel.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
<?php require('adminpanel.php'); ?>
<div class="main-content">
<main>
    <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Customers Details</h3>
                </div>
                <div class="error">
                <?php
                    if(isset($error)){
                        foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                        };
                    };
                ?>
                </div>
                <div class="card-body">  
                    <?php
                        $id=$_GET['id'];
                        $query = "SELECT * FROM `cust_tbl` WHERE cust_id='$id'";
                        $query_run = mysqli_query($conn,$query);

                        if(mysqli_num_rows($query_run)>0)
                        {
                        foreach($query_run as $row)
                        {
                    ?>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label for="">Name</label>
                                <input type="text" name="cust_name" value="<?php echo $row['cust_name']; ?>" class="fotm-control">
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="">Address</label>
                                <textarea name="address" cols="20" rows="3"><?php echo $row['address']; ?></textarea>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">country</label>
                                <input type="text" name="country" value="<?php echo $row['country']; ?>" class="fotm-control">
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="">state</label>
                                <input type="text" name="state" value="<?php echo $row['state']; ?>" class="fotm-control">
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="">city</label>
                                <input type="text" name="city" value="<?php echo $row['city']; ?>" class="fotm-control">
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="">phone number</label>
                                <input type="text" name="phoneno" pattern="[0-9]{10}" value="<?php echo $row['phoneno']; ?>" class="fotm-control">
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="">email</label>
                                <input type="text" name="email" value="<?php echo $row['email']; ?>" class="fotm-control">
                            </div>
                            <div class="col-md-6 mb-1">
                                <label for="">pincode</label>
                                <input type="text" name="pincode" pattern="[0-9]{6}" value="<?php echo $row['pincode']; ?>" class="fotm-control">
                            </div>
                            <div class="col-md-12 mb-1">
                                <button type="submit" name="update" class="btn">UPDATE</button>
                            </div>
                        </div>
                    </form>
                    <?php
                                    }
                                    }
                                    else
                                    {
                                ?>
                        
                                <h4>No record found</h4>
                            
                                <?php

                                    }

                                ?>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</body>
</html>