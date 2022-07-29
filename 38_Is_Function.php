<?php

$data1 = "Faiz ivan";
$data2 = 12345 ;
$data3 = "true" ;

// Beberapa contoh is Function
// is_string() 
var_dump(is_string($data1))."\n";

// is_bool()
var_dump(is_bool($data3))."\n";

// is_int()
var_dump(is_int($data2))."\n";

// is_float()
var_dump(is_float($data3))."\n";

// is_array()
var_dump(is_array($data2))."\n";

// is_callable()
var_dump(is_callable($data3))."\n";

/*
- is Function rata-rata digunakan untuk mengecek tipe data dari sebuah data
- return value/output yang dihasilkan is Function adalah boolean trus/false
*/