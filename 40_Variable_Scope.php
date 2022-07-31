<?php

//Variable Scope

// Variable Local Scope 
function sayHallo($name1 = "Faiz"){ //(variable $name1 berada di dalam function sayHallo)
    echo $name1."\n";
}

sayHallo();

// Global Scope
$name2 = "Fajri Ikhsanu";

function sayHallo2()
{
    global $name2; //keyword "global" membuat kita bisa mengakses variable $name2 dari luar function sayHallo2()
    echo "Hallo buddy, my name is $name2"."\n";
}

sayHallo2();

// Static Scope
function increment()
{
    static $counter = 1; //deklarasi Variable Static Scope

    echo "Counter = $counter"."\n";

    $counter++;
}

increment();
increment();
increment();
 
/*
Variable Scope : 
    Adalah tempat dimana saja sebuah Variable bisa DI AKSES.

3 Jenis Variable Scope : 
    - Global : 
        * Variable yang di buat diluar function memiliki scope global
        * Variable Global Scope hanya bisa akses DARI LUAR FUNCTION
        * Artinya, di dalam function kita tidak bisa mengakses variable di global scope

        Keyword "global"
        * Jika ingin mengakses variable diluar function (Global Scope) dari dalam function, bisa gunakan kata kunci "global"
        * Kata kunci "global" membuat kita bisa mengakses variable yang ada di luar function.

        $GLOBALS variable
        * Selain menggunakan global keyword, setiap variable yang dibuat di global scope, secara otomatis disimpan didalam array $GLOBAL oleh PHP
        * Maka kita bisa menggunakan $GLOBAL variable dengan key nama variable nya dari dalam function jika ingin mengakses global variable
        * $GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun

    - Local : 
        * Variable yang dibuat di dalam function memiliki scope local
        * Variable di Scope Local hanya bisa di akses dari dalam function itu sendiri
        * Artinya variable tersebut tidak bisa di akses dari luar function ataupun dari function lain

    - Static : 
        * Default nya, Local Varibale siklus hidup nya hanya sebatas function nya di eksekusi.
        * Jika function selesai di eksekusi, maka siklus hidup local variablenya selesai
        * Static Scope hanya bisa di set di Local Variable
        * Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai di eksekusi
        * Artinya, jika function nya di eksekusi lagi maka static variable akan memiliki value/data/nilai yang sama dengan sebelumnya.
*/