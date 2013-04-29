 <?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$god     = $_POST["god"];
$number  = $_POST["number"];
$symbol  = $_POST["sym"];
$servant = $_POST["servant"];
$area    = $_POST["area"];
if ($god == "" || $number == "" || $area == "") {
    header("Location: nitwit.php");
    die();
} else {
    echo "Adding was success if religion really was new!";
}
$kysely = $yhteys->prepare("INSERT INTO Religion VALUES (?, ?, ?, ?, ?)");
$kysely->execute(array(
    $_POST["god"],
    $_POST["number"],
    $_POST["sym"],
    $_POST["servant"],
    $_POST["area"]
));

include("ala.php");
?> 

