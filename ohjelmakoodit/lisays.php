 <?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

echo "Registration was a success!";
$username = $_POST["Username"];
$password = $_POST["Password"];
$kysely   = $yhteys->prepare("INSERT INTO userid VALUES (?, ?, false, 0)");
$kysely->execute(array(
    $_POST["Username"],
    $_POST["Password"]
));

?>

<form action="etusivukirjau.php" method="post"><br>
<input type="submit" value="Continue">  
</form>

<?php
include("ala.php");
?> 
