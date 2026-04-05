<link rel="stylesheet" href="style.css">
<?php
    include 'connectdb.php';
    require 'header.php';

    $retrieveAllDataFromDatabase = mysqli_query($connectionToDatabase, "SELECT * FROM users");
?>

<h1 class="viewTitle">View User's Data</h1>
<table class="viewTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Sex</th>
            <th>Image</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>

    <?php 
        while($row = mysqli_fetch_assoc($retrieveAllDataFromDatabase)) {
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age']; 
            $email = $row['email'];
            $dateOfBirth = $row['dateOfBirth'];
            $sex = $row['sex'];
            $image = $row['image'];
    ?>

    <tbody>
        <tr>
            <td><a href="detailed_view.php?GetId=<?php echo $id; ?>"><button><?php echo $id; ?></button></a></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $age; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $dateOfBirth; ?></td>
            <td><?php echo $sex; ?></td>
            <td><img src="images/<?php echo $image; ?>"></td>
            <td><a href="edit.php?GetId=<?php echo $id; ?>"><button>Edit</button></a></td>
            <td><a href="delete.php?Delete=<?php echo $id; ?>"><button>Delete</button></a></td>
        </tr>
    </tbody>

<?php } ?>
</table>

<br>
<a href="index.php"><button>Register New User</button></a>

<?php require 'footer.php'; ?>
