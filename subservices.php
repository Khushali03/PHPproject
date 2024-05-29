<?php

require('config.php');
session_start();

?>

<?php require('header.php'); ?>
    <?php
                            $id=$_GET['id'];
                            $query = "SELECT * FROM `services_tbl` WHERE service_id='$id'";
                            $query_run = mysqli_query($conn,$query);

                            $row = mysqli_fetch_array($query_run);

?>
    <main class="site-main">
        <section class="section section--banner2">
            <div class="wrap">
                <div class="banner2__text">
                    <h2><?=$row['service_name'];?></h2>
                    <p><a href="index.php">Home </a>/ <a href="wedding-service.php">Wedding planning Service</a>/ <span><?=$row['service_name'];?></span></p>
                </div>
            </div>
        </section>
        <section class="section section--planner">
            <div class="wrap">
                <div class="jaipur-info">
                    <h3><?=$row['service_name'];?> Services</h3>

                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="about__planner text-center">
                          <p><?=$row['service_detail'];?></p>
                       </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </section>
        <section class="section section--gallery">
            <div class="wrap">
                <div class="row">
                <?php
                            $query = "SELECT * FROM `subservices_tbl` WHERE service_id='$id'";
                            $query_run = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                    ?>
                <div class="col-4">
                        <a href="#">
                            <div class="img__gallery">
                               <img src="<?="uploads/".$row['subser_img'];?>" alt="img">
                               <div class="search__icon">
                                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                               </div>
                            </div>
                        </a>
                    </div>
                    <?php

}
?>
                 </div>
            </div>
        </section>
    </main>
    <?php require('footer.php'); ?>