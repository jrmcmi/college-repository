<?php
    require "functions.php";
    check_login();

     if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['username'])) {
        $image_added = false;
        if(!empty($_FILES['image']['name']) && $_FILES['image']['error'] == 0){
            $folder = "uploads/";
            if(!file_exists($folder)){
                mkdir($folder, 0777, true);
            }
            $destination = $folder . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            $image_added = true;
        }

        $username = addslashes($_POST['username']);
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);

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
    <title>Profile</title>
</head>
<body>
    <?php require_once "header.php";?>
    <div class="signup-container">

        <?php if(!empty($_GET['action']) && $_GET['action'] == 'edit'):?>
            <h2>Edit Profile</h2>
                <form method="POST" enctype="multipart/form-data">
                    <img src="<?php echo $_SESSION['info']['image']?>"><br>
                    Image: <input type="file" name="image"><br>
                    <input value="<?php echo $_SESSION['info']['username']?>" type="text" name="username" placeholder="Username" required><br>
                    <input value="<?php echo $_SESSION['info']['email']?>" type="email" name="email" placeholder="Email" required><br>
                    <input value="<?php echo $_SESSION['info']['password']?>" type="password" name="password" placeholder="Password" required><br>
                    <button>Save</button>
                    <a href="profile.php">
                        <button type="button">Cancel</button>
                    </a>
                </form>

        <?php else:?>

            <h2>User Profile</h2><br>
            <div class="profile-container">
                <div>
                    <td><img src="<?php echo $_SESSION['info']['image']?>"></td>
                </div>
                <div>
                <td><?php echo $_SESSION['info']['username']?></td>
                </div>
                <div>
                    <td><?php echo $_SESSION['info']['email']?></td>
                </div>
                <a href="profile.php?action=edit">
                    <button>Edit Profile</button>
                </a>
                <br>

            <h5>Create a post</h5>
            <form method="POST">
                <textarea name="post" rows="8"></textarea><br>

                <button>Post</button>
            </form>

        <?php endif;?>
    </div>

    <?php require "footer.php";?>
</body>
</html>