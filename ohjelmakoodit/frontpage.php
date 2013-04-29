<?php
include("yla.php");
include("yhteys.php");

$valinta = $_GET["etu"];
if ($valinta == "character") {
    header("Location: henkilot.php");
} else if ($valinta == "family") {
    header("Location: suku.php");
} else if ($valinta == "creature") {
    header("Location: otus.php");
} else if ($valinta == "place") {
    header("Location: paikka.php");
} else if ($valinta == "religion") {
    header("Location: uskonto.php");
} else if ($valinta == "weapon") {
    header("Location: ase.php");
} else if ($valinta == "death") {
    header("Location: kuolema.php");
}

include("ala.php");
?> 
