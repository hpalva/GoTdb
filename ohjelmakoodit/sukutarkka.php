<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$valinta = $_GET["char"];
if ($valinta == "all") {
    $kaik = "SELECT * FROM Family ORDER BY name";
    kysely($kaik, null);
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Sigil</th>";
    echo "<th>Words</th>";
    echo "<th>Place of Origin</th>";
    echo "<th>Name of Current Lord</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["sigil"] . "</td>";
        echo "<td>" . $rivi["words"] . "</td>";
        echo "<td>" . $rivi["placeoforigin"] . "</td>";
        echo "<td>" . $rivi["nameofcurrentlord"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else if ($valinta == "spesific") {
    $nimi   = $_GET["name"];
    $tarkka = "SELECT * FROM Family WHERE name=?";
    kysely($tarkka, array(
        $nimi
    ));
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Sigil</th>";
    echo "<th>Words</th>";
    echo "<th>Place of Origin</th>";
    echo "<th>Name of Current Lord</th>";
    echo "</tr>";
    while ($rivii = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivii["name"] . "</td>";
        echo "<td>" . $rivii["sigil"] . "</td>";
        echo "<td>" . $rivii["words"] . "</td>";
        echo "<td>" . $rivii["placeoforigin"] . "</td>";
        echo "<td>" . $rivii["nameofcurrentlord"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>

<form action="suku.php">
<input type="submit" value="Back">
</form> 

<?php
include("ala.php");
?>
