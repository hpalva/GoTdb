<?php
include("yla.php");
?> 

<p><b>So you want to know about Places!</p>
<p>Choose one of the alternatives and hit the submit button!</b></p>

<form action="paikkatarkka.php" method="get">
<input type="radio" name="place" value="all">All Places in Alphabethical order<br>
<br><input type="radio" name="place" value="spesific">Specific Place<br>
Name: <input type="text" name="name"><br>
<br><input type="radio" name="place" value="orifamily">All Places with same Family Name of Original Lord<br>
Family name: <input type="text" name="ori"> <br>
<br><input type="radio" name="place" value="curfamily">All Places with same Family Name of Current Lord<br>
Family name: <input type="text" name="cur"> <br>
<br><input type="radio" name="place" value="mg">All Places with same Main Religion<br>
God(-s): <input type="text" name="religion"> <br>
<input type="submit" value="Submit"> 
</form> 

<?php
include("ala.php");
?> 
