<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$user      = $_SESSION["username"];
$minunkaik = "SELECT * FROM Comment WHERE userid=?";
kysely($minunkaik, array(
    $user
));
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
