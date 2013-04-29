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
<p>Welcome! If you are confused and need to figure something out concerning the books of "A Song of Ice and Fire", you have come to the right place!</p>
<p>Please sign in:</p>

<form action="kirjaudu.php" method="post">
Username: <input type="text" name="Username"><br>
Password: <input type="password" name="Password"><br>
<input type="submit" value="Log in">  
</form>  

<p>Are you new? Register!</p>

<form action="rekisterointi.php" method="post">
<input type="submit" value="Register">
</form> 

<?php
include("ala.php");
?> 
