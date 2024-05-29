
<?php
require('connection.php');
session_start();

if(isset($_POST['edit']))
{
    $subser_id = $_POST['subser_id'];
    $service = $_POST['service'];
    $old_img = $_POST['img_old'];
    $image = $_FILES['image']['name'];
    $update = "";
    if($image != NULL)
    {

    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;
    $update = $filename;
    }
    else
    {
        $update = $old_img;
    }
    $query = "UPDATE subservices_tbl SET service_id='$service', subser_img='$update' where subser_id='$subser_id' ";
    $query_run = mysqli_query($conn,$query);
    if($query_run)
    {
        if($image != NULL){
            if(file_exists('../uploads/'.$old_img)){
                unlink("../uploads/".$old_img);
            }
            move_uploaded_file($_FILES['image']['tmp_name'],'../uploads/'.$update);
        }
        
        header('Location: subservice.php');
        exit(0);
    }
    else
    {
        $error[] = 'something went wrong';
        exit(0);
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
                    <h3>Edit Subservice image</h3>
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
                        $query = "SELECT * FROM `subservices_tbl` WHERE subser_id='$id'";
                        $query_run = mysqli_query($conn,$query);
                        $data = mysqli_fetch_array($query_run);

                        if(mysqli_num_rows($query_run)>0)
                        {
                        foreach($query_run as $row)
                        {
                    ?>
                    <form action="" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="subser_id" value="<?=$row['subser_id']?>">
                        <div class="row">
                            <div class="col-md-6 mb-1 margin">
                                <label>Image  <?php echo $row['subser_img']; ?></label>
                                <input type="hidden" require name="img_old" value="<?php echo $row['subser_img']; ?>" class="fotm-control">
                                <input type="file" require name="image" class="fotm-control" require>
                                <select class="form-control" name="service" require>
										<option>---------Select Hotels-----------</option>
										<?php
										$res=mysqli_query($conn,"select * from services_tbl");
										while($row=mysqli_fetch_assoc($res)){
                                        ?>

											<option value="<?php echo $row['service_id']?>"<?php if($row['service_id']== $data['service_id']) {echo "selected";}?>> <?php echo $row['service_name'] ?></option>;
                                        <?php
										}
										?>
							    </select>
                                
                                <div class="col-md-12 mb-1">
                                    <button type="submit" name="edit" class="btn">UPLOAD</button>
                            </div>
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