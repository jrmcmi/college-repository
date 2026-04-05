<?php  
session_start();
    $connectionToDatabase = mysqli_connect("localhost", "root", "rootroot", "instagram");

    if(!$connectionToDatabase) {
        die("Connection Failed" . mysqli_connect_error());
    }
?>