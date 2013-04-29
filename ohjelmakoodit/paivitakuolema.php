<?php
include("yla.php");
include("yhteys.php");
?>

<p> Update a Death!</p>
<form action="paivityskuolema.php" method="post">
First Name: <input type="text" name="name"><br>
Family Name: <input type="text" name="family"><br>
Book within the Death Occurs: <input type="text" name="book"><br>
Cause of Death: <input type="text" name="cause"><br>
First Name of Slayer or the Most Guilty: <input type="text" name="slayer"><br>
Family Name of Slayer or the Most Guilty: <input type="text" name="familyslayer"><br>
<input type="submit" value="Submit"> 
</form> 

<p>First name and Family name must be filled. <br> Fill only those fields you want to alter. YOU CANNOT ALTER DEAD CHARACTER'S NAMES!<br></p>
<p>For example, if you want to change Eddard Stark's cause of death to be "Treason", do this:<br><br>First Name: Eddard <br> Family Name: Stark<br> Book within the Death Occurs:<br> Cause of Death: Treason <br>First Name of Slayer or the Most Guilty:<br>Family Name of Slayer or the Most Guilty:<br><br> Cause of death can contain max 50 characters.</p><p>Please use only letters and numbers and commas.</p>

<?php
include("ala.php");
?>
