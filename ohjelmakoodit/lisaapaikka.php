<?php
include("yla.php");
include("yhteys.php");
?>
<p> Add New Place!</p>
<form action="lisayspaikka.php" method="post">
Name: <input type="text" name="name"><br>
Location: <input type="text" name="location"><br>
Family Name of Original Lord: <input type="text" name="fnool"><br>
Family Name of Current Lord: <input type="text" name="fnocl"><br>
Main Religion: <input type="text" name="mr"><br>
Notable Places: <input type="text" name="np"><br>
Type: <input type="text" name="type"><br>
<input type="submit" value="Submit"> 
</form> 

<p>Name, Religion and Family Names must be filled. </p>
<p>Example:<br> Name: Winterfell <br> Location: the North <br> Family Name of Original Lord: Stark <br> Family Name of Current Lord: unknown<br> Main Religion: Old Gods Notable Places: The Great Keep <br> Type: Seat <br></p><p>Please use only letters and numbers and commas.</p>

<?php
include("ala.php");
?> 
