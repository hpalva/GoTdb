<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$valinta = $_GET["testi1"];
$pisteet = 0;
if ($valinta == "sto") {
    $pisteet = $pisteet + 1;
}

$valinta = $_GET["testi2"];
if ($valinta == "che") {
    $pisteet = $pisteet + 1;
}

$valinta = $_GET["testi3"];
if ($valinta == "tyr") {
    $pisteet = $pisteet + 1;
}

$valinta = $_GET["testi4"];
if ($valinta == "iro") {
    $pisteet = $pisteet + 1;
}

$valinta = $_GET["testi5"];
if ($valinta == "val") {
    $pisteet = $pisteet + 1;
}

$valinta = $_GET["testi6"];
if ($valinta == "dro") {
    $pisteet = $pisteet + 1;
}

$valinta = $_GET["testi7"];
if ($valinta == "vha") {
    $pisteet = $pisteet + 1;
}

$valinta = $_GET["testi8"];
if ($valinta == "min") {
    $pisteet = $pisteet + 1;
}

$valinta = $_GET["testi9"];
if ($valinta == "cre") {
    $pisteet = $pisteet + 1;
}

$valinta = $_GET["testi10"];
if ($valinta == "loh") {
    $pisteet = $pisteet + 1;
}

echo "<br /> Your points are " . $pisteet . "!" . "<br /> Your results will be posted as a comment :)))";

$user   = $_SESSION["username"];
$kysely = $yhteys->prepare("UPDATE userid SET points=:pisteet WHERE username=:user");
$kysely->execute(array(
    $pisteet,
    $_SESSION["username"]
));

$comment = $user . " got " . $pisteet . " in the quiz!";

$kysely = $yhteys->prepare("INSERT INTO Comment VALUES (:user, :comment)");
$kysely->execute(array(
    ':user' => $user,
    ':comment' => $comment
));

?>

<form action="kommentti.php" method="post">
<input type="submit" value="To the Comments!">
</form> 

<?php
include("ala.php");
?>
