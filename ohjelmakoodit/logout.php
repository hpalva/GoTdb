<?php
include("yla.php");
include("yhteys.php");
include("kysely.php");

session_start();
session_destroy();
header("Location: got.php");

include("ala.php");
?> 
