<?php

$objDateTime = new DateTime();
$objDateTime->modify('next saturday');

echo "<pre>";

print_r($objDateTime);

$objDateTime->setDate(2018,02,10);

echo "<hr>";

print_r($objDateTime);

$objDateTime->setTime(10,15,10);

echo "<hr>";

print_r($objDateTime);

echo "</pre>";
