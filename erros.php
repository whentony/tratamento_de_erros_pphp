<?php

error_reporting(E_ALL); //Aparecer todos os erros, passar por parâmetro quais...
ini_set('display_errors', 0); // 1 Para aparecer, 0 pra desaparecer
ini_set('log_errors', 1);
ini_set('error_log', '/home/whentony/a.txt'); // Salvar os erros em um arquivo externo

echo @$variavel; // @ para suprimir erros
echo $array[12];
echo CONSTANTE;