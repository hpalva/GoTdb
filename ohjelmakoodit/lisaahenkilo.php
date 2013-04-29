<?php
include("yla.php");
include("yhteys.php");
?>

<p> Add New Character!</p>
<form action="lisayshenkilo.php" method="post">
First name: <input type="text" name="firstname"><br>
Family name: <input type="text" name="familyname"><br>
Alias: <input type="text" name="alias"><br>
Title: <input type="text" name="title"><br>
Special Features: <input type="text" name="special"><br>
<input type="submit" value="Submit"> 
</form> 

<p>First name and Family name must be filled. <br> Use comma if there is more than one alias, title or special feature. They can only be 150 characters long. </p>
<p>Example:<br> First Name: Cersei <br> Family Name: Lannister <br> Alias: <br> Title: Queen Regent, Protector of the Realm, Lady of Casterly Rock<br> Special Features: Cunt </p>
<p>Please use only letters and numbers and commas.</p>

<?php
include("ala.php");
?>
