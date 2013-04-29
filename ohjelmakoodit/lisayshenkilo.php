 <?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$firstname  = $_POST["firstname"];
$familyname = $_POST["familyname"];
$alias      = $_POST["alias"];
$title      = $_POST["title"];
$specialf   = $_POST["special"];
if ($firstname == "" || $familyname == "") {
    header("Location: nitwit.php");
    die();
} else {
    echo "Adding was success if character really was new!";
}
$kysely = $yhteys->prepare("INSERT INTO Character VALUES (?, ?, ?, ?, ?)");
$kysely->execute(array(
    $_POST["firstname"],
    $_POST["familyname"],
    $_POST["alias"],
    $_POST["title"],
    $_POST["special"]
));

include("ala.php");
?> 

