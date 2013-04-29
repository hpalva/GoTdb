<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$valinta = $_GET["char"];
if ($valinta == "all") {
    $kaik = "SELECT * FROM Death ORDER BY name";
    kysely($kaik, null);
    echo "<table border>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Family Name</th>";
    echo "<th>Book</th>";
    echo "<th>Cause of Death</th>";
    echo "<th>First Name of Slayer</th>";
    echo "<th>Family Name of Slayer</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["familyname"] . "</td>";
        echo "<td>" . $rivi["book"] . "</td>";
        echo "<td>" . $rivi["causeofdeath"] . "</td>";
        echo "<td>" . $rivi["nameofslayer"] . "</td>";
        echo "<td>" . $rivi["familynameofslayer"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else if ($valinta == "spesific") {
    $nimi   = $_GET["name"];
    $tarkka = "SELECT * FROM Death WHERE name=?";
    kysely($tarkka, array(
        $nimi
    ));
    echo "<table border>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Family Name</th>";
    echo "<th>Book</th>";
    echo "<th>Cause of Death</th>";
    echo "<th>First Name of Slayer</th>";
    echo "<th>Family Name of Slayer</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["familyname"] . "</td>";
        echo "<td>" . $rivi["book"] . "</td>";
        echo "<td>" . $rivi["causeofdeath"] . "</td>";
        echo "<td>" . $rivi["nameofslayer"] . "</td>";
        echo "<td>" . $rivi["familynameofslayer"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else if ($valinta == "allfamily") {
    $sukunimi = $_GET["familyname"];
    $kaikki   = "SELECT * FROM Death WHERE familyname=?";
    kysely($kaikki, array(
        $sukunimi
    ));
    echo "<table border>";
    echo "<table border>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Family Name</th>";
    echo "<th>Book</th>";
    echo "<th>Cause of Death</th>";
    echo "<th>First Name of Slayer</th>";
    echo "<th>Family Name of Slayer</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["familyname"] . "</td>";
        echo "<td>" . $rivi["book"] . "</td>";
        echo "<td>" . $rivi["causeofdeath"] . "</td>";
        echo "<td>" . $rivi["nameofslayer"] . "</td>";
        echo "<td>" . $rivi["familynameofslayer"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else if ($valinta == "cause") {
    $syy    = $_GET["cause"];
    $kaikki = "SELECT * FROM Death WHERE causeofdeath=?";
    kysely($kaikki, array(
        $syy
    ));
    echo "<table border>";
    echo "<table border>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Family Name</th>";
    echo "<th>Book</th>";
    echo "<th>Cause of Death</th>";
    echo "<th>First Name of Slayer</th>";
    echo "<th>Family Name of Slayer</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["familyname"] . "</td>";
        echo "<td>" . $rivi["book"] . "</td>";
        echo "<td>" . $rivi["causeofdeath"] . "</td>";
        echo "<td>" . $rivi["nameofslayer"] . "</td>";
        echo "<td>" . $rivi["familynameofslayer"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else if ($valinta == "slayer") {
    $tappaja = $_GET["slayer"];
    $kaikki  = "SELECT * FROM Death WHERE nameofslayer=?";
    kysely($kaikki, array(
        $tappaja
    ));
    echo "<table border>";
    echo "<table border>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Family Name</th>";
    echo "<th>Book</th>";
    echo "<th>Cause of Death</th>";
    echo "<th>First Name of Slayer</th>";
    echo "<th>Family Name of Slayer</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["familyname"] . "</td>";
        echo "<td>" . $rivi["book"] . "</td>";
        echo "<td>" . $rivi["causeofdeath"] . "</td>";
        echo "<td>" . $rivi["nameofslayer"] . "</td>";
        echo "<td>" . $rivi["familynameofslayer"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    $kirja  = $_GET["book"];
    $kaikki = "SELECT * FROM Death WHERE book=?";
    kysely($kaikki, array(
        $kirja
    ));
    echo "<table border>";
    echo "<table border>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Family Name</th>";
    echo "<th>Book</th>";
    echo "<th>Cause of Death</th>";
    echo "<th>First Name of Slayer</th>";
    echo "<th>Family Name of Slayer</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["familyname"] . "</td>";
        echo "<td>" . $rivi["book"] . "</td>";
        echo "<td>" . $rivi["causeofdeath"] . "</td>";
        echo "<td>" . $rivi["nameofslayer"] . "</td>";
        echo "<td>" . $rivi["familynameofslayer"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>

<form action="kuolema.php">
<input type="submit" value="Back">
</form> 

<?php
include("ala.php");
?> 
