<linK rel="stylesheet" href="style.css">

<?php 
    include 'connectdb.php';
    include 'header.php';

    $id = $_GET['GetId'];
    
    $retrieveSpecificUser = mysqli_query($connectionToDatabase, "SELECT * FROM users WHERE id='$id'");

    while($row = mysqli_fetch_assoc($retrieveSpecificUser)) {
        $name = $row['name'];
        $age = $row['age']; 
        $email = $row['email'];
        $dateOfBirth = $row['dateOfBirth'];
        $sex = $row['sex']; 
        $dateRegistered = $row['dateRegistered'];
    }
?>

<h1 class="detailedViewTitle">User's Detailed View</h1>
<table class="detailedViewTable">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Sex</th>
        <th>Date Registered</th>
    </thead>

    <tbody>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $age; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $dateOfBirth; ?></td>
            <td><?php echo $sex; ?></td>
            <td><?php echo $dateRegistered; ?></td>
        </tr>
    </tbody>
</table>

<br>

<a href="view.php"><button>Administrator's View</button></a>