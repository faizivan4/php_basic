<?php

//Function pada PHP

echo "Penggunaan Function pada PHP"."\n";

function sayHallo() {
    echo "hallo function"."\n";
}

sayHallo(); 
sayHallo();

// Function di dalam If
echo "Penggunaan Function di dalam IF"."\n";

$buat=true;

if ($buat) {
    function hi()
    {
        echo "hallo function"."\n";
    }
}

hi();

/*
NOTE : 
- FUNCTION atau Method adalah block kode program yang akan berjalan saat di panggil
- Sebelumnya ada isset(), count(), dan lainnya. itu juga sebuah Function
- Untuk menampilkan isi dari blok Function, kita harus memanggil namaFuction nya setelah blok Function di tuliskan.

Lokasi Function : 
- Dalam PHP Function bisa di buat dimana saja, bisa dalam if statement, di dalam function, dan lainnya
- Perlu di ingat : JIKA KODE FUNCTION YANG BELUM DI EKSEKUSI OLEH PHP, MAKA FUNCTION TERSEBUT TIDAK BISA DI GUNAKAN

Struktur Syntax Function : 
    function namaFuction () {
        blok function nya
    }

    namaFunction();


    
*/