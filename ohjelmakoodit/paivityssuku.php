<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$name  = $_POST["name"];
$sigil = $_POST["sigil"];
$words = $_POST["words"];
$place = $_POST["place"];
$lord  = $_POST["lord"];
if ($name == "") {
    header("Location: nitwit.php");
    die();
} else if ($sigil == "" && $words == "" && $place == "" && $lord == "") {
    header("Location: paivitasuku.php");
    die();
}
if ($sigil == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Family WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name
    ));
    $sigil = $kysely->fetchColumn(1);
}
if ($words == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Family WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name
    ));
    $words = $kysely->fetchColumn(2);
}
if ($place == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Family WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name
    ));
    $place = $kysely->fetchColumn(3);
}
if ($lord == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Family WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name
    ));
    $lord = $kysely->fetchColumn(4);
}
echo "Updating was success if you did it right!";
$kysely = $yhteys->prepare("UPDATE Family SET sigil=:sigil, words=:words, placeoforigin=:place, nameofcurrentlord=:lord WHERE name=:name");
$kysely->execute(array(
    ':name' => $name,
    ':sigil' => $sigil,
    ':words' => $words,
    ':place' => $place,
    ':lord' => $lord
));

include("ala.php");
?>
