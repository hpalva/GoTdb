<?php
include("yla.php");
include("yhteys.php");

$valinta = $_GET["taka"];
if ($valinta == "character") {
    header("Location: paivitahenkilo.php");
} else if ($valinta == "family") {
    header("Location: paivitasuku.php");
} else if ($valinta == "place") {
    header("Location: paivitapaikka.php");
} else if ($valinta == "creature") {
    header("Location: paivitaotus.php");
} else if ($valinta == "religion") {
    header("Location: paivitausko.php");
} else if ($valinta == "weapon") {
    header("Location: paivitaase.php");
} else if ($valinta == "death") {
    header("Location: paivitakuolema.php");
}

include("ala.php");
?>

