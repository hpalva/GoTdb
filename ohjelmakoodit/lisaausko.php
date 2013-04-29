<?php
include("yla.php");
include("yhteys.php");
?>
<p> Add New Religion!</p>
<form action="lisaysusko.php" method="post">
Gods: <input type="text" name="god"><br>
Number of Gods: <input type="number" name="number"><br>
Symbol: <input type="text" name="sym"><br>
Servant: <input type="text" name="servant"><br>
Main Area: <input type="text" name="area"><br>
<input type="submit" value="Submit"> 
</form> 

<p>Gods and Number of Gods, Main Area must be filled</p>
<p>Example:<br> Gods: Squirell with a tophat <br> Number of Gods: 1 <br> Symbol: Squirell <br> Servant: Nut <br> Main Area: Beyond the Wall </p>
</p></p>

<?php
include("ala.php");
?> 
