 <?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

$valinta = $_POST["votec"];
if ($valinta == "fm") {
    $fmname  = $_POST["fmname"];
    $fmfname = $_POST["fmfname"];
    if ($fmname == "" || $fmfname == "") {
        header("Location: nitwit.php");
        die();
    } else {
        $taulussa = "SELECT name, familyname FROM Character where name=:fmname AND     familyname=:fmfname";
        kysely($taulussa, array(
            ':fmname' => $fmname,
            ':fmfname' => $fmfname
        ));
        $tulos2 = $kysely->fetch();
        if (empty($tulos2)) {
            echo "You cannot vote that character, because it does not exist.";
        } else {
            $nimi = "SELECT name, familyname FROM Ranking WHERE name=:fmname AND familyname=:fmfname";
            kysely($nimi, array(
                ':fmname' => $fmname,
                ':fmfname' => $fmfname
            ));
            $tulos = $kysely->fetch();
            if (empty($tulos)) {
                $kysely = $yhteys->prepare("INSERT INTO Ranking VALUES ('Fairest Maiden', :fmname, :fmfname, 1)");
                echo "Voting was succes!";
                $kysely->execute(array(
                    ':fmname' => $fmname,
                    ':fmfname' => $fmfname
                ));
            } else {
                $lukutaulussa = "SELECT name, familyname, ranking FROM Ranking where name=:fmname AND familyname=:fmfname";
                $kysely       = $yhteys->prepare("UPDATE Ranking SET ranking = ranking+1 WHERE name=:fmname AND familyname=:fmfname");
                echo "Voting was succes!";
                $kysely->execute(array(
                    ':fmname' => $fmname,
                    ':fmfname' => $fmfname
                ));
            }
        }
    }
} else if ($valinta == "bw") {
    $bwname  = $_POST["bwname"];
    $bwfname = $_POST["bwfname"];
    
    if ($bwname == "" || $bwfname == "") {
        header("Location: nitwit.php");
        die();
    } else {
        $taulussa = "SELECT name, familyname FROM Character where name=:bwname AND     familyname=:bwfname";
        kysely($taulussa, array(
            ':bwname' => $bwname,
            ':bwfname' => $bwfname
        ));
        $tulos2 = $kysely->fetch();
        if (empty($tulos2)) {
            echo "You cannot vote that character, because it does not exist.";
        } else {
            $nimi = "SELECT name, familyname FROM Ranking WHERE name=:bwname AND familyname=:bwfname";
            kysely($nimi, array(
                ':bwname' => $bwname,
                ':bwfname' => $bwfname
            ));
            $tulos = $kysely->fetch();
            if (empty($tulos)) {
                $kysely = $yhteys->prepare("INSERT INTO Ranking VALUES ('Bravest Warrior', :bwname, :bwfname, 1)");
                echo "Voting was succes!";
                $kysely->execute(array(
                    ':bwname' => $bwname,
                    ':bwfname' => $bwfname
                ));
            } else {
                $lukutaulussa = "SELECT name, familyname, ranking FROM Ranking where name=:bwname AND familyname=:bwfname";
                $kysely       = $yhteys->prepare("UPDATE Ranking SET ranking = ranking+1 WHERE name=:bwname AND familyname=:bwfname");
                echo "Voting was succes!";
                $kysely->execute(array(
                    ':bwname' => $bwname,
                    ':bwfname' => $bwfname
                ));
            }
        }
    }
}

include("ala.php");
?> 
