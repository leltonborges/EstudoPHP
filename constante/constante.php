<?php
define("SERVIDOR", "127.0.0.1");

//echo SERVIDOR;
//Para definer se a constante é case sensitive usa o TRUE no final dela, casa não queira remova TRUE
define("SERVER", [
    '127.0.0.1',
    'root',
    'lelton',
    'mariadb'
], TRUE);

print_r(SERVER);    

///////////////////////////////////
//constantes padrões no PHP

echo PHP_VERSION;
echo "<br>";
echo DIRECTORY_SEPARATOR;
echo "<br>";
echo PHP_OS;
echo "<br>";
echo PHP_SAPI;
echo "<br>";
echo PHP_INT_MIN;
echo "<br>";

echo "<br>";

echo "<br>";