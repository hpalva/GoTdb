 <?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$gods    = $_POST["gods"];
$number  = $_POST["number"];
$symbol  = $_POST["symbol"];
$servant = $_POST["servant"];
$area    = $_POST["area"];
if ($gods == "") {
    header("Location: nitwit.php");
    die();
} else if ($number == "" && $symbol == "" && $servant == "" && $area == "") {
    header("Location: paivitausko.php");
    die();
}
if ($number == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Religion WHERE gods=:gods");
    $kysely->execute(array(
        ':gods' => $gods
    ));
    $number = $kysely->fetchColumn(1);
}
if ($symbol == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Religion WHERE gods=:gods");
    $kysely->execute(array(
        ':gods' => $gods
    ));
    $symbol = $kysely->fetchColumn(2);
}
if ($servant == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Religion WHERE gods=:gods");
    $kysely->execute(array(
        ':gods' => $gods
    ));
    $servant = $kysely->fetchColumn(3);
}
if ($area == "") {
    $kysely = $yhteys->prepare("SELECT * FROM Religion WHERE gods=:gods");
    $kysely->execute(array(
        ':gods' => $gods
    ));
    $area = $kysely->fetchColumn(4);
}
echo "Updating was success if you did it right!";
$kysely = $yhteys->prepare("UPDATE Religion SET numberofgods=:number, symbol=:symbol, servant=:servant, mainarea=:area WHERE gods=:gods");
$kysely->execute(array(
    ':gods' => $gods,
    ':number' => $number,
    ':symbol' => $symbol,
    ':servant' => $servant,
    ':area' => $area
));

include("ala.php");
?>
