<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];

    if ($row['role'] == 'admin') {
        header("Location: adminDashboard.php");
    } else if ($row['role'] == 'user') {
        header("Location: userDashboard.php");
    }
} else {
    echo "Login gagal";
}

$conn->close();
?>
