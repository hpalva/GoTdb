<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>

<h1>A Song of Ice and Fire</h1>
<hr>

<?php
include("yhteys.php");
include("kysely.php");

$username = $_POST["Username"];
$password = $_POST["Password"];
$nimi     = "SELECT username, password FROM userid WHERE username=?";
kysely($nimi, array(
    $username
));
$tulos = $kysely->fetch();
if (empty($tulos)) {
    header("Location: failusername.php");
    die();
} else {
    if ($tulos["password"] == $password) {
        $_SESSION["username"] = $username;
        header("Location: etusivukirjau.php");
    } else {
        header("Location: faillogin.php");
    }
}

include("ala.php");
?> 
