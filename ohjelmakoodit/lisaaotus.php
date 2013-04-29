 <?php
include("yla.php");
include("yhteys.php");
?>
<p> Add New Creature!</p>
<form action="lisaysotus.php" method="post">
Name: <input type="text" name="name"><br>
Species: <input type="text" name="species"><br>
Name of Owner: <input type="text" name="noo"><br>
Family Name of Owner: <input type="text" name="fnoo"><br>
Favorite Food: <input type="text" name="ff"><br>
Special Features: <input type="text" name="sf"><br>
<input type="submit" value="Submit"> 
</form> 

<p>Name, Name of Owner and Family Name of Owner must be filled (Can be "unknown")<br>Special Features can only be 100 characters long. </p>
<p>Example:<br> Name: Nymeria <br> Species: Direwolf <br> First Name of the Owner: Arya<br> Family Name of Owner: Stark<br> Favorite Food: Joffrey, meat <br> Special Features: Bit Joffrey, yellow eyes, litter-mate of Greywind, Lady, Summer, Shaggygod and Ghost</p>
<p>Please use only letters and numbers and commas.</p>

<?php
include("ala.php");
?> 
