<?php

if (session_id() == '' || !isset($_SESSION)) {
    session_start();
}

include 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["pwd"];

// Query untuk mendapatkan data akun berdasarkan username dan password
$result = $mysqli->prepare('SELECT id, username, password, role FROM akun WHERE username = ? AND password = ?');
$result->bind_param('ss', $username, $password);
$result->execute();
$result->store_result();

// Jika ditemukan data yang cocok
if ($result->num_rows > 0) {
    $result->bind_result($id, $db_username, $db_password, $role);
    $result->fetch();

    // Set session berdasarkan data akun
    $_SESSION['username'] = $db_username;
    $_SESSION['role'] = $role;
    $_SESSION['id'] = $id;

    // Redirect berdasarkan role
    if ($role === 'admin') {
        header("Location: admin-home.php");
    } elseif ($role === 'user') {
        header("Location: index.php");
    } else {
        echo '<h1>Role tidak valid!</h1>';
        header("Refresh: 3; url=index.php");
    }
} else {
    // Jika login gagal
    echo '<h1>Invalid Login! Redirecting...</h1>';
    header("Refresh: 3; url=index.php");
}

$result->close();
$mysqli->close();

?>
