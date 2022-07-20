<?php

// Cara Manipulasi String

$name1 = "Faiz Ivan Dharmawan";
$name2 = "Fajri Ikhsanu";

//////////////////////////////////////////////////////

echo "Operator Dot/Titik (.)" . "\n";
echo "Name : " . $name1 . "\n"; //operator dot/titik (.)
echo "Tinggi Badan : " . 120 . "\n" . "\n";

///////////////////////////////////////////////////////

echo "Konversi ke Tipe Data Number dan Sebaliknya menggunakan tanda kurung tutup&buka ()" . "\n";
$valueString = (string) 100; //Konversi ke Tipe Data Number dan Sebaliknya menggunakan tanda kurung tutup&buka ()
var_dump ($valueString)."\n";

$valueString = (int) "100";
var_dump ($valueString)."\n";

$valueString = (float) "100.5";
var_dump ($valueString)."\n"."\n";

////////////////////////////////////////////////////////

echo "Manipulasi String Dengan Mengakses Karakter menggunakan []"."\n";
$nama = "FAIZ";
echo $nama[0]."\n"; //Mengakses Karakter []
echo $nama[1]."\n";
echo $nama[2]."\n";
echo $nama[3]."\n"."\n";

////////////////////////////////////////////////////////

echo "Manipulasi String Dengan Variable Parsing $"."\n";
$name = "Faiz";
echo "Hallo $name ! selamat belajar ya :)"."\n"."\n"; //Variable Parsing menggunakan $namaVariable

////////////////////////////////////////////////////////

echo "Manipulasi String dengan Curly Brace {}"."\n";
echo "This is {$name}'s house"; //Manipulasi String dengan Curly Brace

/*
Cara Manipulasi String menggunakan operator:

    1. Operator Dot/Titik (.)
    - Operator dot adalah operator yang bisa digunakan untuk menambahkan string dengan tipe data lain.
    - Bisa menggunakan + (Plus) untuk menambahkan string. TAPI jika menambahkan string dengan tipe data NUMBER, maka akan terjadi ERROR.

    2. Konversi ke Tipe Data Number dan Sebaliknya menggunakan tanda kurung tutup&buka ()
    - Jika ingin konversi tipe data dari string ke integer atau float, atau sebaliknya. bisa menggunakan tanda kurung buka/tutup.
    
    3. Mengakses Karakter menggunakan []
    - String pada PHP seperti Array of Karakter/Huruf yang kita bisa akses data setiap karakternya
    - Sama seperti array, cara mengakses nya dengan menggunakan INDEX yang di mulai dari 0
    - JIKA kita akses index melebihi jumlah karakter string nya, maka akan terjadi ERROR

    4. Variable Parsing menggunakan $namaVariable
    - Khusus string menggunakan heredoc atau double quote/", bisa menggunakan $ untuk mengakses variable
    - Memudahkan ketika ingin menggabungkan string dengan variable

    5. Manipulasi String dengan Curly Brace {}
    - Berguna untuk menggabungkan variable dengan string tanpa spasi.
    - Sulit jika menggunakan VARIABLE PARSING
*/