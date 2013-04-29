<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$valinta = $_GET["char"];
if ($valinta == "all") {
    $kaik = "SELECT * FROM Character ORDER BY name";
    kysely($kaik, null);
    echo "<table border>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Family Name</th>";
    echo "<th>Alias</th>";
    echo "<th>Title</th>";
    echo "<th>Special Features</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["familyname"] . "</td>";
        echo "<td>" . $rivi["alias"] . "</td>";
        echo "<td>" . $rivi["title"] . "</td>";
        echo "<td>" . $rivi["specialfeatures"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else if ($valinta == "spesific") {
    $nimi   = $_GET["name"];
    $tarkka = "SELECT * FROM Character WHERE name=?";
    kysely($tarkka, array(
        $nimi
    ));
    echo "<table border>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Family Name</th>";
    echo "<th>Alias</th>";
    echo "<th>Title</th>";
    echo "<th>Special Features</th>";
    echo "</tr>";
    while ($rivii = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivii["name"] . "</td>";
        echo "<td>" . $rivii["familyname"] . "</td>";
        echo "<td>" . $rivii["alias"] . "</td>";
        echo "<td>" . $rivii["title"] . "</td>";
        echo "<td>" . $rivii["specialfeatures"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    $sukunimi = $_GET["familynam"];
    $kaikki   = "SELECT * FROM Character WHERE familyname=?";
    kysely($kaikki, array(
        $sukunimi
    ));
    echo "<table border>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Family Name</th>";
    echo "<th>Alias</th>";
    echo "<th>Title</th>";
    echo "<th>Special Features</th>";
    echo "</tr>";
    while ($rivii = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivii["name"] . "</td>";
        echo "<td>" . $rivii["familyname"] . "</td>";
        echo "<td>" . $rivii["alias"] . "</td>";
        echo "<td>" . $rivii["title"] . "</td>";
        echo "<td>" . $rivii["specialfeatures"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>

<form action="henkilot.php">
<input type="submit" value="Back">
</form> 

<?php
include("ala.php");
?> 
