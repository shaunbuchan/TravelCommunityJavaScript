<?php
session_start();
include_once('Connection.php');
$username = strip_tags($_POST['username']);
$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);
// $pass= md5($password);

$query = "INSERT INTO Host(username, email, password) 
          VALUES('$username', '$email', '$password')";
$result = mysqli_query($conn, $query);

if ($result) {
    $_SESSION['username'] = $username;
    header('Location: interface.php');
} else {
    echo "Failed to register";
}
?>
