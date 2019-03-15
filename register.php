<?php
session_start();
include_once('Connection.php');
if(isset($_POST["register"]))
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
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
