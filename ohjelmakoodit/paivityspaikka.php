 <?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$name  = $_POST["name"];
$location = $_POST["location"];
$original = $_POST["original"];
$current = $_POST["current"];
$religion  = $_POST["religion"];
$notable = $_POST["notable"];
$type=$_POST["type"];
if ($name == "") {
    header("Location: nitwit.php");
    die();
} else if ($location == "" && $original == "" && $current == "" && $religion == "" && $notable == "" && $type == "") {
    header("Location: paivitapaikka.php");
    die();
}
if ($location == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Place WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $location = $kysely->fetchColumn(1);
}
if ($original == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Place WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $original = $kysely->fetchColumn(2);
}
if ($current == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Place WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $current = $kysely->fetchColumn(3);
}
if ($religion == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Place WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $religion = $kysely->fetchColumn(4);
}
if ($notable == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Place WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $notable = $kysely->fetchColumn(5);
}
if ($type == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Place WHERE name=:name");
    $kysely->execute(array(
        ':name' => $name,
    ));
    $type = $kysely->fetchColumn(6);
}
echo "Updating was success if you did it right!";
$kysely = $yhteys->prepare("UPDATE Place SET location=:location, familynameoforiginallord=:original, familynameofcurrentlord=:current, mainreligion=:religion, notableplaces=:notable, type=:type WHERE name=:name");
$kysely->execute(array(
    ':name' => $name,
    ':location' => $location,
    ':original' => $original,
    ':current' => $current,
    ':religion' => $religion,
':notable' => $notable,
':type' => $type
));

include("ala.php");
?>
