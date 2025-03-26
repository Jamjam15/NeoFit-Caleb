<?php 
include("connection.php");

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if ($count_email == 0) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$hash')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: welcome.php");
            exit();
        }
    } else {
        echo '<script>
            alert("Email already exists!!");
            window.location.href="index copy.php";
        </script>';
    }
}
?>
