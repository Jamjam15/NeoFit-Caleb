<?php
session_start();
include("connection.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email exists
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Verify password
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id']; // Store user ID in session
            $_SESSION['email'] = $row['email']; // Store email in session
            header("Location: welcome.php"); // Redirect to dashboard
            exit();
        } else {
            echo "<script>alert('Incorrect password!'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('Email not found!'); window.location.href='index.php';</script>";
    }
}
?>
