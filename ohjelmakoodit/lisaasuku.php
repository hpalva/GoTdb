<?php
include("yla.php");
include("yhteys.php");
?>
<p> Add New Family!</p>
<form action="lisayssuku.php" method="post">
Family name: <input type="text" name="familyname"><br>
Sigil: <input type="text" name="sigil"><br>
Words: <input type="text" name="words"><br>
Place of Origin: <input type="text" name="poo"><br>
Name of Current Lord: <input type="text" name="nocl"><br>
<input type="submit" value="Submit"> 
</form> 

<p>Family name, Place of Origin and Name of Current Lord must be filled <br> Sigil can be only 100 characters long and words can only be 150 characters long. </p>
<p>Example:<br> Family Name: Stark <br> Sigil: Grey Direwolf on White Field <br> Words: Winter is coming <br> Place of Origin: the North<br> Name of Current Lord: Bran </p></p>

<?php
include("ala.php");
?>
