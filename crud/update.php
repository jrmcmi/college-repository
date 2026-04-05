<?php  
    include 'connectdb.php';

    if(isset($_POST['update'])) {
        $id = $_GET['GetId'];
        $name = ucwords(trim($_POST['name']));
        $age = $_POST['age'];
        $email = $_POST['email'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $sex = $_POST['sex'];

        $image = $_FILES['photo']['name'];
        $tempLocation = $_FILES['photo']['tmp_name'];  
        $fileDestination = 'images/' . $image;

        $editSpecificUser = mysqli_query($connectionToDatabase, "UPDATE users SET name='$name', age='$age', email='$email', dateOfBirth='$dateOfBirth', sex='$sex', image='$image' WHERE id='$id'");

        if(move_uploaded_file($tempLocation, $fileDestination)) {
            header("Location: view.php");
        }else{
            echo "Data was not updated. Please check your query.";
        }
    }else{
        echo "Query failed.";
    }

?>
