 <?php
include("yla.php");
?> 

<p>Now you have signed in! (d44)</p>
<br><p><b>Want to know more about these categories?</b><br><b> Pick one and hit the submit button!</b></p>

<form action="frontpage.php" method="get">
<input type="radio" name="etu" value="character">Characters<br>
<input type="radio" name="etu" value="family">Families<br>
<input type="radio" name="etu" value="place">Places<br>
<input type="radio" name="etu" value="weapon">Weapons<br>
<input type="radio" name="etu" value="religion">Religions<br>
<input type="radio" name="etu" value="creature">Creatures<br>
<input type="radio" name="etu" value="death">Death (SPOILER ALERT)<br>
<input type="submit" value="Submit"> 
</form> 

<br><br><p>Want to update this site? (<b>You can only update if you are admin</b>)</p> 
<form action="paivitys.php">
<input type="submit" value="Update"> 
</form> 

<br><p>You can leave a comment in the guestbook!</p> 
<form action="kommentti.php">
<input type="submit" value="Guestbook"> 
</form> 

<br><p>Test your knowledge about the books!</p> 
<form action="testi.php">
<input type="submit" value="To the Test!"> 
</form> 

<?php
include("ala.php");
?> 
