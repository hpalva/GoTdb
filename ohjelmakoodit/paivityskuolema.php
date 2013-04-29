<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$name  = $_POST["name"];
$family = $_POST["family"];
$book = $_POST["book"];
$cause = $_POST["cause"];
$slayer  = $_POST["slayer"];
$familyslayer = $_POST["familyslayer"];
if ($name == "" || $family == "") {
    header("Location: nitwit.php");
    die();
} else if ($book == "" && $cause == "" && $slayer == "" && $familyslayer == "") {
    header("Location: paivitakuolema.php");
    die();
}
if ($book == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Death WHERE name=:name AND familyname=:family");
    $kysely->execute(array(
        ':name' => $name,
':family' => $family
    ));
    $book = $kysely->fetchColumn(2);
}
if ($cause == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Death WHERE name=:name AND familyname=:family");
    $kysely->execute(array(
        ':name' => $name,
':family' => $family
    ));
    $cause = $kysely->fetchColumn(3);
}
if ($slayer == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Death WHERE name=:name AND familyname=:family");
    $kysely->execute(array(
        ':name' => $name,
':family' => $family
    ));
    $slayer = $kysely->fetchColumn(4);
}
if ($familyslayer == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Death WHERE name=:name AND familyname=:family");
    $kysely->execute(array(
        ':name' => $name,
':family' => $family
    ));
    $familyslayer = $kysely->fetchColumn(5);
}
echo "Updating was success if you did it right!";
$kysely = $yhteys->prepare("UPDATE Death SET book=:book, causeofdeath=:cause, nameofslayer=:slayer, familynameofslayer=:familyslayer WHERE name=:name AND familyname=:family");
$kysely->execute(array(
    ':name' => $name,
    ':family' => $family,
    ':book' => $book,
    ':cause' => $cause,
    ':slayer' => $slayer,
':familyslayer' => $familyslayer
));

include("ala.php");
?>
