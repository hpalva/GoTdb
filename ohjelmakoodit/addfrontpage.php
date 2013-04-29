<?php
include("yla.php");
include("yhteys.php");

$valinta = $_GET["etu"];
if ($valinta == "character") {
    header("Location: lisaahenkilo.php");
} else if ($valinta == "family") {
    header("Location: lisaasuku.php");
} else if ($valinta == "place") {
    header("Location: lisaapaikka.php");
} else if ($valinta == "creature") {
    header("Location: lisaaotus.php");
} else if ($valinta == "religion") {
    header("Location: lisaausko.php");
} else if ($valinta == "weapon") {
    header("Location: lisaaase.php");
} else if ($valinta == "death") {
    header("Location: lisaakuolema.php");
}

include("ala.php");
?>

