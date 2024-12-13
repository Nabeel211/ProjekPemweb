<?php

include 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];
$role = "user";

if($mysqli->query("INSERT INTO akun (username, password, role) VALUES('$username', '$password', '$role')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:login.php");

?>
