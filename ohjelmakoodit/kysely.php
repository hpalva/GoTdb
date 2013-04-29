<?php

function kysely($muuttuja, $taulu)
{
    global $kysely, $yhteys;
    $kysely = $yhteys->prepare($muuttuja);
    $kysely->execute($taulu);
}

?> 
