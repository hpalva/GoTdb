 <?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$user    = $_SESSION["username"];
$comment = $_POST["comments"];

if ($comment == "") {
    header("Location: nitwit.php");
    die();
} else {
    echo "Adding was success!";
}
$kysely = $yhteys->prepare("INSERT INTO Comment VALUES (?, ?)");
$kysely->execute(array(
    $_SESSION["username"],
    $_POST["comments"]
));

?>

<form action="kommentti.php">
<input type="submit" value="Back">
</form> 

<?php
include("ala.php");
?> 
