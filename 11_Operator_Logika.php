<?php
// Operator Logika
$a = true;
$b = false;

// 1. $a && $b (And / Dan)
echo "1. variable a && variable b ? ";
echo "\n";
var_dump ($a&&$b);

// 2. $a and $b (And / Dan)
echo "2. variable a and variable b ? ";
echo "\n";
var_dump ($a and $b);

// 3. $a || $b (Or / Atau)
echo "3. variable a || variable b ? ";
echo "\n";
var_dump ($a || $b);

// 4. $a or $b (Or / Atau)
echo "4. variable a or variable b ? ";
echo "\n";
var_dump ($a or $b);

// 5. $a || $b (Or / Atau)
echo "5. Not variable a ? ";
echo "\n";
var_dump (!$a);

// 6. $a xor $b (xor / Atau)
echo "6. variable a xor variable b ? ";
echo "\n";
var_dump ($a xor $b);


/*
NOTE :
- Operator Logika digunakan untuk membandingkan 2 buah data Boolean
- Output dari Operator Logika adalah Boolean (true/false)

Operasi pada Operator Logika :
    1. $a && $b (And / Dan)
    bernilai "true" jika $a dan $b keduanya bernilai "true"

    2. $a and $b (And / Dan)
    bernilai "true" jika $a dan $b keduanya bernilai "true"

    3. $a || $b (Or / Atau)
    bernilai "true" jika $a atau $b salahsatunya bernilai "true"

    4. $a or $b (Or / Atau)
    bernilai "true" jika $a atau $b salahsatunya bernilai "true"

    5. !$a (Not / Bukan)
    bernilai "true" jika $a bernilai "false"

    6. $a xor $b (xor / Atau)
    bernilai "true" jika $a atau $b salahsatunya bernilai "true", tapi tidak keduanya
*/