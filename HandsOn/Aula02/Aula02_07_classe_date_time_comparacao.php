<?php

$data1 = new DateTime();
$data2 = new DateTime("2018-10-05");

echo "<pre>";
print_r($data1);
print_r($data2);
echo "</pre>";

echo "<hr>";
echo '$data1 > $data2';
var_dump($data1 > $data2);
echo "<br>";
echo "<hr>";
echo '$data1 < $data2';
var_dump($data1 < $data2);
echo "<br>";
echo "<hr>";
echo '$data1 == $data2';
var_dump($data1 == $data2);
echo "<br>";
echo "<hr>";
echo '$data1 != $data2';
var_dump($data1 != $data2);
