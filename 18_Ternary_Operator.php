<?php
// Operasi if else biasa

$gender = "PRIA";

$hi = null;

if ($gender == "PRIA"){
    $hi = "hi bro!";
} else {
    $hi = "Hi Nona !";
}

echo $hi."\n"."\n";

// Menggunakan Ternary Operator (? dan :)
$kelamin = "LAKI";
$halo = $kelamin == "LAKI" ? "HALO BRO !" : "HALO NONA";
// Di baca : jika kelamin = "LAKI"/true maka output nya "HALO BRO !, jika false/BUKAN "LAKI" maka "HALO NONA".
// variable $halo berguna untuk melakukan pengecekan kondisi $kelamin, jika "LAKI"/true maka outputnya "HALO BRO !", jika bukan "LAKI"/false, maka outputnya "HALO NONA !"
echo $halo."\n";

/*
NOTE :
    Ternary Operator 
    Terkadang saat melakukan pengecekan kondisi menggunakan if statement. Jika hasil nya True/Benar maka kita memberi nilai X, jika salah nilai nya Y.
    - Ternary Operator bisa mempersingkat kasus tersebut
    - Ternary Operator menggunakan karakter ? dan :
*/