<?php
    include 'connectdb.php';

    if(isset($_POST['register'])) {
        $password = $_POST['password'];
        $repeatPassword = $_POST['repeatPassword'];

        $insertDataToDatabase = mysqli_query($connectionToDatabase, "INSERT INTO users(name, age, email, dateOfBirth, sex, image) VALUES('$name', '$age', '$email', '$dateOfBirth', '$sex', '$image')");

        if(move_uploaded_file($tempLocation, $fileDestination)) {
            header("Location: view.php");
        }else{
            echo "Data was not inserted. Please check your query.";
        }
    }else{
        echo "Query failed.";
    }
?>