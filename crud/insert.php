<?php
    include 'connectdb.php';

    if(isset($_POST['register'])) {
        $name = ucwords(trim($_POST['name']));
        $age = $_POST['age'];
        $email = $_POST['email'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $sex = $_POST['sex'];

        $image = $_FILES['photo']['name'];
        $tempLocation = $_FILES['photo']['tmp_name'];
        $fileDestination = 'images/' . $image;

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