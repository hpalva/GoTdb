<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$kaik = "SELECT * FROM Comment";
kysely($kaik, null);
echo "<table border>";
echo "<tr>";
echo "<th>Userid</th>";
echo "<th>Comment</th>";
echo "</tr>";
while ($rivi = $kysely->fetch()) {
    echo "<tr>";
    echo "<td>" . $rivi["userid"] . "</td>";
    echo "<td>" . $rivi["comment"] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>

<form action="kommentti.php">
<input type="submit" value="Back">
</form> 

<?php
include("ala.php");
?> 
