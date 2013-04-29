<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$name  = $_POST["name"];
$species = $_POST["species"];
$first = $_POST["first"];
$family = $_POST["family"];
$food  = $_POST["food"];
$feature = $_POST["feature"];
if ($name == "") {
    header("Location: nitwit.php");
    die();
} else if ($species == "" && $first == "" && $family == "" && $food == "" && $feature == "") {
    header("Location: paivitaotus.php");
    die();
}
if ($species == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Creature WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $species = $kysely->fetchColumn(1);
}
if ($first == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Creature WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $first = $kysely->fetchColumn(2);
}
if ($family == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Creature WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $family = $kysely->fetchColumn(3);
}
if ($food == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Creature WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $food = $kysely->fetchColumn(4);
}
if ($feature == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Creature WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $feature = $kysely->fetchColumn(5);
}
echo "Updating was success if you did it right!";
$kysely = $yhteys->prepare("UPDATE Creature SET species=:species, nameofowner=:first, familynameofowner=:family, favoritefood=:food, specialfeatures=:feature WHERE name=:name");
$kysely->execute(array(
    ':name' => $name,
    ':species' => $species,
    ':first' => $first,
    ':family' => $family,
    ':food' => $food,
':feature' => $feature,
));

include("ala.php");
?>
