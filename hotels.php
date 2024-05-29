<?php

require('config.php');
session_start();

if(isset($_POST['book']))
{
    $fromdate = $_POST['fromdate'];
    $todate = $_POST['todate'];
    $venue = $_POST['venue'];
    $email = $_SESSION['email'];
    $status=0;
    $id = $_GET['id'];
    $query = "INSERT INTO booking_tbl(cust_email,dest_id,from_date,to_date,book_venue,status) VALUES('$email','$id','$fromdate','$todate','$venue','$status')";
    if(mysqli_query($conn,$query))
            {
                echo"
                <script>
                    alert('booking successfull');
                    window.location.href='index.php';
                </script>
                ";
            }
            else
            {
                echo"
                <script>
                    alert('can not return query');
                    window.location.href='index.php';
                </script>
                ";
            }
}

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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/vendor.bundal.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/all.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>

    <header class="site-header position-static">
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
                    <a href="tel:+917984392061" onclick="ga('send','event','phone call tracking','click to call','798-439-2061',0);">+(91) 798 439 2061</a>
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
                    <a href="mailto:anjalisoni2061@gmail.com"> anjalisoni2061@gmail.com  </a>
                    </span>
                </li>
            </ul>

            <?php

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
{

    echo"
    
        <div class='top-two-right'>
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
            <a href='regi.php' class='submit'>registeraton</a>
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
                        <?php
                            $query = "SELECT * FROM `services_tbl`";
                            $query_run = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                    ?>
                        <li><a href="udaipur.php">VENUE SELECTION</a></li>
                        <li><a href="subservices.php?id=<?=$row['service_id'];?>" class="upercase"><?=$row['service_name'];?></a></li>
                        <?php

}
?>
                    </ul>
                </li>

                <li><a href="#"><i class="fa-sharp fa-solid fa-calendar-days"></i>CORPORATE EVENTS</a></li>
                <li><a href="#"><i class="fa-solid fa-clock-rotate-left"></i>WEDDING STORIES </a></li>
                <li><a href="gallery.php"><i class="fa-regular fa-image"></i>GALLERY</a></li>
                <li><a href="#"><i class="fa-solid fa-circle-user"></i>ABOUT US</a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"></i>CONATC US</a></li>
                
            </ul>
        </nav>
    </header>
<?php
                            $id=$_GET['id'];
                            $query = "SELECT * FROM `dest_tbl` WHERE dest_id='$id'";
                            $query_run = mysqli_query($conn,$query);

                            $row = mysqli_fetch_array($query_run);

?>
    <main class="site-main">
        <section class="section section--banner2">
            <div class="wrap">
                <div class="banner2__text">
                    <h2><?=$row['dest_name'];?>, Udaipur</h2>
                    <p><a href="index.php">Home </a>/ <a href="udaipur.php">Wedding Venues in Udaipur</a>/<span><?=$row['dest_name'];?></span></p>
                </div>
            </div>
        </section>
        <section class="section section--planner">
            <div class="wrap">
                <div class="jaipur-info">
                    <h3>Weddings at <?=$row['dest_name'];?>, Udaipur</h3>

                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="about__planner">
                            <p><?=$row['dest_detail'];?></p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="wedding-form">
                            <div class="callback-from-header">
                                <h3>Booking here</h3>
                              
                            </div>
                            <div>

                                <form action="" method="POST" enctype="multipart/form-data" >
                                    <div class="info-name">
                                        <tr>
                                            <td>From-date:
                                                <input type="date" name="fromdate" placeholder="Booking-Date:" require>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>To-Date:
                                                <input type="date" name="todate" placeholder="Booking-Date:" require>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Select Venue
                                                <select name="venue" require>
                                                    <option>---select Venue---</option>
                                                    <option>Heritage-venue</option>
                                                    <option>Five-star-venue </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <?php
                                            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                                                { ?>
                                            <td>
                                                <div class="booking">
                                                <input type="submit" name="book" value="Book" >
                                                </div>
                                                
                                            </td>
                                                    <?php
                                                    }
                                                else
                                                                {
                                                    ?>
                                            <td>
                                                <div class="booking">                
                                                <a href='login.php'>Login For Book</a>
                                                </div>
                                            
                                                <?php
                                                            }
                                                    ?>
                                            </td>
                                        </tr>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <section class="section section--gallery ">
            <div class="wrap">
                <div class="moment">
                    <h2>Wedding Moments</h2>
                </div>
                <div class="row">
                <?php
                            $query = "SELECT * FROM `hotel_tbl` WHERE dest_id='$id'";
                            $query_run = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                    ?>
                    <div class="col-4">
                        <a href="#">
                            <div class="img__gallery">
                            <img src="<?="uploads/".$row['hotel_img'];?>" alt="img">
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

    <footer class="site-footer">
        <div class="wrap">
            <div class="row">
                <div class="col-2">
                    <a href="#"><img src="images/logo-footer.png" alt="Logo"></a>
                    <h5>FOLLOW US ON</h5>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <div>
                        <h5>ADDRESS</h5>
                        <p>
                            <strong> HEAD OFFICE:</strong> <br>Pentagon Palms, New Navratan Road, Opposite Kidney Care Hospital, Bhuwana, Udaipur 313001(Raj) INDIA
                        </p>
                    </div>
                </div>
                <div class="col-3">
                    <h5>QUICK CONTACT</h5>
                    <ul>
                        <li><a href="#">info@dreammakersevent.com</a></li>
                        <li><a href="#">dreammakersudr@gmail.com</a></li>
                        <li><a href="#">+(91) 982 825 8231</a></li>
                        <li><a href="#">+(91) 882 997 0000</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <h5>QUICK LINKS</h5>
                    <ul>
                        <li><a href="#">Wedding Planner in Udaipur</a></li>
                        <li><a href="#">Wedding Destinations in India</a></li>
                        <li><a href="#">Event Management Company in Udaipur</a></li>
                        <li><a href="#">Destination Wedding in Udaipur</a></li>
                        <li><a href="#">Cost of Wedding in Udaipur</a></li>
                        <li><a href="#">Royal Wedding Planner</a></li>
                        <li><a href="#">Royal Wedding in Udaipur</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/vendor.bundle.js"></script>
    <script src="js/script.js"></script>
</body>

</html>