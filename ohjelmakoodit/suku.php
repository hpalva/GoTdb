<?php
include("yla.php");
?> 

<p><b>So you want to know about Families!</p>
<p>Choose one of the alternatives and hit the submit button!</b></p>

<form action="sukutarkka.php" method="get">
<input type="radio" name="char" value="all">All Families in Alphabethical Order<br>
<br><input type="radio" name="char" value="spesific">Specific Family<br>
Family Name: <input type="text" name="name"><br>
<input type="submit" value="Submit"> 
</form>

<p><br> Please vote for the Most Magnificent Family</p>
<form action="aanestyssuku.php" method="get">
<input type="submit" value="Vote"> 
</form>

<?php
include("ala.php");
?>
