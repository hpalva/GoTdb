<?php
include("yla.php");
?> 

<p><b>So you want to know about Weapons!</p>
<p>Choose one of the alternatives and hit the submit button!</b></p>

<form action="asetarkka.php" method="get">
<input type="radio" name="char" value="all">All Weapons in Alphabethical Order<br>
<br><input type="radio" name="char" value="specific">Specific Weapon<br>
Name: <input type="text" name="name"><br>
<br><input type="radio" name="char" value="kind">All Weapons of Chosen Kind<br>
Kind: <input type="text" name="kind"><br>
<br><input type="radio" name="char" value="material">All Weapons of Chosen Material<br>
Material: <input type="text" name="material"><br>
<input type="submit" value="Submit"> 
</form> 

<?php
include("ala.php");
?> 
