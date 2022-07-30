<?php

//Require 
require "library/requireTest.php"; //program akan error, jika tidak ada file requireTest.php

echo sayHallo("Faiz","Ivan");


//Include
include "library/includeTest.php";

echo sayHallo2("Faiz Ivan", 28);

//Require Once/Include Once
include_once "library/requireTest.php";

echo sayHallo("Fajril Ikhsanu",20);


/*
Pada saat membuat aplikasi, biasanya lokasi file akan di pisah pada beberapa folder.
    - Function Require dan Include berfungsi untuk mengambil file php lain.
    - Function Require dan Include harus di tempatkan di paling atas, karena jika di letakan di bawah tidak akan terpanggil.
    - INTI NYA : Function Include dan Require cara kerja nya sama seperti CSS/Javascript eksternal karena function nya di letakan pada file terpisah

WARNING : 
    - Function Require dan Include akan selalu mengambil file yang kita inginkan
    - Jika kita beberapa kali menggunakan Require dan Include file yang sama, maka file tersebut akan berkali-kali pula di ambil
    - Hal ini akan menyebabkan masalah jika misalnya didalam file yang kita ambil terdapat definisi function, sehingga jika di ambil berkali-kali akan menyebabkan error redeclare function

Require : 
- Pada require, jika file yang kita ambil tidak ada maka program akan error dan akan berhenti

Include :
- Pada include, jika file yang di ambil tidak ada maka program hanya akan memberi peringatan, tapi program akan tetap di lanjutkan

Require Once dan Include Once : 
    - Berfungsi untuk mendeteksi jika sebelumnya pernah mengambil file yang sama, dan tidak akan di ambil lagi.

*/