<?php

require('config.php');
session_start();

?>

<?php require('header.php'); ?>
    <main class="site-main">
        <section class="section section--banner2">
            <div class="wrap">
                <div class="banner2__text">
                    <h2>Wedding stories</h2>
                    <p><a href="index.php">Home </a> / <span>Wedding stories</span></p>
                </div>
            </div>
        </section>
        <section class="section section--planner">
            <div class="wrap">
                <div class="stories-info">
                    <h3>Our Real Wedding in udaipur</h3>

                </div>
                
            </div>
        </section>
        <section class="section section--img">
            <div class="wrap">
                <div class="row">
                <?php
                            $query = "SELECT * FROM `stories_tbl`";
                            $query_run = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                    ?>
                   
                    <div class="col-4">
                        <div class="img__destini">
                        <a href="substories.php?id=<?=$row['stories_id'];?>"><img src="<?="uploads/".$row['stories_img']?>" alt="img"></a>
                            <p><?=$row['stories_name'];?></p>
                        </div>
                    </div>
                    
                    <?php

                    }
                    ?>
                  
                   
                </div>
            </div>
        </section>
    </main>
    <?php require('footer.php'); ?>