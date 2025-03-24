

<?php
session_start();
?>

<?php

if (isset($_SESSION["admin"])) {
    echo "hello admin"."<br>";
    echo "<a href='login.php'> logout </a>";
}

?>
