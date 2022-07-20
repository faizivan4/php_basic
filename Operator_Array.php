<?php
// Operator pada Array

$first = [
    "firstName" => "Faiz"
];

$last = [
    "lastName" => "Ivan"
];


echo "1. Operator Union (+)";
echo "\n";
$full = $first + $last; // 1. $a + $b (Union)
var_dump($full);


echo "2. Operator Equality (==)";
echo "\n";
$full = $first == $last; // 2. $a == $b (Equality)
var_dump($full);

echo "3. Operator Identity (===)";
echo "\n";
$full = $first === $last; // 3. $a === $b (Identity)
var_dump($full);

echo "4. Operator In-Equality (!=)";
echo "\n";
$full = $first != $last; // 4. $a != $b (In-Equality)
var_dump($full);

echo "5. Operator In-Equality (<>)";
echo "\n";
$full = $first <> $last; // 4. $a <> $b (In-Equality)
var_dump($full);

echo "6. Operator Identity (!==)";
echo "\n";
$full = $first !== $last; // 4. $a !== $b (Non-Identity)
var_dump($full);

/*
NOTE :
- Operator pada Array terlihat sama dengan operator aritmatika biasa, yang BERBEDA adalah CARA KERJANYA.

KEY-VALUE = KEY (Nama Variable) - VALUE (Nilai/Isi data variable)

Operator pada Array :
    1. $a + $b (Union)
    Berfungsi untuk menggabungkan array $a an $b

    2. $a == $b (Equality)
    Bernilai "true" jika $a dan $b memiliki key-value yang sama

    3. $a === $b (Identity)
    Bernilai "true" jika $a dan $b memiliki key-value sama dan posisi yang sama

    4. $a != $b (In-Equality)
    Bernilai "true" jika $a dan $b tidak sama

    5. $a <> $b (In-Equality)
    Bernilai "true" jika $a dan $b tidak sama
    
    6. $a !== $b (Non-Identity)
    Bernilai "true" jika $a dan $b tidak identik
*/

