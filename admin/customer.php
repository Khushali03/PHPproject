<?php

require('connection.php');
session_start();

if(isset($_POST['cust_delete']))
{
    $cust_id = $_POST['cust_delete'];
    $query = "DELETE FROM cust_tbl WHERE cust_id='$cust_id' ";
    $query_run = mysqli_query($conn,$query);
    if($query_run)
    {
        $error[]= 'Delete Record Sccessfully....';
    }
    else
    {
        $error[]= 'somthing went wrong';
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
                    <h3>Customers</h3>
                    <button><a href="../regi.php" target="_blank">ADD </a><span class="las la-arrow-right">
                    </span></button>
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
                  <div class="table-responsive">
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Country</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Phone-no</th>
                                <th>Email-id</th>
                                <th>Pincode</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php

                                    $query = "SELECT * FROM `cust_tbl`";
                                    $query_run = mysqli_query($conn,$query);

                                    if(mysqli_num_rows($query_run)>0)
                                    {
                                    foreach($query_run as $row)
                                    {
                                ?>
                            <tr>
                                <td><?=$row['cust_id'];?></td>
                                <td><?= $row['cust_name']; ?></td>
                                <td><?= $row['address']; ?></td>
                                <td><?= $row['country']; ?></td>
                                <td><?= $row['state']; ?></td>
                                <td><?= $row['city']; ?></td>
                                <td><?= $row['phoneno']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['pincode']; ?></td>
                                <td>
                                        <a href="edit_customer.php?id=<?=$row['cust_id'];?>" class="delete">Edit</a>
                                </td>
                                <td>
                                    <form action="" method="POST">
                                        <button name="cust_delete" value="<?=$row['cust_id'];?>" class="delete">Delete</button>
                                    </form>
                                </td>
                                

                            </tr>
                                <?php
                                    }
                                    }
                                    else
                                    {
                                ?>
                            <tr>
                                <td colspan="9">No record found</td>
                            </tr>
                                <?php

                                    }

                                ?>

                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</body>
</html>