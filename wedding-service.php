<?php

require('config.php');
session_start();

?>

<?php require('header.php'); ?>
    <main class="site-main">
        <section class="section section--banner2">
            <div class="wrap">
                <div class="banner2__text">
                    <h2>Wedding Planning Services</h2>
                    <p><a href="index.php">Home </a> / <span>Wedding Planning Services</span></p>
                </div>
            </div>
        </section>
        <section class="section section--planner">
            <div class="wrap">
                <div class="jaipur-info">
                    <h3>Event Management Company</h3>

                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="about__planner">
                        <p>Even if you have a limited time to make your decisions, We can organize and handle your wedding with creative ideas, the finest possibilities that are most suiting to complete your wedding perfectly. We are the best Event Management Company providing
                            Wedding Planning Service in India.</p>
                        <p> <strong>We take stress of planning you romantic moments: </strong> Wedding planning is not the romantic experience one expects it to be. There are many details to take care of, meddling family and friends might drive you crazy and vendors can
                            be a source of drama.Several recently married couples find that in the final month before the wedding they had been so exhausted that they just wanted the day to be over.This is not how anyone’s planning should be. Bringing on board a professional
                           planner to help and take your workload off your hands definitely will make sense.</p>
                        <p><strong>We are great at choosing vendors for you:</strong> Despite thinking that researching vendors your selves will be the only way to ensure we could make the best supplier decisions, this didn’t work out so swimmingly. Let us plan it out for
                           you, it is our day to day work to handle them and we professionally make judgement for a better option.</p>
                        <p><strong>Wedding planning takes time:</strong> We work days & nights for your big day, it is impossible to fathom how much work is involved and how many details need to be taken care of.</p>
                        <p><strong>We help with costs:</strong> We know what different services cost, and can better spot when a vendor price is exorbitantly high or too good to be true. We know most local wedding vendors, and can help you get the best value for your budget.</p>
                       <p>Plan your wedding with <a href="index.php">Dream Makers Event</a> as we take care of your all wedding functions from beginning to the end with our best wedding planning services.</p>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </section>
        <section class="section section--img">
            <div class="wrap">
                <div class="row">
                <div class="col-4">
                        <div class="img__destini">
                           <a href="udaipur.php"><img src="images/wedding-venue.jpg" alt="venue "></a>
                            <p>Wedding Venues</p>
                        </div>
                    </div>
                <?php
                            $query = "SELECT * FROM `services_tbl`";
                            $query_run = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                    ?>
                    
                    <div class="col-4">
                        <div class="img__destini">
                        <a href="subservices.php?id=<?=$row['service_id'];?>"><img src="<?="uploads/".$row['service_img']?>" alt="img"></a>
                            <p><?=$row['service_name'];?></p>
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