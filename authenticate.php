<?php
    include('dbcon.php');
?>

<?php
    session_start();

    if( !isset($_POST['username'], $_POST['password'])) {
        exit("Please fill both the username and password fields");
    }

    if($stmt = $conn->prepare('SELECT `id`, `password` FROM accounts WHERE username = ?')) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0) {
            $stmt->bind_result($id, $passwordDb);
            $stmt->fetch();
            if(password_verify($_POST['password'], $passwordDb)) {
                session_regenerate_id();
                $_SESSION['loggedin'] = true;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $id;
                header('Location: home.php');
            } else {
                echo "Invalid username or password";
            }
        } else {
            echo "Invalid username or password";
        }
        $stmt->close();
    } else {
        echo "Database error";
    }
?>
