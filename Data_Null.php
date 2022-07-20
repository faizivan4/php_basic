<?php
// Data NULL
$name = "faiz";
$age = 30;

$name = null;
$age = null;

echo "Name : ";
echo "$name";
echo "\n";

echo "Age : ";
echo "$age";
echo "\n";

// penggunaan function "is_null($namaVariable);"
echo "Is Name Null? :";
echo is_null($name);
echo "\n";

echo "Is Age NULL? :";
var_dump(is_null($age));
echo "\n";

// penggunaan function "unset($namavariable);"
$contoh = "faiz";
unset($contoh);

echo $contoh;
echo "\n";

// penggunaan function "isset($namavariable);" NOTE : USE isset($namavariable); INSTEAD unset($namavariable);
$contoh2 = "fajri";
isset($contoh2);

echo "Apakah contoh2 ada dan nilai nya tersedia : ";
var_dump(isset($contoh2));

/*
NOTE :
- Nilai NULL adalah presentasi dari sebuah Variable tanpa Nilai/Value
- NULL bisa di gunakan Saat kita membuat sebuah variable lalu ingin menghapus data yang ada pada variable tersebut untuk mengosongkan Value/Nilai pada Variable tersebut 
- Membuat NULL bisa gunakan keyword "NULL" 
- NULL sifatnya "case insensitive"

Fungsi is_null($namavariable)
- is_null($namavariable) adalah sebuah function yang digunakan untuk mengetahui apakah sebuah variable adalah NULL atau tidak.
- Outout dari is_null($namavariable), adalah boolean (1/0) true/false
- is_null($namavariable) digunakan hanya untuk variable yang sudah di buat. jika is_null($namavariable) di deklarasikan untuk variable yang tidak ada, maka program akan ERROR !

Fungsi unset($namaVariable);
- unset($namaVariable); digunakan untuk menghapus sebuah variable 
    (NOTE : jika sudah menghapus sebuah variable dengan function unset, variable tersebut tidak akan bisa di akses kembali. function is_null akan error jika akses pada variable yang sudah di hapus tersebut)
- Akan lebih aman menggunakan fungsi isset($namaVariable); untuk mengecek sebuah variable ada, dan nilai nya tidak NULL.
    */