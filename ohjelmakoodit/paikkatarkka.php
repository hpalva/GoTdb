<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$valinta = $_GET["place"];
if ($valinta == "all") {
    $kaik = "SELECT * FROM Place ORDER BY name";
    kysely($kaik, null);
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Location</th>";
    echo "<th>Family Name of Original Lord</th>";
    echo "<th>Family Name of Current Lord</th>";
    echo "<th>Main Religion</th>";
    echo "<th>Notable Places</th>";
    echo "<th>Type</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["location"] . "</td>";
        echo "<td>" . $rivi["familynameoforiginallord"] . "</td>";
        echo "<td>" . $rivi["familynameofcurrentlord"] . "</td>";
        echo "<td>" . $rivi["mainreligion"] . "</td>";
        echo "<td>" . $rivi["notableplaces"] . "</td>";
        echo "<td>" . $rivi["type"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else if ($valinta == "spesific") {
    $nimi   = $_GET["name"];
    $tarkka = "SELECT * FROM Place WHERE name=?";
    kysely($tarkka, array(
        $nimi
    ));
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Location</th>";
    echo "<th>Family Name of Original Lord</th>";
    echo "<th>Family Name of Current Lord</th>";
    echo "<th>Main Religion</th>";
    echo "<th>Notable Places</th>";
    echo "<th>Type</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["location"] . "</td>";
        echo "<td>" . $rivi["familynameoforiginallord"] . "</td>";
        echo "<td>" . $rivi["familynameofcurrentlord"] . "</td>";
        echo "<td>" . $rivi["mainreligion"] . "</td>";
        echo "<td>" . $rivi["notableplaces"] . "</td>";
        echo "<td>" . $rivi["type"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else if ($valinta == "orifamily") {
    $sukunimi = $_GET["ori"];
    $fori     = "SELECT * FROM Place WHERE familynameoforiginallord=?";
    kysely($fori, array(
        $sukunimi
    ));
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Location</th>";
    echo "<th>Family Name of Original Lord</th>";
    echo "<th>Family Name of Current Lord</th>";
    echo "<th>Main Religion</th>";
    echo "<th>Notable Places</th>";
    echo "<th>Type</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["location"] . "</td>";
        echo "<td>" . $rivi["familynameoforiginallord"] . "</td>";
        echo "<td>" . $rivi["familynameofcurrentlord"] . "</td>";
        echo "<td>" . $rivi["mainreligion"] . "</td>";
        echo "<td>" . $rivi["notableplaces"] . "</td>";
        echo "<td>" . $rivi["type"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else if ($valinta == "curfamily") {
    $sukunimii = $_GET["cur"];
    $fcur      = "SELECT * FROM Place WHERE familynameofcurrentlord=?";
    kysely($fcur, array(
        $sukunimii
    ));
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Location</th>";
    echo "<th>Family Name of Original Lord</th>";
    echo "<th>Family Name of Current Lord</th>";
    echo "<th>Main Religion</th>";
    echo "<th>Notable Places</th>";
    echo "<th>Type</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["location"] . "</td>";
        echo "<td>" . $rivi["familynameoforiginallord"] . "</td>";
        echo "<td>" . $rivi["familynameofcurrentlord"] . "</td>";
        echo "<td>" . $rivi["mainreligion"] . "</td>";
        echo "<td>" . $rivi["notableplaces"] . "</td>";
        echo "<td>" . $rivi["type"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else if ($valinta == "mg") {
    $usko = $_GET["religion"];
    $reli = "SELECT * FROM Place WHERE mainreligion=?";
    kysely($reli, array(
        $usko
    ));
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Location</th>";
    echo "<th>Family Name of Original Lord</th>";
    echo "<th>Family Name of Current Lord</th>";
    echo "<th>Main Religion</th>";
    echo "<th>Notable Places</th>";
    echo "<th>Type</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["location"] . "</td>";
        echo "<td>" . $rivi["familynameoforiginallord"] . "</td>";
        echo "<td>" . $rivi["familynameofcurrentlord"] . "</td>";
        echo "<td>" . $rivi["mainreligion"] . "</td>";
        echo "<td>" . $rivi["notableplaces"] . "</td>";
        echo "<td>" . $rivi["type"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>

<form action="paikka.php">
<input type="submit" value="Back">
</form> 

<?php
include("ala.php");
?>  
