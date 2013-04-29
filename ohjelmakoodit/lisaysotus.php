 <?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$name    = $_POST["name"];
$species = $_POST["species"];
$noo     = $_POST["noo"];
$fnoo    = $_POST["fnoo"];
$ff      = $_POST["ff"];
$sf      = $_POST["sf"];
if ($name == "" || $noo == "" || $fnoo == "") {
    header("Location: nitwit.php");
    die();
} else {
    echo "Adding was success if creature really was new!";
}
$kysely = $yhteys->prepare("INSERT INTO Creature VALUES (?, ?, ?, ?, ?, ?)");
$kysely->execute(array(
    $_POST["name"],
    $_POST["species"],
    $_POST["noo"],
    $_POST["fnoo"],
    $_POST["ff"],
    $_POST["sf"]
));

include("ala.php");
?> 
