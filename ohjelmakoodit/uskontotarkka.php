<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$valinta = $_GET["char"];
$kaik    = "SELECT * FROM Religion ORDER BY gods";
kysely($kaik, null);
echo "<table border>";
echo "<tr>";
echo "<th>God(-s)</th>";
echo "<th>Number of Gods</th>";
echo "<th>Symbol</th>";
echo "<th>Servant</th>";
echo "<th>Main Area</th>";
echo "</tr>";
while ($rivi = $kysely->fetch()) {
    echo "<tr>";
    echo "<td>" . $rivi["gods"] . "</td>";
    echo "<td>" . $rivi["numberofgods"] . "</td>";
    echo "<td>" . $rivi["symbol"] . "</td>";
    echo "<td>" . $rivi["servant"] . "</td>";
    echo "<td>" . $rivi["mainarea"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

<form action="uskonto.php">
<input type="submit" value="Back">
</form> 

<?php
include("ala.php");
?>
