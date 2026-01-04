<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the view
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $address = trim($_POST['address'] ?? '');
    $role = $_POST['role'] ?? ''; // 'seller' or 'customer'

    // Simple validation for your commit history
    if ($password !== $confirm_password) {
        $_SESSION['register_error'] = "Passwords do not match!";
        header("Location: ../html/register.php");
        exit();
    }

    // Success simulation: In a real app, you would insert into DB here
    $_SESSION['register_success'] = "Registration successful for " . htmlspecialchars($name) . " as a " . $role;
    
    // Redirect to login page after successful registration
    header("Location: ../html/login.php?signup=success");
    exit();
}
?>