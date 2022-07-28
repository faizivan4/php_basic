<?php

//Penggunaan Switch Statement
$nilai = "A";


// Switch Statement (==)
if ($nilai == "A"){
    echo"Anda Lulus dengan Baik !"."\n";
}else if($nilai == "B" || $nilai=="C"){
    echo"Anda Lulus Dengan Biasa-biasa Aja !"."\n";    
}else if($nilai == "D"){
    echo"Anda tidak lulus !"."\n";
}else {
    echo "Kayanya Lo salah Jurusan BRO !"."\n";
}
echo "\n"."\n";


// Menyederhanakan Switch Statement
switch ($nilai) { 
    case "A": //(case "A":) berfungsi sebagai "if($nilai=="A"), (:titik dua) berfungsi sebagai "Maka",  
        echo "Selamat anda LULUS DENGAN SANGAT BAIK"."\n";
        break; // (break) berfungsi untuk menghentikan program jika sebuah kondisi sudah terpenuhi, jika tidak ada "break", maka program akan lanjut ke kondisi selanjutnya.
    case "B":
    case "C":
        echo "Anda Lulus"."\n";
        break;
    case "D":
        echo "Anda TIDAK LULUS !"."\n";
        break;
    default: // (default) berfungsi sebagai "else" pada ujung kondisi. akan di baca (jika variable "nilai" hasilnya selain A,B,C,D. maka output nya "Mungkin anda salah jurusan)
        echo "Mungkin anda tidak pantas disini !"."\n";
}


/*
NOTE 
Switch Statement :
    - Digunakan untuk melakukan percabangan yang hanya membandingkan 1 variable dengan nilai-nilai yang kita inginkan.
    - Switch adalah statement percabangan yang sama dengan IF, tapi lebih sederhana pembuatannya.
    - Kondisi pada Switch hanya untuk perbandingan (==)
*/