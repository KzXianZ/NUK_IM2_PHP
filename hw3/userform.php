

<?php
session_start();
?>

<h1>Login user</h1>

<?php

if (isset($_SESSION["user"])) {
    echo "<a href='login.php'> logout </a>";
}

?>
