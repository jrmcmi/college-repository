<style>
    .form{
        width: 300px;
        display: flex;
        flex-direction: column;
    }
</style>
    
<?php include 'header.php'; ?>
    <form class="form" action="insert.php" method="POST" enctype="multipart/form-data">
        <label for="password">Password: </label>
        <input type="text" name="password" autocomplete=off required>

        <label for="password">Repeat Pasword: </label>
        <input type="text" name="password" autocomplete=off required>
        <button>Submit</button>
    </form>
<?php include 'footer.php'; ?>