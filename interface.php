<?php
include_once('login.php');
if ( isset($_SESSION['username'] )) {
    $username = $_SESSION['username'];
}
else{
    header('Location: Index.php');
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user</title>

</head>
<body>
<header>
    <section class="echo"> <!-- This class name will enable the styling of output after logging in -->
        <h4>You are logged in as <?php echo $username ?></h4>
    </section>
<section class="right">
    <form id = "logout"  method="post" action="logout.php">
        <button type="submit" value="Logout" name="logOutButton" class="btn"> Log out <br>
    </form>
</section>
</header>



</body>
</html>