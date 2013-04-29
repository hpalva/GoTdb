<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");
?> 

<?php

if ($_SESSION["username"] == "hpalva" || $_SESSION["username"] == "karoliva") {
    echo "Hello hpalva or karoliva. You can proceed in updating.";
} else {
    echo "Poor try. You are not admin. Go away please.";
    die();
}

?>

<p><b>Pick a category if you wish to add something new.</b></p>
<form action="addfrontpage.php" method="get">
<input type="radio" name="etu" value="character">Characters<br>
<input type="radio" name="etu" value="family">Families<br>
<input type="radio" name="etu" value="place">Places<br>
<input type="radio" name="etu" value="weapon">Weapons<br>
<input type="radio" name="etu" value="religion">Religions<br>
<input type="radio" name="etu" value="creature">Creatures<br>
<input type="radio" name="etu" value="death">Death<br>
<input type="submit" value="Add"> 
</form> 

<p><b>Pick a category if you wish to update something.</b></p>
<form action="updatefrontpage.php" method="get">
<input type="radio" name="taka" value="character">Characters<br>
<input type="radio" name="taka" value="family">Families<br>
<input type="radio" name="taka" value="place">Places<br>
<input type="radio" name="taka" value="weapon">Weapons<br>
<input type="radio" name="taka" value="religion">Religions<br>
<input type="radio" name="taka" value="creature">Creatures<br>
<input type="radio" name="taka" value="death">Death<br>
<input type="submit" value="Update"> 
</form> 

<?php
include("ala.php");
?>
