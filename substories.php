<?php

require('config.php');
session_start();

?>

<?php require('header.php'); ?>

    <?php
                            $id=$_GET['id'];
                            $query = "SELECT * FROM `stories_tbl` WHERE stories_id='$id'";
                            $query_run = mysqli_query($conn,$query);

                            $row = mysqli_fetch_array($query_run);

?>
    <main class="site-main">
        <section class="section section--banner2">
            <div class="wrap">
                <div class="banner2__text">
                    <h2><?=$row['stories_name'];?></h2>
                    <p><a href="index.php">Home </a>/ <a href="wedding-stories.php">Wedding planning Service</a>/ <span><?=$row['stories_name'];?></span></p>
                </div>
            </div>
        </section>
        <section class="section section--planner">
            <div class="wrap">
                <div class="jaipur-info">
                    <h3><?=$row['stories_name'];?> Stories</h3>

                </div>
                
            </div>
        </section>
        <section class="section section--gallery">
            <div class="wrap">
                <div class="row">
                <?php
                            $query = "SELECT * FROM `substories_tbl` WHERE stories_id='$id'";
                            $query_run = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                    ?>
                <div class="col-4">
                        <a href="#">
                            <div class="img__gallery">
                               <img src="<?="uploads/".$row['substor_img'];?>" alt="img">
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