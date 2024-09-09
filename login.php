<?php
    include 'database_connection.php';
    $conn = openConnection();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "Login successful!";
            Header("Location: list-of-tasks.html");
            die();
        } else {
            echo "Login failed!";
            die();
        }
    }
?>