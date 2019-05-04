<?php 

$usuarios =[
    'nome' => 'Amando dos Santos',
    'email' => 'amanda.santos@gmai.com',
    'senha' => '123456',
    'perfil' => [
       'admin',
       'professor',
       'coordenador' 
    ]
];


echo '<pre>';

print_r($usuarios);

echo '<hr>';

$json = json_encode($usuarios);

print_r($json);

echo '<hr>';

$array = json_decode($json, true);

print_r($array);

echo '</pre>';