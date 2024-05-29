<?php

require('config.php');
session_start();
?>
<?php require('header.php'); ?>

<main class="site-main">
        <section class="section section--banner2">
            <div class="wrap">
                <div class="banner2__text">
                    <h2>Wedding Booking at Udaipur</h2>
                    <p><a href="index.php">Home </a>/ <a href="udaipur.php">Destination Wedding planner </a> / <span>Udaipur</span></p>
                </div>
            </div>
        </section>
        <section class="section section--planner">
            <div class="wrap">
                <div class="jaipur-info">
                    <h3>My Booking details</h3>
                </div>
                        <?php
                        $email = $_SESSION['email'];
                        $query = "SELECT * FROM `cust_tbl` WHERE `email`='$email'";
                        $query_run = mysqli_query($conn,$query);

                        if(mysqli_num_rows($query_run)>0)
                        {
                        foreach($query_run as $row)
                        {
                        ?>
                <div class="row">
                    <div class="col-9">
                        <div class="about__planner"><?php
                        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                { ?>
                               <i class="fa-solid fa-circle-user"></i>
                                <label><?php echo $row['cust_name']; ?><br>
                                <?php echo $row['email']; ?></label>
                                <?php
                                    }
                                    }
                                ?>
                    <?php
                        $email = $_SESSION['email'];
                        $query = "SELECT dest_tbl.dest_id as dest_id,dest_tbl.dest_img,dest_tbl.dest_name,dest_tbl.dest_price,booking_tbl.book_id as book_id,booking_tbl.from_date,booking_tbl.to_date,booking_tbl.book_venue,booking_tbl.status from booking_tbl join dest_tbl where booking_tbl.dest_id=dest_tbl.dest_id and booking_tbl.cust_email='$email'";

                        $query_run = mysqli_query($conn,$query);
                                    
                        if(mysqli_num_rows($query_run)>0)
                        {
                        foreach($query_run as $row)
                        {
                    ?>
                    <ul class="booking_list">
                        <li>
                        <div class="booking_img">
                            <a href="hotels.php?id=<?=$row['dest_id'];?>"><img src="<?="uploads/".$row['dest_img']?>" alt="img"></a>
                        </div>
                        
                        <div class="booking_title">
                            <h6><a href="hotels.php?id=<?=$row['dest_id'];?>"><?php echo $row['dest_name']; ?> &nbsp;&nbsp;₹<?php echo $row['dest_price']; ?><sup>*</sup></a></h6>
                            <p><b>From Date: <?php echo $row['from_date']; ?></b><br>
                                <b>To Date: <?php echo $row['to_date']; ?></b><br>
                                <b>Venue selection: <?php echo $row['book_venue']; ?></b> <br>
                                <?php if($row['status']==1)
                            { ?>
                            <div class="detail">
                                <button style="background-color: white;"><a href="bookingpdf.php?id=<?=$row['book_id'];?>"  target="_blank">Action</a></button>
                            </div>
                            <?php } ?>
                        </p>
                              
                                
                        </div>
                        <div class="booking_status"> 
                            <?php if($row['status']==1)
                            { ?>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="booking.php" class="btn outline btn-xs active-btn">Confirmed.....</a>
            
                            <?php } else if($row['status']==2) { ?>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="booking.php" class="btn outline btn-xs">complete</a>
                            <?php } else if($row['status']==3) { ?>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="booking.php" class="btn outline btn-xs">Cancelled....</a>
                            <?php } else { ?>
                                    <a href="booking.php" class="btn outline btn-xs">Not Confirm yet...</a>
                                    
                                    
                            <?php } ?>
                        </div>
                    </li>
                    </ul>
                    <?php 
                    } }
                    ?>
                    

<?php
}
?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require('footer.php'); ?>