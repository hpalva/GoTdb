<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$valinta = $_GET["char"];
if ($valinta == "all") {
    $kaik = "SELECT * FROM Creature ORDER BY name";
    kysely($kaik, null);
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Species</th>";
    echo "<th>First Name of Owner</th>";
    echo "<th>Family Name of Owner</th>";
    echo "<th>Favorite Food</th>";
    echo "<th>Special Features</th>";
    echo "</tr>";
    while ($rivi = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivi["name"] . "</td>";
        echo "<td>" . $rivi["species"] . "</td>";
        echo "<td>" . $rivi["nameofowner"] . "</td>";
        echo "<td>" . $rivi["familynameofowner"] . "</td>";
        echo "<td>" . $rivi["favoritefood"] . "</td>";
        echo "<td>" . $rivi["specialfeatures"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else if ($valinta == "species") {
    $laji   = $_GET["species"];
    $tarkka = "SELECT * FROM Creature WHERE species=?";
    kysely($tarkka, array(
        $laji
    ));
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Species</th>";
    echo "<th>First Name of Owner</th>";
    echo "<th>Family Name of Owner</th>";
    echo "<th>Favorite Food</th>";
    echo "<th>Special Features</th>";
    echo "</tr>";
    while ($rivii = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivii["name"] . "</td>";
        echo "<td>" . $rivii["species"] . "</td>";
        echo "<td>" . $rivii["nameofowner"] . "</td>";
        echo "<td>" . $rivii["familynameofowner"] . "</td>";
        echo "<td>" . $rivii["favoritefood"] . "</td>";
        echo "<td>" . $rivii["specialfeatures"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    $nimi   = $_GET["name"];
    $kaikki = "SELECT * FROM Creature WHERE nameofowner=?";
    kysely($kaikki, array(
        $nimi
    ));
    echo "<table border>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Species</th>";
    echo "<th>First Name of Owner</th>";
    echo "<th>Family Name of Owner</th>";
    echo "<th>Favorite Food</th>";
    echo "<th>Special Features</th>";
    echo "</tr>";
    while ($rivii = $kysely->fetch()) {
        echo "<tr>";
        echo "<td>" . $rivii["name"] . "</td>";
        echo "<td>" . $rivii["species"] . "</td>";
        echo "<td>" . $rivii["nameofowner"] . "</td>";
        echo "<td>" . $rivii["familynameofowner"] . "</td>";
        echo "<td>" . $rivii["favoritefood"] . "</td>";
        echo "<td>" . $rivii["specialfeatures"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>

<form action="otus.php">
<input type="submit" value="Back">
</form>
 
<?php
include("ala.php");
?> 
