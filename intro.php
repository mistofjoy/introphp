<?php
//Asignación
$num = 9;
$lang = [
    'es' => 'español',
    'en' => 'inglés'
];

//Aritmética
echo 'suma 2 + 2 = ' . ((int) 2 + (int) 2);
echo 'resta 2 - 2 = ' . ((int) 2 - (int) 2);
echo 'multiplica 2 * 2 = ' . 2 * 2;
echo 'divide 2 / 2 = ' . 2 / 2;
echo 'módulo 2 % 2 = ' . 2 % 2;
echo 'exponencial 2 ** 2 = ' . 2 ** 2;

//comparación
//igual ==, valor '9' == 9 (true)
//igual ===, valor - tipo '9' === 9 (false)
//diferente !=, valor '9' != 9 (false)
//diferente !==, valor - tipo '9' !== 9 (true)
//<, >, <=, >=

//Variables variables
$app = 'name';
$name = 'platzi';

echo $app; //name
echo $$app; //platzi