<?php
include("yla.php");
include("yhteys.php");
?>

<p> Update a Religion!</p>
<form action="paivitysusko.php" method="post">
God(-s): <input type="text" name="gods"><br>
Number of Gods: <input type="text" name="number"><br>
Symbol: <input type="text" name="symbol"><br>
Servant(-s): <input type="text" name="servant"><br>
Main Area: <input type="text" name="area"><br>
<input type="submit" value="Submit"> 
</form> 

<p>Field "God(-s)" must be filled. <br> Fill only those fields you want to alter. YOU CANNOT ALTER FIELD "GOD(-S)"!<br> BEFORE YOU ALTER MAIN AREA, PLEASE MAKE SURE IT REALLY EXISTS!</p>
<p>For example, if you want to change Bakkalon's symbol to be "Squirrel with a tophat", do this:<br><br> Name: Bakkalon <br> Number of Gods:<br> Symbol: Squirrel with a tophat<br> Servant: <br>Main Area: <br><br> Symbol and Servant can both contain max 30 characters.</p><p>Please use only letters and numbers and commas.</p>

<?php
include("ala.php");
?>
