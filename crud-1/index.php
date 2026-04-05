<link rel="stylesheet" href="style.css">
    
<?php include 'header.php'; ?>
<div class="container">
    <div class="sidepanel">
        <h1 class="registerTitle">Asian College Run for A Cause</h1>
    </div>
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

                <label for="date registered">Date Registered: </label>
                <input type="date" name="dateRegistered" autocomplete=off required><br>

                <button type="submit" name="register">Register User</button>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>