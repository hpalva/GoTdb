 <?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$valinta = $_POST["votecr"];
if ($valinta == "cc") {
    $ccname = $_POST["ccname"];
    if ($ccname == "") {
        header("Location: nitwit.php");
        die();
    } else {
        $taulussa = "SELECT name FROM Creature where name=:ccname";
        kysely($taulussa, array(
            ':ccname' => $ccname
        ));
        $tulos2 = $kysely->fetch();
        if (empty($tulos2)) {
            echo "You cannot vote that creature, because it does not exist.";
        } else {
            $nimi = "SELECT name FROM Ranking WHERE name=:ccname AND familyname=''";
            kysely($nimi, array(
                ':ccname' => $ccname
            ));
            $tulos = $kysely->fetch();
            if (empty($tulos)) {
                $kysely = $yhteys->prepare("INSERT INTO Ranking VALUES ('Cutest Creature', :ccname, '', 1)");
                echo "Voting was succes!";
                $kysely->execute(array(
                    ':ccname' => $ccname
                ));
            } else {
                $kysely = $yhteys->prepare("UPDATE Ranking SET ranking = ranking+1 WHERE name=:ccname AND familyname=''");
                echo "Voting was succes!";
                $kysely->execute(array(
                    ':ccname' => $ccname
                ));
            }
        }
    }
}

include("ala.php");
?> 
