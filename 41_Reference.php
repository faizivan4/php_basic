<?php

$name = "faiz";

$otherName = &$name; 
$otherName = "Ivan";

echo $name."\n";

//output nya adalah "Ivan", karena kita mendeklarasikan kembali value dari varibale $otherName/$name tersebut menjadi "ivan"


/*
Reference/Alias : 
    - Adalah mengakses variable yang sama dengan nama variable yang berbeda
    - Analogi Reference seperti File, jika variable adalah File, dan Value adalah isi File nya, maka Reference adalah membuat shortcut pada file yang sama.
    - Saat mengubah isi Value dari Reference, maka secara otomatis value variable aslinya pun berubah.
    - Untuk membuat Reference pada Variable, bisa menggunakan tanda & (dan).

NOTE : 
    - REFERENCE BISA MEMBUAT BEBERAPA VARIABLE MENUJU VALUE YANG SAMA.
*/