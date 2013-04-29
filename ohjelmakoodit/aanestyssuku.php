<?php
include("yla.php");
?> 

<p>Let the Most Magnificent win!</p>

<form action="lisaaaanestyssuku.php" method="post">
<input type="radio" name="votef" value="mm">Most Magnificent Family<br>
Family Name: <input type="text" name="mmfname"><br>
<input type="submit" value="Vote"> 
</form> 

<p><br>Want to see who is the Most Magnificent Family at the moment? Please click!</p>
<form action="mmtulokset.php" method="post">
<input type="submit" value="See Results"> 
</form>

<?php
include("ala.php");
?> 
