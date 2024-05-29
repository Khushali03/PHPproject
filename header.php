<?php

require('config.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deski</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/vendor.bundal.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="site-header position-static sticky-top">
        <div class="wrap header__wrap">
            <div class="site-logo">
                <a href="index.php"><img src="images/logo.png" alt="logo" width="150px"></a>
            </div>
            <ul class="contact-info">
                <li>
                    <div class="icon-call">
                        <i class="fa-solid fa-square-phone"></i>
                    </div>
                </li>
                <li>
                    <span class="title-call">Call us </span>
                    <br>
                    <span>
                        <a href="tel:+917986237890"
                            onclick="ga('send','event','phone call tracking','click to call','982-825-8231',0);">+(91)
                            982 825 8231</a>
                    </span>
                </li>
            </ul>
            <ul class="contact-info">
                <li>
                    <div class="icon-call">
                        <i class="fa-solid fa-square-envelope"></i>
                    </div>
                </li>
                <li>
                    <span class="title-call">Email-us</span>
                    <br>
                    <span>
                        <a href="mailto:dreammaker@gmail.com"> dreammaker@gmail.com </a>
                    </span>
                </li>
            </ul>

            <?php

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
{

    echo"
    
        <div class='top-two-right '>
            <div class='email'>
                <a href='profile.php'><b>$_SESSION[email]</b>&nbsp;&nbsp;<span class='fas fa-user-circle'></span></a>
            </div>
            <div class='logout'>
                <a href='logout.php' class='submit'>logout</a>
            </div>
        </div>
     
    ";
}
else
{
    echo"
    <div class='top-two-right'>
        <div class='login'>
            <a href='login.php' class='submit'>login</a>
        </div>
        <div class='login'>
            <a href='regi.php' class='submit'>Registration</a>
        </div>
    </div>
    ";
}

?>
        </div>
        <nav class="navbar">
            <ul>
                <li>
                    <a href="index.php"><i class="fa-sharp fa-solid fa-house-chimney"></i> HOME</a>
                </li>
                <li><a href="udaipur.php"><i class="fa-regular fa-paper-plane"></i>DESTINATIONS</a>
                </li>
                <li><a href="wedding-service.php"><i class="fa-sharp fa-solid fa-server"></i>WEDDING SERVICES</a>
                    <ul class="sub-menu">
                        <li><a href="udaipur.php">VENUE SELECTION</a></li>
                        <?php
                            $query = "SELECT * FROM `services_tbl`";
                            $query_run = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                    ?>

                        <li><a href="subservices.php?id=<?=$row['service_id'];?>"
                                class="upercase"><?=$row['service_name'];?></a></li>
                        <?php

}
?>
                    </ul>
                </li>

                <li><a href="event.php"><i class="fa-sharp fa-solid fa-calendar-days"></i>CORPORATE EVENTS</a></li>
                <li><a href="wedding-stories.php"><i class="fa-solid fa-clock-rotate-left"></i>WEDDING STORIES </a></li>
                <li><a href="gallery.php"><i class="fa-regular fa-image"></i>GALLERY</a></li>
                <li><a href="about_us.php"><i class="fa-solid fa-circle-user"></i>ABOUT US</a></li>
                <li><a href="contact-us.php"><i class="fa-solid fa-envelope"></i>CONATC US</a></li>
                <?php
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                { ?>
                <li><a href="booking.php"><i class="fa-solid fa-envelope"></i>My-Booking</a></li>
                <?php

                }
?>
            </ul>
        </nav>
    </header>