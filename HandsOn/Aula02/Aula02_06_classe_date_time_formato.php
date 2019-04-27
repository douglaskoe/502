<?php

$objDateTime = new DateTime();

echo $objDateTime->format('d/m/y H:i:s');

echo "<hr>";

$objDateTime = new DateTime('2018-02-10');


echo $objDateTime->format('d/m/Y H:i:s');