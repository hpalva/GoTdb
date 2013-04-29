 <?php
include("yla.php");
include("yhteys.php");
?>
<p> Update a Weapon!</p>
<form action="paivitysase.php" method="post">
Name: <input type="text" name="name"><br>
Kind: <input type="text" name="kind"><br>
First Name of Original Owner: <input type="text" name="first"><br>
Family Name of Original Owner: <input type="text" name="family"><br>
Material: <input type="text" name="material"><br>
<input type="submit" value="Submit"> 
</form> 

<p>Weapon's name must be filled.<br> Fill only those fields you want to alter. YOU CANNOT ALTER WEAPON'S NAME!<br> There can only be one original owner.<br> BEFORE YOU ALTER NAMES OF ORIGINAL LORD, PLEASE MAKE SURE THAT PERSON REALLY EXISTS! You can also type "unknown" if you want to point out, that the original owner is unknown.</p>
<p>For example, if you want to change the original owner of Widow's Wail to be unknown, do this:<br><br> Name: Widows Wail <br> Kind:<br> First Name of Original Lord: unknown<br> Family Name of Original Lord: unknown <br>Material: <br><br> Kind can contain max 30 characters, Material max 150.</p>

<?php
include("ala.php");
?> 
