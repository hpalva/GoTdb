<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$kaik = "SELECT * FROM Ranking WHERE title='Most Magnificent Family' ORDER BY ranking DESC";
kysely($kaik, null);
echo "<table border>";
echo "<tr>";
echo "<th>Title</th>";
echo "<th>Family Name</th>";
echo "<th>Ranking</th>";
echo "</tr>";
while ($rivi = $kysely->fetch()) {
    echo "<tr>";
    echo "<td>" . $rivi["title"] . "</td>";
    echo "<td>" . $rivi["familyname"] . "</td>";
    echo "<td>" . $rivi["ranking"] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>

<form action="aanestyssuku.php">
<input type="submit" value="Back">
</form> 

<?php
include("ala.php");
?> 
