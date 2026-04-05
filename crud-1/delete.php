<?php
    include 'connectdb.php';

    if(isset($_GET['Delete'])) {
        $id = $_GET['Delete'];

        $deleteSpecificUser = mysqli_query($connectionToDatabase, "DELETE FROM users WHERE id='$id'");

        if($deleteSpecificUser) {
            header("Location: view.php");
        }else{
            echo "Unsuccessfully deleted. Please check your query.";
        }
    }else{
        echo "Query failed.";
    }
?>