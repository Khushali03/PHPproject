<?php

require('connection.php');
session_start();


if(isset($_REQUEST['coid']))
	{
$id= $_GET['coid'];
$status="2";
$query = "UPDATE booking_tbl SET status=$status WHERE book_id=$id";
$query_run = mysqli_query($conn,$query);
$error[] = 'Booking Successfully Complted...';
}

if(isset($_REQUEST['cnid']))
	{
$id= $_GET['cnid'];
$status="3";
$query = "UPDATE booking_tbl SET status=$status WHERE book_id=$id";
$query_run = mysqli_query($conn,$query);
$error[] = 'Booking Successfully Canclled...';
}



if(isset($_REQUEST['cmid']))
	{
$id= $_GET['cmid'];
$status="1";
$query = "UPDATE booking_tbl SET status=$status WHERE book_id=$id";
$query_run = mysqli_query($conn,$query);
$error[] = 'Booking Successfully Confirmed...';
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
                    <h3>Booking details</h3>
                    
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
                                <th>Customer_name</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Venue</th>
                                <th>Status</th>
                                <th>Posting<br>Date</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            $query = "SELECT dest_tbl.dest_id as dest_id,dest_tbl.dest_img,dest_tbl.dest_name,dest_tbl.dest_price,cust_tbl.cust_id as cust_id,cust_tbl.cust_name,booking_tbl.book_id as book_id,booking_tbl.from_date,booking_tbl.to_date,booking_tbl.book_venue,booking_tbl.status,booking_tbl.posting_date from booking_tbl join dest_tbl on booking_tbl.dest_id=dest_tbl.dest_id join cust_tbl on booking_tbl.cust_email=cust_tbl.email";
                                                                                                                                                                                                                                                                            
                            $query_run = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>

                                    <tr>
                                        <td><?=$row['book_id'];?></td>
                                        <td><?=$row['cust_name'];?></td>
                                        <td><?=$row['dest_name'];?></td>
                                        <td>₹<?=$row['dest_price'];?></td>
                                        <td><?=$row['from_date'];?></td>    
                                        <td><?=$row['to_date'];?></td>           
                                        <td><?=$row['book_venue'];?></td>       
                                        <td><?php
if($row['status']==0)
{
echo htmlentities('Not Confirmed yet');
} else if ($row['status']==1) {
echo htmlentities('Confirmed');
}
else if ($row['status']==2) {
    echo htmlentities('complete');
    }
 else{
 	echo htmlentities('Cancelled');
 }
										?></td> 
                                        <td><?=$row['posting_date'];?></td> 
                                        <td class="confirm"><a href="booking.php?cmid=<?=$row['book_id'];?>" onclick="return confirm('Do you really want to Confirm this booking')">Confirm</a>&nbsp;//&nbsp;
                                        <a href="booking.php?cnid=<?=$row['book_id'];?>" onclick="return confirm('Do you really want to Cancle this booking')"> Cancel</a>&nbsp;//&nbsp;
                                        <a href="booking.php?coid=<?=$row['book_id'];?>" onclick="return confirm('Do you really want to Complete this booking')"> Complete</td> 

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