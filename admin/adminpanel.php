<?php

require('connection.php');
if(!isset($_SESSION['adminloginid']))
{
    header("location:adminlogin.php");
}
if(isset($_POST['logout']))
{
    session_destroy();
    header("location:adminlogin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/adminpanel.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
<?php
       $path = $_SERVER['REQUEST_URI'];
       $path = explode('/',$path);
       $path = end($path);
?>
<input type="checkbox" id="nav-toggle">
<div class="sidebar sticky-top">
    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span><span class="panel">Admin Panel</span></h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li <?php if($path == 'dashboard.php') { echo "class='active'" ; } ?> >
                <a href="dashboard.php"><span class="las la-igloo"></span>
                <span>Dashboard</span></a>
            </li>
            <li <?php if($path == 'customer.php') { echo "class='active'" ; } ?> >
                <a href="customer.php"><span class="las la-users"></span>
                <span>Cusomers</span></a>
            </li>
            <li <?php if($path == 'destination.php') { echo "class='active'" ; } ?> >
                <a href="destination.php"><span class="las la-wallet"></span>
                <span>Destination</span></a>
            </li>
            <li <?php if($path == 'hotel.php') { echo "class='active'" ; } ?> >
                <a href="hotel.php"><span class="las la-wallet"></span>
                <span>Hotels</span></a>
            </li>
            <li <?php if($path == 'service.php') { echo "class='active'" ; } ?> >
                <a href="service.php"><span class="las la-wallet"></span>
                <span>Services</span></a>
            </li>
            <li <?php if($path == 'subservice.php') { echo "class='active'" ; } ?> >
                <a href="subservice.php"><span class="las la-wallet"></span>
                <span>Sub-Services</span></a>
            </li>
            <li <?php if($path == 'event.php') { echo "class='active'" ; } ?> >
                <a href="event.php"><span class="las la-receipt"></span>
                <span>Event</span></a>
            </li>
            <li <?php if($path == 'stories.php') { echo "class='active'" ; } ?> >
                <a href="stories.php"><span class="las la-receipt"></span>
                <span>Stories</span></a>
            </li>
            <li <?php if($path == 'substories.php') { echo "class='active'" ; } ?> >
                <a href="substories.php"><span class="las la-wallet"></span>
                <span>Sub-Stories</span></a>
            </li>
            <li <?php if($path == 'gallery.php') { echo "class='active'" ; } ?> >
                <a href="gallery.php"><span class="las la-receipt"></span>
                <span>Gallary</span></a>
            </li>
            <li <?php if($path == 'booking.php') { echo "class='active'" ; } ?>>
                <a href="booking.php"><span class="las la-shopping-bag"></span>
                <span>Booking</span></a>
            </li>
        </ul>
    </div>
</div>
<div class="main-content sticky-top">
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="las la-bars">

                </span>
            </label>
            
        </h2>
        <div class="search-wrapper">
            <h4>WELCOME TO ADMIN PANEL - <?php echo $_SESSION['adminloginid'] ?></h4>
        </div>
        <div class="user-wrapper">
            
            <h4>
            <small>
                <form method="POST"><button name="logout">LOGOUT</button></form></small>
            </h4>
        </div>
    </header>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>