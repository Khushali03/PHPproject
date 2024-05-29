<?php

require('config.php');
session_start();

?>



<?php require('header.php'); ?>
    <main class="site-main">
        <section class="section section--banner2">
            <div class="wrap">
                <div class="banner2__text">
                    <h2>Wedding Venues in Udaipur</h2>
                    <p><a href="index.php">Home </a>/ <a href="udaipur.php">Destination Wedding planner </a> / <span>Udaipur</span></p>
                </div>
            </div>
        </section>
        <section class="section section--planner">
            <div class="wrap">
                <div class="jaipur-info">
                    <h3>Destination wedding in Udaipur</h3>

                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="about__planner">
                        <p>Udaipur is a city resting in the shadows of the Aravalli range in the southern portion of Rajasthan and very close to two other primary states of the subcontinent. Udaipur is the land of royalty as it is covered with multiple forts and palaces.
                           A royal <strong>Destination wedding in Udaipur</strong>r is a dream for many people as it is the most desirable and luxurious place in India to get married. People from various places across the globe look for Udaipur as their wedding destination.</p>
                        <p>There are numerous options available to host a <strong>Royal Wedding in Udaipur</strong>. The geography of the location makes everyone feel like it’s a hill station with many beautiful lakes like Pichola, Fateh Sagar, Udai Sagar, Doodh Talai and
                           others which intensifies the romanticism of the location.</p>
                        <p>You can experience the traditional Rajasthan in Udaipur by visiting the old city and palaces. Udaipur remains on every tourist's list which makes it an ideal spot for the best destination wedding in India. You and your partner won’t have to look
                           for a different honeymoon location or for a pre-wedding photoshoot. The city has well-established connectivity via rail, road, and air.</p>
                        <p>Dream Makers - Renowned<a href="index.php"> Wedding Planner in Udaipur</a> recommends this place because of its historically beautiful and opulent palaces and availability of well-known luxurious hotel chains. The wedding locations come within moderate to high budget
                           events while accommodating a large number of guests. The overall atmosphere of the city is full of greenery and low pollution levels. We’ve made a list of the budget wedding venues in Udaipur, you can choose a suitable venue for a wedding
                           in Udaipur.</p>

                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </section>
        <section class="section section--img">
            <div class="wrap">
                <div class="row">
                <?php
                            $query = "SELECT * FROM `dest_tbl`";
                            $query_run = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                    ?>
                    <div class="col-4">
                        <div class="img__destini">
                           <a href="hotels.php?id=<?=$row['dest_id'];?>"><img src="<?="uploads/".$row['dest_img']?>" alt="img"></a>
                            <p><?=$row['dest_name'];?> &nbsp;&nbsp;₹<?=$row['dest_price'];?><sup>*</sup></p>
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