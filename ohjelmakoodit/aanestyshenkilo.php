 <?php
include("yla.php");
?> 

<p>Let the Fairest and the Bravest win!</p>

<form action="lisaaaanestyshenkilo.php" method="post">
<input type="radio" name="votec" value="fm">Fairest Maiden<br>
First Name: <input type="text" name="fmname"><br>
Family Name: <input type="text" name="fmfname"><br>
<input type="radio" name="votec" value="bw">Bravest Warrior<br>
First Name: <input type="text" name="bwname"><br>
Family Name: <input type="text" name="bwfname"><br>
<input type="submit" value="Vote"> 
</form> 

<p><br>Want to see who is the Fairest Maiden at the moment? Please click!</p>
<form action="fmtulokset.php" method="post">
<input type="submit" value="See Results"> 
</form>

<p><br>Want to see who is the Bravest Warrior at the moment? Please click!</p>
<form action="bwtulokset.php" method="post">
<input type="submit" value="See Results"> 
</form>

<?php
include("ala.php");
?> 
