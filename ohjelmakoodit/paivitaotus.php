<?php
include("yla.php");
include("yhteys.php");
?>

<p> Update a Creature!</p>
<form action="paivitysotus.php" method="post">
Name: <input type="text" name="name"><br>
Species: <input type="text" name="species"><br>
First Name of Owner: <input type="text" name="first"><br>
Family Name of Owner: <input type="text" name="family"><br>
Favorite Food: <input type="text" name="food"><br>
Special Features: <input type="text" name="feature"><br>
<input type="submit" value="Submit"> 
</form> 

<p>Name must be filled. <br> Fill only those fields you want to alter. YOU CANNOT ALTER CREATURE'S NAME!<br> There can only be one owner. BEFORE YOU ALTER NAMES OF OWNER, PLEASE MAKE SURE THE PERSON REALLY EXIST!</p>
<p>For example, if you want to change Summer's special features to be "It's so fluffy I'm gonna die", do this:<br><br> Name: Summer <br> Species:<br> First Name of Owner:<br> Family Name of Owner: <br>Favorite Food: <br>Special Features: Its so fluffy Im gonna die!<br><br>Special features can contain max 100 characters.</p><p>Please use only letters and numbers and commas.</p>

<?php
include("ala.php");
?>
