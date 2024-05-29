<?php

require('connection.php');
session_start();

if(isset($_POST['service_delete']))
{
    $service_id = $_POST['service_delete'];
    $query = "DELETE FROM `services_tbl` WHERE service_id='$service_id' ";
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
                    <h3>Services</h3>
                    <button><a href="add_service.php">ADD </a><span class="las la-arrow-right">
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
                    <form action="" method="POST" enctype="multipart/form-data">
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Detail</th>
                                <th>Image</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM `services_tbl`";
                            $query_run = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>

                                    <tr style="border: 1px dashed black;vertical-align:top;">
                                        <td><?=$row['service_id'];?></td>
                                        <td><?=$row['service_name'];?></td>
                                        <td><?=$row['service_detail'];?></td>
                                        <td><img src="<?="../uploads/".$row['service_img'];?>" alt="Image" width="120" height="50"></td>
                                        <td>
                                            <a href="edit_service.php?id=<?=$row['service_id'];?>" class="gallery_edit">Edit</a>
                                        </td>
                                        <td>
                                            <form action="" method="POST">
                                               <button name="service_delete" value="<?=$row['service_id'];?>" class="gallery_delete">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                    

                                <?php

                            }
                            ?>
                        </tbody>
                    </table>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</body>
</html>