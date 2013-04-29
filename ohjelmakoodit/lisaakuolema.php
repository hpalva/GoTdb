<?php
include("yla.php");
include("yhteys.php");
?>
<p> Add New Death!</p>
<form action="lisayskuolema.php" method="post">
First name: <input type="text" name="firstname"><br>
Family name: <input type="text" name="familyname"><br>
Book: <input type="number" name="book"><br>
Cause of Death: <input type="text" name="cod"><br>
Name of the Slayer: <input type="text" name="nos"><br>
Family Name of the Slayer: <input type="text" name="fnos"><br>
<input type="submit" value="Submit"> 
</form> 

<p>First name, Family name, Cause of Death, Name of Slayer, Family Name of Slayer must be filled<br>Cause of Death can only be 50 characters long. </p>
<p>Example:<br> First Name: Drogo <br> Family Name: unknown <br> Book: 1 (0 means he/she died before the books, 100 means he/she is believed to be dead or it is unknown situation)<br> Cause of Death: Festered wound <br> First Name of Slayer: Ogo<br> Family Name of Slayer: unknown </p>
</p><p>Please use only letters and numbers and commas.</p>

<?php
include("ala.php");
?> 
