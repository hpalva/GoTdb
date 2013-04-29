<?php
include("yla.php");
?>
 
<p><b>SPOILER ALERT!!</b></p>
<p><b>So you want to know about DEATH!</p>
<p>Choose one of the alternatives and hit the submit button!</b></p>

<form action="kuolematarkka.php" method="get">
<input type="radio" name="char" value="all">All Dead Characters in Alphabethical Order<br>
<br><input type="radio" name="char" value="spesific">Specific Dead Character<br>
First Name: <input type="text" name="name"><br>
<br><input type="radio" name="char" value="allfamily">All Dead Characters with Same Family Name<br>
Family name: <input type="text" name="familyname"> <br>
<br><input type="radio" name="char" value="cause">All Dead Characters with Same Cause of Death<br>
Cause of Death: <input type="text" name="cause"> <br>
<br><input type="radio" name="char" value="slayer">All Dead Characters with Same Slayer<br>
Slayer's First Name: <input type="text" name="slayer"> <br>
<br><input type="radio" name="char" value="book">All Dead Characters that Died in Same Book<br>
Book: <input type="text" name="book"> <br>
<input type="submit" value="Submit"> 
</form> 

<?php
include("ala.php");
?> 
