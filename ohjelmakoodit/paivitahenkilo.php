<?php
include("yla.php");
include("yhteys.php");
?>

<p> Update a Character!</p>
<form action="paivityshenkilo.php" method="post">
First name: <input type="text" name="firstname"><br>
Family name: <input type="text" name="familyname"><br>
Alias: <input type="text" name="alias"><br>
Title: <input type="text" name="title"><br>
Special Features: <input type="text" name="special"><br>
<input type="submit" value="Submit"> 
</form> 

<p>First name and Family name must be filled. 
<br>Fill only those fields you want to alter. YOU CANNOT ALTER CHARACTER'S NAMES!
<br>Use comma if there is more than one alias, title or special feature.</p>
<p>For example, if you only want to change Cersei Lannister's alias to be "Bitch", do this:
<br><br>First Name: Cersei 
<br>Family Name: Lannister 
<br>Alias: Bitch 
<br>Title: 
<br>Special Features: 
<br><br>Alias, title and special features can all contain max 150 characters.
<br>Please use only letters and numbers and commas.</p>

<?php
include("ala.php");
?>
