<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$valinta = $_GET["char"];
if ($valinta == "all") {
    $kaik = "SELECT * FROM Weapon ORDER BY name";
    kysely($kaik, null);
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Kind</th>";
    echo "<th>First Name of Original Owner</th>";
    echo "<th>Family Name of Original Owner</th>";
    echo "<th>Material</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["kind"] . "</td>";
        echo "<td>" . $rivi["nameoforiginalowner"] . "</td>";
        echo "<td>" . $rivi["familynameoforiginalowner"] . "</td>";
        echo "<td>" . $rivi["material"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else if ($valinta == "specific") {
    $nimi   = $_GET["name"];
    $tarkka = "SELECT * FROM Weapon WHERE name=?";
    kysely($tarkka, array(
        $nimi
    ));
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Kind</th>";
    echo "<th>First Name of Original Owner</th>";
    echo "<th>Family Name of Original Owner</th>";
    echo "<th>Material</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["kind"] . "</td>";
        echo "<td>" . $rivi["nameoforiginalowner"] . "</td>";
        echo "<td>" . $rivi["familynameoforiginalowner"] . "</td>";
        echo "<td>" . $rivi["material"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else if ($valinta == "kind") {
    $malli  = $_GET["kind"];
    $kaikki = "SELECT * FROM Weapon WHERE kind=?";
    kysely($kaikki, array(
        $malli
    ));
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Kind</th>";
    echo "<th>First Name of Original Owner</th>";
    echo "<th>Family Name of Original Owner</th>";
    echo "<th>Material</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["kind"] . "</td>";
        echo "<td>" . $rivi["nameoforiginalowner"] . "</td>";
        echo "<td>" . $rivi["familynameoforiginalowner"] . "</td>";
        echo "<td>" . $rivi["material"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    $matsku = $_GET["material"];
    $kaikki = "SELECT * FROM Weapon WHERE material=?";
    kysely($kaikki, array(
        $matsku
    ));
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Kind</th>";
    echo "<th>First Name of Original Owner</th>";
    echo "<th>Family Name of Original Owner</th>";
    echo "<th>Material</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["kind"] . "</td>";
        echo "<td>" . $rivi["nameoforiginalowner"] . "</td>";
        echo "<td>" . $rivi["familynameoforiginalowner"] . "</td>";
        echo "<td>" . $rivi["material"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>

<form action="ase.php">
<input type="submit" value="Back">
</form> 

<?php
include("ala.php");
?> 
