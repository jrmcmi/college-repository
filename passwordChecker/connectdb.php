<?php  
    $connectionToDatabase = mysqli_connect("localhost", "root", "", "calculator");

    if(!$connectionToDatabase) {
        die("Connection Failed" . mysqli_connect_error());
    }
?>