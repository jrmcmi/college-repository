<?php  
    include 'connectdb.php';

    if(isset($_POST['update'])) {
        $id = $_GET['GetId'];
        $name = ucwords(trim($_POST['name']));
        $age = $_POST['age'];
        $email = $_POST['email'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $sex = $_POST['sex'];
        $dateRegistered = $_POST['dateRegistered'];

        $editSpecificUser = mysqli_query($connectionToDatabase, "UPDATE users SET name='$name', age='$age', email='$email', dateOfBirth='$dateOfBirth', sex='$sex', dateRegistered='$dateRegistered' WHERE id='$id'");

        if($editSpecificUser == true) {
            header("Location: view.php");
        }else{
            echo "Data was not updated. Please check your query.";
        }
    }else{
        echo "Query failed.";
    }
?>