<?php

// Penulisan For Loop dasar / Perulangan For

// pada for di bawah, Init Statement, Kondisi, dan Post Statement nya di kosongkan. otomatis Kondisi akan selalu bernilai True.

// for ( ; ; ) { 
//     echo "Saya harus bisa programming !"."\n";
// }

// Perulangan dengan kondisi
// $counter = 1;

// for (; $counter <= 5 ;){
//     echo "For loop ke : ". $counter . "\n";
//     $counter ++;
// }


// Perulangan Dengan Init Statement & Kondisi
// for ($counter=1; $counter<= 10;){ 
//     echo "For Loop Dengan Init Statement = ". $counter. "\n";
//     $counter++;
// }

// Perulangan Init Statement, Kondisi & Post Statement
for ($counter=10; $counter >= 1; $counter--){
    echo "For Loop Urutas ke : ".$counter."\n";
}



/*
NOTE :
- FOR adalah salah satu kata kunci untuk melakukan perulangan/Loop
- Blok kode di dalam for akan selalu diulangi selama kondisi FOR nya terpenuhi/bernilai true

Struktur Syntax pada For Loop (perulangan for) :

    for(init statement; kondisi; post statement){
        //blok perulangan
    }

- Init Statement akan di eksekusi hanya sekali di awal sebelum perulangan
- Kondisi akan di lakukan pengecekan dalam setiap perulangan, jika bernilai TRUE perulangan akan dilakukan, jika bernilai FALSE perulangan akan berhenti.
- Post Statement akan di eksekusi setiap kali di akhir perulangan
- Init Statement, Kondisi, Post Statement tidak wajib diisi, jika Kondisi nya kosong, secara DEFAULT kondisi akan selalu bernilai TRUE.
- Penulisan Init Statement, Kondisi, Post Statement di pisahkan menggunakan tanda semicolon/titik koma ;
*/
