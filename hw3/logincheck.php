

<?php
session_start();
?>

<?php

$uName="1123340";
$uPwd="12345";

$aName="nuk";
$aPwd="1234";

$userName=$_POST["name"];
$userPwd=$_POST["pwd"];

if($uName==$userName && $uPwd==$userPwd){
    echo "student login success";
    $_SESSION["user"]=1;
    $date=strtotime("+ 10 seconds",time());
    setcookie("name",$userName,$date);
    header("location:userform.php");
}if($aName==$userName && $aPwd==$userPwd){
    echo "admin login success";
    $_SESSION["admin"]=1;
    $date=strtotime("+ 10 seconds",time());
    setcookie("name",$userName,$date);
    header("location:adminform.php");
}else{
    echo "login failed";
    header("refresh:3;url=login.php");
}

?>
