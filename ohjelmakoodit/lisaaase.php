 <?php
include("yla.php");
include("yhteys.php");
?>

<p> Add New Weapon!</p>
<form action="lisaysase.php" method="post">
Name: <input type="text" name="name"><br>
Kind: <input type="text" name="kind"><br>
First Name of Original Owner: <input type="text" name="nooo"><br>
Family Name of Original Owner: <input type="text" name="fnooo"><br>
Material: <input type="text" name="material"><br>
<input type="submit" value="Submit"> 
</form> 

<p>Name, First Name of Original Owner and Family Name of Original Owner must be filled<br>Material can only be 150 characters long. </p>
<p>Example:<br> Name: Ice <br> Kind: Greatsword <br> First Name of the Original Owner: unknown<br> Family Name of the Original Owner: Stark<br> Material: Valyrian Steel </p>
<p>Please use only letters and numbers and commas.</p>

<?php
include("ala.php");
?> 
