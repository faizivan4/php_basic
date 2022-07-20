<?php
// Operator Perbandingan

$a = "10";
$b = 10;

// Operator == (Sama Dengan)
echo "1. Apakah variable a sama dengan variable b ? ";
echo "\n";
var_dump ($a==$b);

// Operator === (Identik)
echo "2. Apakah variable a identik dengan variable b ? ";
echo "\n";
var_dump ($a===$b);

// Operator != (Tidak Sama Dengan)
echo "3. Apakah variable a tidak sama dengan variable b ? ";
echo "\n";
var_dump ($a!=$b);

// Operator <> (Tidak Sama Dengan)
echo "4. Apakah variable a tidak sama dengan variable b ? ";
echo "\n";
var_dump ($a<>$b);

// Operator !== (Tidak Identik)
echo "5. Apakah variable a tidak identik dengan variable b ? ";
echo "\n";
var_dump ($a!==$b);

// Operator < (Kurang Dari)
echo "6. Apakah variable a kurang dari variable b ? ";
echo "\n";
var_dump ($a<$b);

// Operator <= (Kurang Sama Dengan)
echo "7. Apakah variable a kurang dari sama dengan variable b ? ";
echo "\n";
var_dump ($a<=$b);

// Operator != (Tidak Sama Dengan)
echo "8. Apakah variable a lebih dari variable b ? ";
echo "\n";
var_dump ($a>$b);

// Operator >= (Lebih Dari Sama Dengan)
echo "9. Apakah variable a lebih dari sama dengan variable b ? ";
echo "\n";
var_dump ($a!=$b);

/*
Note :
- Operator Perbandingan digunakan untuk membandingkan 2 buah value/nilai
- Output dari Operator Perbandingan adalah boolean
- Bisa digunakan untuk membandingkan semua tipe data.

Operasi pada Operator Perbandingan :
    1. $a == $b (sama dengan)
        bernilai "true" jika $a sama dengan $b setelah dilakukan konversi tipe data 

    2. $a === $b (identik)
        "true" jika $a sama dengan $b dan memiliki tipe data yang sama

    3. $a != $b (Tidak Sama Dengan)
        "true" jika $a tidak sama dengan $b setelah dilakukan konversi tipe data

    4. $a <> $b (Tidak Sama Dengan)
        "true" jika $a tidak sama dengan $b setelah dilakukan konversi tipe data

    5. $a !== $b (Tidak Identik)
        "true" jika $a tidak sama dengan $b ATAU tidak sama tipe data

    6. $a < $b (Kurang Dari)
        "true" jika $a kurang dari $b

    7. $a <= $b (Kurang Dari Sama Dengan)
        "true" jika $a kurang dari sama dengan $b

    8. $a > $b (Lebih Dari)
        "true" jika $a lebih dari $b

    9. $a >= $b (Lebih Dari Sama Dengan)
        "true" jika $a lebih dari sama dengan $b

*/