<?php
// Callback Function
function sayHallo(string $name , callable $filter) //callable adalah sebagai penanda sebuah Parameter/Argument yang ingin di panggil kembali
{
    $finalName = call_user_func($filter, $name); //call_user_func($namaArgument) adalah pemanggil 
    echo "Hallo $finalName"."\n";
}

sayHallo("Faiz", function($name){return strtoupper($name); });
sayHallo("Faiz","strtolower");
sayHallo("Faiz","strtoupper");


/*
Callback Function :
    - adalah sebuah mekanisme Function memanggil Function lainnya sesuai dengan yang di berikan pada Argument/Parameter
    - Callback sudah digunakan pada materi Variable Function dan Anonymous
    - TAPI ada cara lain untuk implementasi Callback, yaitu dengan tipedata callable 
    - Untuk memanggil callback Function tersebut, bisa menggunakan Function call_user__func(callable, arguments)
*/