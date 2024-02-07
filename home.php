<?php 
    session_start();

    if(!isset($_SESSION['loggedin'])) {
        header('Location: login.html');
        exit;
    }
?>



<!DOCTYPE html>
<html lang="en">
<body>
    <p>Hello User</p>
    <a href="logout.php">Logout</a>
</body>
</html>