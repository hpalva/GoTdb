 <?php

try {
    $yhteys = new PDO("pgsql:host=localhost;dbname=hpalva", "hpalva", "gladnews109");
}
catch (PDOException $e) {
    die("VIRHE: " . $e->getMessage());
}
$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$yhteys->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);

?> 
