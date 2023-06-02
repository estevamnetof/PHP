<?php
$variavelString = "10";
$variavelInteira1 = 5;
$variavelInteira2 = 3;

$variavelString = (int)$variavelString;
echo '<br>';
$variavelString *= 2;

echo '<br>';
if ($variavelInteira1 > 2) {
    echo "5 é maior que 2";
} 

echo '<br>';
if ($variavelInteira1 > $variavelInteira2) {
    echo '$variavelInteira1 é maior que $variavelInteira2';
} 
else {
    echo '$variavelInteira1 é menor que $variavelInteira2';
}

?>