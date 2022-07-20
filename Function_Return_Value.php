<?php

// Function Return Value 1
function sum(int $first, int $second)
{
    $total=$first+$second;
    return $total;
}

$total = sum(10, 10);
var_dump($total);

$total = sum(20, 20);
var_dump($total);

// Function Return Value 2
function getFinalValue(int $value)
{
    if ($value >= 80){
        return "A";
    } else if ($value >= 70){
        return "B";
    } else if ($value >= 60){
        return "C";
    } else if ($value >= 50){
        return "D";
    } else {
        return "F";
    }
}

$score = getFinalValue(10);
echo "Nilai anda adalah : $score";

/*
NOTE :
- Secara Default, Function tidak menghasilkan value apapun, namun jika dibutuhkan, kita bisa membuat Function yang mengembalikan value/nilai
- Di dalam blok Function, untuk menghasilkan nilai/value tersebut, kita bisa menggunakan keyword RETURN. lalu di ikuti dengan data yang ingin di hasilkan
- Kita hanya bisa menghasilkan 1 data di sebuah Function, tidak bisa lebih dari satu.

*/