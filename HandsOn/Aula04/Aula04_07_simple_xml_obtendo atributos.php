<?php

$objSimple = new SimpleXMLElement('cursos.xml', null, true);

echo "<pre>";

var_dump($objSimple->curso[0]->attributes());

echo "</pre>";