<?php
    include 'database_connection.php';
    $conn = openConnection();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
