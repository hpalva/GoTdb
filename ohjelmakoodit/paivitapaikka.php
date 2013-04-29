<?php
include("yla.php");
include("yhteys.php");
?>

<p> Update a Place!</p>
<form action="paivityspaikka.php" method="post">
Name: <input type="text" name="name"><br>
Location: <input type="text" name="location"><br>
Family Name of Original Lord: <input type="text" name="original"><br>
Family Name of Current: <input type="text" name="current"><br>
Main Religion: <input type="text" name="religion"><br>
Notable Places: <input type="text" name="notable"><br>
Type: <input type="text" name="type"><br>
<input type="submit" value="Submit"> 
</form> 

<p>Name must be filled. <br> Fill only those fields you want to alter. YOU CANNOT ALTER PLACE'S NAME!<br> Use comma if there is more than one notable place.<br> There can only be one original lord, one current lord and one religion.<br> BEFORE YOU ALTER NAME OF CURRENT OR ORIGINAL LORD OR MAIN RELIGION, PLEASE MAKE SURE THEY REALLY EXIST!</p>
<p>For example, if you want to change Dorne's type to be "Port city", do this:<br><br> Name: Dorne <br> Location:<br> Family Name of Original Lord:<br> Family Name of Current Lord: <br>Main Religion: <br>Notable places:<br>Type: Port city <br><br> Location can contain max 50 characters, notable places max 200, type max 30.</p><p>Please use only letters and numbers and commas.</p>

<?php
include("ala.php");
?>
