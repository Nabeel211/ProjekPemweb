<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'koneksi.php';

$username = $_POST["username"];
$oldpass = $_POST["oldpass"];
$pwd = $_POST["pwd"];


if($username!=""){
  $result = $mysqli->query('UPDATE akun SET username ="'. $username .'" WHERE id ='.$_SESSION['id']);
  if($result){
  }
}

//$result = $mysqli->query('Select password from users WHERE id ='.$_SESSION['id']);

//$obj = $result->fetch_object();

if(/*$opwd === $obj->password &&*/ $pwd!=""){
    $query = $mysqli->query('UPDATE akun SET password ="'. $pwd .'" WHERE id ='.$_SESSION['id']);
    if($query){
    }
  }
  
  //else {
  //  echo 'Wrong Password. Please try again. <a href="account.php">Go Back</a>';
  //}

  session_unset();
  session_destroy();

  header ("Location:login.php")


?>
