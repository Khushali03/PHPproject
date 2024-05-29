<?php
require('connection.php');
session_start();

if(isset($_POST['upload'])){
    $event_name = $_POST['event_name'];
    $file = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
        if(move_uploaded_file($file_tmp,"../uploads/". $file)){
            $query = mysqli_query($conn,"INSERT INTO event_tbl(event_name,image) VALUES('$event_name','$file')");
            header('location:event.php');
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
                    <h3>Add event image</h3>
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
                    <form action="" method="POST" enctype="multipart/form-data" >
                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <div class="col-md-8 mb-1">
                                <label for="">Name</label>
                                    <input type="text" name="event_name" class="fotm-control" require>
                                </div>
                                <div class="col-md-8 mb-1">
                                <label>Image</label>
                                    <input type="file" name="image" class="fotm-control">
                                </div>
                                <div class="col-md-12 mb-1">
                                    <button type="submit" name="upload" class="btn">UPLOAD</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</body>
</html>