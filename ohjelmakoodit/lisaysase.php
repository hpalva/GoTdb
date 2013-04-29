<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$name        = $_POST["name"];
$kind        = $_POST["kind"];
$nameorigin  = $_POST["nooo"];
$fnameorigin = $_POST["fnooo"];
$material    = $_POST["material"];
if ($name == "" || $nameorigin == "" || $fnameorigin == "") {
    header("Location: nitwit.php");
    die();
} else {
    echo "Adding was success if weapon really was new!";
}
$kysely = $yhteys->prepare("INSERT INTO Weapon VALUES (?, ?, ?, ?, ?)");
$kysely->execute(array(
    $_POST["name"],
    $_POST["kind"],
    $_POST["nooo"],
    $_POST["fnooo"],
    $_POST["material"]
));

include("ala.php");
?> 
