<?php
include("yla.php");
?> 

<p><b>So you want to know about Creatures!</p>
<p>Choose one of the alternatives and hit the submit button!</b></p>

<form action="otustarkka.php" method="get">
<input type="radio" name="char" value="all">All Creatures in Alphabethical Order<br>
<br><input type="radio" name="char" value="species">All Creatures of Chosen Species<br>
Species: <input type="text" name="species"><br>
<br><input type="radio" name="char" value="owner">All Creatures Owned by Chosen Character<br>
First Name of Owner: <input type="text" name="name"><br>
<input type="submit" value="Submit"> 
</form> 

<p><br> Please vote for the Cutest Creature!</p>
<form action="aanestysotus.php" method="get">
<input type="submit" value="Go voting"> 
</form>

<?php
include("ala.php");
?> 
