<link rel="stylesheet" href="style.css">
    
<?php include 'header.php'; ?>

<h1 class="registerTitle">Asian College Run for A Cause</h1>
<div class="outerForm">
    <div class="innerForm">
        <form class="form" action="insert.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name: </label>
            <input type="text" name="name" autocomplete=off required><br> 

            <label for="age">Age: </label>
            <input type="number" name="age" autocomplete=off required><br>

            <label for="email">Email: </label>
            <input type="email" name="email" autocomplete=off required><br>

            <label for="date of birth">Date of Birth: </label>
            <input type="date" name="dateOfBirth" autocomplete=off required><br>
            <div class="sexOption">
                <label for="sex">Sex: </label>
                <input type="radio" name="sex" value="Male"><span>Male</span>
                <input type="radio" name="sex" value="Female"><span>Female</span><br>
            </div>
            <label for="image">Image: </label>
            <input type="file" name="photo" autocomplete=off required><br><br>

            <button type="submit" name="register">Register User</button>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>