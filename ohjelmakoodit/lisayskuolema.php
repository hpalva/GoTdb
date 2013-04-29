 <?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$firstname  = $_POST["firstname"];
$familyname = $_POST["familyname"];
$book       = $_POST["book"];
$cod        = $_POST["cod"];
$nos        = $_POST["nos"];
$fnos       = $_POST["fnos"];
if ($firstname == "" || $familyname == "" || $cod == "") {
    header("Location: nitwit.php");
    die();
} else {
    echo "Adding was success if character really was new!";
}
$kysely = $yhteys->prepare("INSERT INTO Death VALUES (?, ?, ?, ?, ?, ?)");
$kysely->execute(array(
    $_POST["firstname"],
    $_POST["familyname"],
    $_POST["book"],
    $_POST["cod"],
    $_POST["nos"],
    $_POST["fnos"]
));

include("ala.php");
?> 
