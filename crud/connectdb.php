<?php  
    $connectionToDatabase = mysqli_connect("localhost", "root", "", "crud_system");

    if(!$connectionToDatabase) {
        die("Connection Failed" . mysqli_connect_error());
    }
?>