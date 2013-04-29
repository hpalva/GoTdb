<?php

session_start();

if ($_SESSION["username"] == "") {
    header("Location: got.php");
}
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

<a href="etusivukirjau.php">Frontpage</a>
 <a href="logout.php">Log out</a>
