<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST['role'];
    // For now, we redirect to login to simulate a successful save
    header("Location: ../html/login.php?signup=success");
    exit();
}
?>