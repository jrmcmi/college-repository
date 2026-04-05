<?php
    include 'connectdb.php';

    if(isset($_POST['register'])) {
        $name = ucwords(trim($_POST['name']));
        $age = $_POST['age'];
        $email = $_POST['email'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $sex = $_POST['sex'];
        $dateRegistered = $_POST['dateRegistered'];

        $insertDataToDatabase = mysqli_query($connectionToDatabase, "INSERT INTO users(name, age, email, dateOfBirth, sex, dateRegistered) VALUES('$name', '$age', '$email', '$dateOfBirth', '$sex' , '$dateRegistered')");

        if($insertDataToDatabase == true) {
            header("Location: view.php");
        }else{
            echo "Data was not inserted. Please check your query.";
        }
    }else{
        echo "Query failed.";
    }
?>