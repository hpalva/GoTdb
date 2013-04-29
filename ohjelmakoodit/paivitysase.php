<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$name  = $_POST["name"];
$kind = $_POST["kind"];
$first = $_POST["first"];
$family = $_POST["family"];
$material  = $_POST["material"];
if ($name == "") {
    header("Location: nitwit.php");
    die();
} else if ($kind == "" && $first == "" && $family == "" && $material == "") {
    header("Location: paivitaase.php");
    die();
}
if ($kind == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Weapon WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $kind = $kysely->fetchColumn(1);
}
if ($first == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Weapon WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $first = $kysely->fetchColumn(2);
}
if ($family == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Weapon WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $family = $kysely->fetchColumn(3);
}
if ($material == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Weapon WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $material = $kysely->fetchColumn(4);
}
echo "Updating was success if you did it right!";
$kysely = $yhteys->prepare("UPDATE Weapon SET kind=:kind, nameoforiginalowner=:first, familynameoforiginalowner=:family, material=:material WHERE name=:name");
$kysely->execute(array(
    ':name' => $name,
    ':kind' => $kind,
    ':first' => $first,
    ':family' => $family,
    ':material' => $material
));

include("ala.php");
?>
