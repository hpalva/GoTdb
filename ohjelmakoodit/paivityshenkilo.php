<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");
$firstname  = $_POST["firstname"];
$familyname = $_POST["familyname"];
$alias      = $_POST["alias"];
$title      = $_POST["title"];
$special    = $_POST["special"];
if ($firstname == "" || $familyname == "") {
    header("Location: nitwit.php");
    die();
} else if ($alias == "" && $title == "" && $special == "") {
    header("Location: paivitahenkilo.php");
    die();
}
if ($alias == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Character WHERE name=:firstname AND familyname=:familyname");
    $kysely->execute(array(
        ':firstname' => $firstname,
        ':familyname' => $familyname
    ));
    $alias = $kysely->fetchColumn(2);
}
if ($title == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Character WHERE name=:firstname AND familyname=:familyname");
    $kysely->execute(array(
        ':firstname' => $firstname,
        ':familyname' => $familyname
    ));
    $title = $kysely->fetchColumn(3);
}
if ($special == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Character WHERE name=:firstname AND familyname=:familyname");
    $kysely->execute(array(
        ':firstname' => $firstname,
        ':familyname' => $familyname
    ));
    $special = $kysely->fetchColumn(4);
}
echo "Updating was success if you did it right!";
$kysely = $yhteys->prepare("UPDATE Character SET alias=:alias, title=:title, specialfeatures=:special WHERE name=:firstname AND familyname=:familyname");
$kysely->execute(array(
    ':firstname' => $firstname,
    ':familyname' => $familyname,
    ':alias' => $alias,
    ':title' => $title,
    ':special' => $special
));

include("ala.php");
?>


