<?php
    require "functions.php";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);

        $insertQuery = "select * from users where email = '$email' && password = '$password' limit 1";

        $result = mysqli_query($connectionToDatabase, $insertQuery);

        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['info'] = $row;
            header("Location: profile.php");
            die;
        } else {
            $error = "Wrong email or password!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Login on Instagram</title>
</head>
<body>
    <?php require_once "header.php";?>
    <div class="signup-container">
        <?php
            if(!empty($error)){
                echo "<div>".$error."</div>";
            }
        ?>
        <h2>Login up</h2>
        <form method="POST">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>

            <button>Login Up</button>
        </form>
    </div>
    <?php require "footer.php";?>
</body>
</html>