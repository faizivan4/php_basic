<?php

//Penulisan Break
$counter = 1;

while (true) { //while(true) akan melakukan perulangan tanpa henti
    echo "Hallo Break : ".$counter."\n";
    $counter++;

    if($counter > 10) { //baca : jika $counter lebih dari 10, maka perulangan akan di hentikan(break)
        break;
    }
}

/*
NOTE :

Break 
- Pada Switch Statement, sudah mengenal kata kunci Break yang berfungsi menghentikan program/case jika sebuah kondisi bernilai True/sudah terpenuhi
- Break juga digunakan untuk menghentikan seluruh perulangan

*/