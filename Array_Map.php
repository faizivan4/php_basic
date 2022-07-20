<?php
//Cara penulisan MAP pada Array

// Cara 1
$customer1 = array (
    "id" => "faiz",
    "name" => "Faiz Ivan Dharmawan",
    "age" => 27
);

// Cara 2
$customer2 = [
    "id" => "fajri",
    "name" => "Fajri Ikhsanu",
    "age" => 28
];

var_dump ($customer1);
echo "\n";
var_dump ($customer2);

///////////////////////////////////////////////////////
echo "Berikut adalah data Customer 2 : \n";

echo "ID : ";
echo ($customer2["id"]); 
echo "\n";
echo "Nama : ";
echo ($customer2["name"]);
echo "\n";
echo "Usia : ";
echo ($customer2["age"]);
echo "\n";
echo "\n";
////////////////////////////////////////////////////////

//Array dalam Array
// Contoh penulisan Array dalam Array :
$customer3 =[
    "id" => "Trisna",
    "name" => "trisna Wijaya",
    "age" => 27,
    "address" => [
        "city" => "Tangerang",
        "country" => "Indonesia"
    ]
];

echo "Nama : ";
echo ($customer3["name"]);
echo "\n";
echo "Asal Negara : ";
echo ($customer3["address"]["country"]);

/*
MAP pada Array PHP
- MAP adalah asosiasi/perkumpulan antara key dan value
- Secara default Array akan menggunakan index berupa number yang dimulai dari [0,1,2,3,...] sebagai KEY nya.
    dan VALUE nya kita bebas dimasukan data apa saja.
- MAP pada Array PHP mendukung untuk mengganti index yang tadinya berupa number/angka, menjadi tipe data apa saja. misalnya string/huruf.

Array dalam Array (AKAN SERING DIGUNAKAN)
- Array pada php bisa juga berupa Array lagi seperti contoh di atas pada array customer3 terdapat array address yang di dalam nya terdapat data
*/