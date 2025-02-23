<?php
include "../includes/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password, login_type) VALUES (?, ?, ?, 'local')");
    $stmt->bind_param("sss", $name, $email, $password);
    
    if ($stmt->execute()) {
        echo "Registration successful!";
        header("Location: ../index.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
