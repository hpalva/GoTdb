 <?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$valinta = $_POST["votef"];
if ($valinta == "mm") {
    $mmfname = $_POST["mmfname"];
    if ($mmfname == "") {
        header("Location: nitwit.php");
        die();
    } else {
        $taulussa = "SELECT name FROM Family where name=:mmfname";
        kysely($taulussa, array(
            ':mmfname' => $mmfname
        ));
        $tulos2 = $kysely->fetch();
        if (empty($tulos2)) {
            echo "You cannot vote that family, because it does not exist.";
        } else {
            $nimi = "SELECT familyname FROM Ranking WHERE familyname=:mmfname AND name=''";
            kysely($nimi, array(
                ':mmfname' => $mmfname
            ));
            $tulos = $kysely->fetch();
            if (empty($tulos)) {
                $kysely = $yhteys->prepare("INSERT INTO Ranking VALUES ('Most Magnificent Family','', :mmfname, 1)");
                echo "Voting was succes!";
                $kysely->execute(array(
                    ':mmfname' => $mmfname
                ));
            } else {
                $kysely = $yhteys->prepare("UPDATE Ranking SET ranking = ranking+1 WHERE familyname=:mmfname AND title='Most Magnificent Family' AND name=''");
                echo "Voting was succes!";
                $kysely->execute(array(
                    ':mmfname' => $mmfname
                ));
            }
        }
    }
}

include("ala.php");
?> 
