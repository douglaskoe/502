<?php 

$nextDay = strtotime('next day');
$maisDoisDias = strtotime('+ 2 days');
$amanha = strtotime('tomorrow');
$proximaSegunda = strtotime('next monday');

echo $nextDay;
echo "<br>";
echo $maisDoisDias;
echo "<br>";
echo $amanha;
echo "<br>";
echo $proximaSegunda;

echo "<hr>";

echo date('d-m-Y', $nextDay);
echo "<br>";
echo date('d-m-Y', $maisDoisDias);
echo "<br>";
echo date('d-m-Y', $amanha);
echo "<br>";
echo date('d-m-Y', $proximaSegunda);
echo "<br>";
echo date('d-m-Y', strtotime('+ 1 month'));
echo "<br>";
