<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$familyname = $_POST["familyname"];
$sigil      = $_POST["sigil"];
$words      = $_POST["words"];
$place      = $_POST["poo"];
$current    = $_POST["nocl"];
if ($familyname == "" || $place == "" || $current == "") {
    header("Location: nitwit.php");
    die();
} else {
    echo "Adding was success if family really was new!";
}
$kysely = $yhteys->prepare("INSERT INTO Family VALUES (?, ?, ?, ?, ?)");
$kysely->execute(array(
    $_POST["familyname"],
    $_POST["sigil"],
    $_POST["words"],
    $_POST["poo"],
    $_POST["nocl"]
));

include("ala.php");
?> 
