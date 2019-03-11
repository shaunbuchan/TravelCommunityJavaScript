<?php
session_start();
if ($_POST['loginButton']) {
    include_once('Connection.php');
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);
    // $pass= md5($password);

    $query = "SELECT *  FROM Host where username = '$username' AND password ='$password' LIMIT 1 ";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        $_SESSION['username'] = $username;
        header('Location: interface.php');
    } else {
        echo "<b><i>Incorrect credentials</i><b>";
    }
}
?>