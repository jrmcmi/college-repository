<?php
    require "functions.php";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = addslashes($_POST['username']);
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $date = date('Y-m-d H:i:s');

        $insertQuery = "INSERT INTO users (username, email, password, date) VALUES ('$username', '$email', '$password', '$date')";

        $result = mysqli_query($connectionToDatabase, $insertQuery);

        header("Location: login.php");
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Signup on Instagram</title>
</head>
<body>
    <?php require_once "header.php";?>
    <div class="signup-container">
        <h2>Sign up</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button>Sign Up</button>
        </form>
    </div>
    <?php require "footer.php";?>
</body>
</html>