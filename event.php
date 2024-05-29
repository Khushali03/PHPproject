<?php

require('config.php');
session_start();

?>

<?php require('header.php'); ?>

    <main class="site-main">
        <section class="section section--banner2">
            <div class="wrap">
                <div class="banner2__text">
                    <h2>Corporate Event Planner</h2>
                    <p><a href="index.php">Home </a>/ <span>Corporate Event Planner</span></p>
                </div>
            </div>
        </section>
        <section class="section section--gallery ">
            <div class="wrap">
                <div class="row">
                    <?php
                            $query = "SELECT * FROM `event_tbl`";
                            $query_run = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                    ?>
                        <div class="col-4">
                        <a href="#">
                            <div class="img__gallery">
                               <img src="<?="uploads/".$row['image'];?>" alt="img">
                               <div class="search__icon">
                                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                               </div>
                               
                            </div>
                          <div class="event_name">  <p><?=$row['event_name'];?></p></div>
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