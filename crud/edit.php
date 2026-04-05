<?php
    include 'connectdb.php';
    require 'header.php';

    $id = $_GET['GetId'];
    
    $retrieveSpecificUser = mysqli_query($connectionToDatabase, "SELECT * FROM users WHERE id='$id'");

    while($row = mysqli_fetch_assoc($retrieveSpecificUser)) {
        $name = $row['name'];
        $age = $row['age']; 
        $email = $row['email'];
        $dateOfBirth = $row['dateOfBirth'];
        $sex = $row['sex'];
        $image = $row['image'];
    }
?>  

<h1>Edit User</h1>
<form action="update.php?GetId=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
    <label for="name">Name: </label>
    <input type="text" name="name" value="<?php echo $name; ?>" autocomplete=off required><br> 

    <label for="age">Age: </label>
    <input type="number" name="age" value="<?php echo $age; ?>"autocomplete=off required><br>

    <label for="email">Email: </label>
    <input type="email" name="email" value="<?php echo $email; ?>" autocomplete=off required><br>

    <label for="date of birth">Date of Birth: </label>
    <input type="date" name="dateOfBirth" value="<?php echo $dateOfBirth; ?>" autocomplete=off required><br>

    <label for="sex">Sex: </label>
    <input type="radio" name="sex" value="Male"><span>Male</span>
    <input type="radio" name="sex" value="Female"><span>Female</span><br>

    <label for="image">Image: </label>
    <input type="file" name="photo" autocomplete=off required><br><br>

    <button type="submit" name="update">Update User</button>
</form>

<?php require 'footer.php'; ?>