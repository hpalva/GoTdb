<?php
include("yla.php");
include("yhteys.php");
?>

<p> Update a Family!</p>
<form action="paivityssuku.php" method="post">
Name: <input type="text" name="name"><br>
Sigil: <input type="text" name="sigil"><br>
Words: <input type="text" name="words"><br>
Place of Origin: <input type="text" name="place"><br>
First Name of Current Lord: <input type="text" name="lord"><br>
<input type="submit" value="Submit"> 
</form> 

<p>Family's name must be filled. <br> Fill only those fields you want to alter. YOU CANNOT ALTER FAMILY'S NAME! If you wish to alter Place of Origin, please make sure the place really exists.<br> 
<p>For example, if you only want to change the first name of the current lord of Lannister family to be Jaime, do this:<br><br> Name: Lannister <br> Sigil: <br> Words: <br> Title: <br> Place of Origin: <br> Name of Current Lord: Jaime <br> <br>
Sigil can contain max 100 characters, words max 150. </p>

<?php
include("ala.php");
?>
