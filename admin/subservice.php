<?php

require('connection.php');
session_start();

if(isset($_POST['subser_delete']))
{
    $subser_id = $_POST['subser_delete'];
    $query = "DELETE FROM `subservices_tbl` WHERE subser_id='$subser_id' ";
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
                    <h3>Subservice</h3>
                    <button><a href="add_subservice.php">ADD </a><span class="las la-arrow-right">
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
                                <th>Services</th>
                                <th>Image</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          	
                             
                            $query = "SELECT b.*, s.service_name AS service_name FROM subservices_tbl b,services_tbl s WHERE s.service_id = b.service_id";
                            $query_run = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>

                                    <tr>
                                        <td><?=$row['subser_id'];?></td>
                                        <td><?=$row['service_name'];?></td>
                                        <td><img src="<?="../uploads/".$row['subser_img'];?>" alt="Image" width="120" height="50"></td>
                                        <td>
                                            <a href="edit_subservice.php?id=<?=$row['subser_id'];?>" class="gallery_edit">Edit</a>
                                        </td>
                                        <td>
                                            <form action="" method="POST">
                                                <button name="subser_delete" value="<?=$row['subser_id'];?>" class="gallery_delete">Delete</button>
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