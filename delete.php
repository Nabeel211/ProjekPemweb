<?php
session_start();
include('koneksi.php');

// Validasi input ID untuk mencegah SQL Injection
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Gunakan prepared statement untuk query
    $stmt = $mysqli->prepare("DELETE FROM structure WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect ke halaman admin setelah berhasil menghapus
        header("Location: admin-struktur.php");
    } else {
        echo "Error: " . $mysqli->error;
    }

    $stmt->close();
} else {
    echo "Invalid ID.";
}

$mysqli->close();
?>
