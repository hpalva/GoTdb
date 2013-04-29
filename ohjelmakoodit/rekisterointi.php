<?php

session_start();

include("yhteys.php");
include("kysely.php");
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

<p>Register here!</p><br>

<form action="lisays.php" method="post">
Username: <input type="text" name="Username"><br>
Password: <input type="password" name="Password"><br>
<input type="submit" value="Register"> 
</form>

<?php
include("ala.php");
?>
