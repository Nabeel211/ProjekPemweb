<?php

include 'koneksi.php';

// Validasi input
$fname = $_POST["fname"] ?? '';
$lname = $_POST["lname"] ?? '';
$phone = $_POST["phone"] ?? '';
$email = $_POST["email"] ?? '';
$expiry = $_POST["expiry"] ?? '';
$training_id = $_POST["training_id"] ?? 0;

if (!empty($fname) && !empty($lname) && !empty($phone) && !empty($email) && !empty($training_id)) {
    // Query untuk menyimpan data
    $stmt = $mysqli->prepare("INSERT INTO payment (first_name, last_name, phone_number, email_address, expiration_date, training_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $fname, $lname, $phone, $email, $expiry, $training_id);

    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $mysqli->error;
    }

    $stmt->close();
} else {
    echo "Please complete all required fields.";
}

// Redirect setelah beberapa detik
header("Refresh: 3; url=index.php");

?>
