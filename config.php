<?php

$conn = mysqli_connect("localhost","root","","wem");

    if(mysqli_connect_error()){
        echo "<script>alert('can not the database');</script>";
        exit();
    }

?>