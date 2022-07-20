<?php
// Single Quote String / Kutip Satu ('string')
echo 'Nama :';
echo 'Faiz Ivan Dharmawan';

// Double Quote String / Kutip Dua ("string")
echo "\n";
echo "\n";

echo "Nama :";
echo "\n";
echo "Faiz\t Ivan\t Dharmawan\n\n";

// Multiline String (Heredoc) <<<FAIZ (pembuka) & FAIZ; (penutup) 
echo <<<FAIZ
Saya kelak akan menjadi programmer yang hebat
dan akan membanggakan keluarga saya dengan usaha saya
dan yang paling penting adalah dengan doa dan bantuan dari Allah Subhannahuwata'ala
FAIZ;

echo"\n";
echo"\n";

// Multiline String (Nowdoc) <<<'FAIZ' (pembuka) & FAIZ; (penutup) 
echo <<<'FAIZ'
Saya kelak akan menjadi programmer yang hebat
dan akan membanggakan keluarga saya dengan usaha saya
dan yang paling penting adalah dengan doa dan bantuan dari Allah Subhannahuwata'ala
FAIZ;


/*
NOTE :
- Tipe data String adalah representasi dari teks
- String bisa mengandung kosong atau banyak karakter

Beberapa cara menuliskan String pada PHP :
- Single Quote String / Kutip Satu ('string')
- Double Quote String / Kutip Dua ("string"). Double Quote String mendukung penggunaan Escape Sequence (n\, \t, dll)
- Multiline String (Heredoc). Adalah fitur PHP untuk membuat String yang panjang tanpa perlu menggunakan Escape Sequence
- Multiline String (Nowdoc). Sama seperti (Heredoc), yang membedakan adalah tidak memiliki kemampuan PARSING seperti (Heredoc) dan Double Quote

*/