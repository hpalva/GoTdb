 <?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$name     = $_POST["name"];
$location = $_POST["location"];
$fnool    = $_POST["fnool"];
$fnocl    = $_POST["fnocl"];
$mr       = $_POST["mr"];
$mb       = $_POST["mb"];
$np       = $_POST["np"];
$type     = $_POST["type"];
if ($name == "" || $fnool == "" || $fnocl == "" || $mr == "") {
    header("Location: nitwit.php");
    die();
} else {
    echo "Adding was success if place really was new!";
}
$kysely = $yhteys->prepare("INSERT INTO Place VALUES (?, ?, ?, ?, ?, ?, ?)");
$kysely->execute(array(
    $_POST["name"],
    $_POST["location"],
    $_POST["fnool"],
    $_POST["fnocl"],
    $_POST["mr"],
    $_POST["nb"],
    $_POST["type"]
));

include("ala.php");
?> 
