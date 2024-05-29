<?php

require('connection.php');
session_start();
session_regenerate_id(true);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/adminpanel.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
    <?php require('adminpanel.php'); ?>
    <div class="main-content">
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <?php
                        $data_cust = "SELECT * FROM cust_tbl";
                        $data_cust_run = mysqli_query($conn, $data_cust);
                        if ($cust_total = mysqli_num_rows($data_cust_run)) {
                            echo '<h1>' . $cust_total . '</h1>';
                        } else {
                            echo '<h1>0</h1>';
                        }

                        ?>

                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <?php
                        $data_cust = "SELECT * FROM dest_tbl";
                        $data_cust_run = mysqli_query($conn, $data_cust);
                        if ($cust_total = mysqli_num_rows($data_cust_run)) {
                            echo '<h1>' . $cust_total . '</h1>';
                        } else {
                            echo '<h1>0</h1>';
                        }

                        ?>
                        <span>Destination</span>
                    </div>
                    <div>
                        <span class="las la-wallet"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <?php
                        $data_cust = "SELECT * FROM hotel_tbl";
                        $data_cust_run = mysqli_query($conn, $data_cust);
                        if ($cust_total = mysqli_num_rows($data_cust_run)) {
                            echo '<h1>' . $cust_total . '</h1>';
                        } else {
                            echo '<h1>0</h1>';
                        }

                        ?>
                        <span>hotel</span>
                    </div>
                    <div>
                        <span class="las la-wallet"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <?php
                        $data_cust = "SELECT * FROM services_tbl";
                        $data_cust_run = mysqli_query($conn, $data_cust);
                        if ($cust_total = mysqli_num_rows($data_cust_run)) {
                            echo '<h1>' . $cust_total . '</h1>';
                        } else {
                            echo '<h1>0</h1>';
                        }

                        ?>
                        <span>Services</span>
                    </div>
                    <div>
                        <span class="las la-wallet"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <?php
                        $data_cust = "SELECT * FROM event_tbl";
                        $data_cust_run = mysqli_query($conn, $data_cust);
                        if ($cust_total = mysqli_num_rows($data_cust_run)) {
                            echo '<h1>' . $cust_total . '</h1>';
                        } else {
                            echo '<h1>0</h1>';
                        }

                        ?>
                        <span>Event</span>
                    </div>
                    <div>
                        <span class="las la-receipt"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <?php
                        $data_cust = "SELECT * FROM stories_tbl";
                        $data_cust_run = mysqli_query($conn, $data_cust);
                        if ($cust_total = mysqli_num_rows($data_cust_run)) {
                            echo '<h1>' . $cust_total . '</h1>';
                        } else {
                            echo '<h1>0</h1>';
                        }

                        ?>
                        <span>Stories</span>
                    </div>
                    <div>
                        <span class="las la-receipt"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <?php
                        $data_cust = "SELECT * FROM gallery_tbl";
                        $data_cust_run = mysqli_query($conn, $data_cust);
                        if ($cust_total = mysqli_num_rows($data_cust_run)) {
                            echo '<h1>' . $cust_total . '</h1>';
                        } else {
                            echo '<h1>0</h1>';
                        }

                        ?>
                        <span>Gallery</span>
                    </div>
                    <div>
                        <span class="las la-receipt"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                    <?php
                        $data_cust = "SELECT * FROM booking_tbl";
                        $data_cust_run = mysqli_query($conn, $data_cust);
                        if ($cust_total = mysqli_num_rows($data_cust_run)) {
                            echo '<h1>' . $cust_total . '</h1>';
                        } else {
                            echo '<h1>0</h1>';
                        }

                        ?>
                        <span>Booking</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>
            </div>


        </main>

    </div>
    <script src="../js/sidebar.js"></script>
</body>

</html>