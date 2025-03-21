<?php

echo "報名成功" . "<BR/>";
$uName=$_POST["uName"];
$uEmail=$_POST["uEmail"];
$uPhone=$_POST["uPhone"];

echo "Your name is:" . $uName . "<BR/>";
echo "Your email is:" . $uEmail . "<BR/>";
echo "Your phone is:" . $uPhone . "<BR/>";

?>

<BR/>
<a href="index.php">返回主頁面</a>