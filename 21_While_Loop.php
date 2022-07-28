<?php

// Penulisan While loop
$counter = 1;

while ($counter <= 10){ //tanpa ada pemisah semicolon(;) di dalam while nya
    echo "While Loop urutan ke - ".$counter."\n";
    $counter++;
}


/*
NOTE :
- While Loop adalah versi perulangan yang lebih sederhana dari For Loop
- While Loop hanya terdapat Kondisi, tanpa ada Init Statement dan Post Statement di dalam blok While nya
- Di dalam While nya tidak terdapat pemisah semicolon(;) nya, tidak seperti For Loop

    Contoh :
    while(kondisi){
        //blok perulangan nya/outputnya
    }
*/