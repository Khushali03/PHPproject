<?php

require('config.php');
session_start();

?>

<?php require('header.php'); ?>
    <main class="site-main">
        <section class="section section--banner2">
            <div class="wrap">
                <div class="banner2__text">
                    <h2>Wedding Destinations</h2>
                    <p><a href="index.php">Home </a>/ <a href="domestic.php"> Wedding Destination</a></p>
                </div>
            </div>
        </section>
        <section class="section section--planner">
            <div class="wrap">
                <div class="jaipur-info">
                    <h3>Destination Wedding in India</h3>

                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="about__planner">
                         <p>Wedding is a significant event in people’s lives but wedding tasks aren’t always fun for them. We help them manage and planning their wedding so they can enjoy the romantic experience and ensure that their weddings are well-organized.</p>
                         <p>We take stress of planning you romantic moments: Wedding planning is not the romantic experience one expects it to be. There are many details to take care of, meddling family and friends might drive you crazy and vendors can be a source of drama.Several
                            recently married couples find that in the final month before the wedding they had been so exhausted that they just wanted the day to be over.This is not how anyone’s planning should be. Bringing on board a professional planner to help and
                            take your workload off your hands definitely will make sense.</p>
                         <p>We are great at choosing vendors for you: Despite thinking that researching vendors your selves will be the only way to ensure we could make the best supplier decisions, this didn’t work out so swimmingly. Let us plan it out for you, it is our
                            day to day work to handle them and we professionally make judgement for a better option.</p>
                         <p>Wedding planning takes time: We work days & nights for your big day, it is impossible to fathom how much work is involved and how many details need to be taken care of.</p>
                         <p><strong>We are best for a smoother, less stressful and more romantic wedding planning experience.</strong></p>


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
                            <a href="domestic.php"><img src="images/domestic.jpg" alt="domestic"></a>
                            <p>Domestic Wedding Destination</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="img__destini">
                           <a href="international.php"><img src="images/international.jpg" alt="international"></a>
                            <p>International Wedding Destination</p>
                        </div>
                    </div>
                 </div>
            </div>
        </section>
    </main>
    <?php require('footer.php'); ?>