<?php
include("yla.php");
?> 

<p><b>So you want to know about Characters!</p>
<p>Choose one of the alternatives and hit the submit button!</b></p>

<form action="henkilotarkka.php" method="get">
<input type="radio" name="char" value="all">All Characters in Alphabethical order<br>
<br><input type="radio" name="char" value="spesific">Specific Character<br>
First Name: <input type="text" name="name"><br>
<br><input type="radio" name="char" value="allfamily">All Characters with same Family Name<br>
Family name: <input type="text" name="familynam"> <br>
<input type="submit" value="Submit"> 
</form> 

<p><br> Please vote for the Fairest Maiden and the Bravest Warrior!</p>
<form action="aanestyshenkilo.php" method="get">
<input type="submit" value="Go voting"> 
</form>

<?php
include("ala.php");
?> 
